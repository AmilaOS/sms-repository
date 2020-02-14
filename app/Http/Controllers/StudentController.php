<?php

namespace App\Http\Controllers;

use App\Student;
use App\Invoice;
use App\CardMarking;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Log;
use Auth;
use DB;

class StudentController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $this->isCashier();
        // return view('student.student_register');
        $data['students'] = Student::orderBy('id','desc')->paginate(5);
        return view('student.student_register',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gen = "Gender";
         $validator = Validator::make($request->all(), [
            'student_name'=>'required|max:100|min:5',
            'student_address'=>'required|max:120|min:10',
            'student_location'=>'required|min:5|max:20',
            'student_age'=>'required|gt:5|lt:100|numeric',
            'student_dob'=>'required',
            'student_nic'=>'max:13|min:10|unique:students,student_nic',
            'student_grade'=>'required',
            'student_private_contact'=>'max:10|unique:students,student_private_contact',
            'student_guardian_contact'=>'required|max:10|unique:students,student_guardian_contact',
            'student_type'=>'required',
            'student_remarks'=>'max:200',
            'student_gender'=>'not_in:'.$gen,
            'created_by'=>'required|max:100|min:5',
        ]);

        if ($validator->passes()) {

            $student = new Student;
            $count = Student::count();
            $StudID = 0;
            if($count == 0) {
               $StudID=1;
            }else {
              $nextStudent = Student::whereRaw('id = (select max(`id`) from students)')->first();
                $StudID=$nextStudent->id+1;
            }
            
            $ydate = date('Y');
            $mdate = date('m');
            $ddate = date('d');
            //fiest 5 digit shoud represent the institute id
            $barcodeID = '001'.$ydate.''.$mdate.''.$ddate.''.$StudID;

            $student->student_name      = $request->student_name;
            $student->student_address   = $request->student_address;
            $student->student_location  = $request->student_location;
            $student->student_age       = $request->student_age;
            $student->student_dob       = $request->student_dob;
            $student->student_nic       = $request->student_nic;
            $student->student_grade     = $request->student_grade;
            $student->student_private_contact = $request->student_private_contact;
            $student->student_guardian_contact = $request->student_guardian_contact;
            $student->student_type      = $request->student_type;
            $student->student_barcode   = $barcodeID;
            $student->student_remarks   = $request->student_remarks;
            $student->student_gender   = $request->student_gender;
            $student->created_by        = $request->created_by;
            $student->student_institute = $request->student_institute;

            $student->save();
            $saved_student_id = Student::max('id');
            return response()->json(['success'=>'Added new records.','student_id'=>''.$saved_student_id]);
        }
        return response()->json(['error'=>$validator->getMessageBag()->toArray()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

    public function isavailable(Request $request)
    {
        $current_date = date("Y-m-d H:i:s");

        $is_exist_student = Student::where('id','=',$request->student_id_is_available)->first();
        $is_payment_data = Invoice::where('invoice_student_id','=',$request->student_id_is_available)
                                     ->where('created_at','<=',$current_date)->take(8)->get();
        // dd($request->student_id_is_available);
        if($is_exist_student){
            if($is_exist_student->student_status=="1"){
                $data['students'] = $is_exist_student;
                return response()->json([
                                         'success'=>'ID Success!',
                                         'stud_data'=>$is_exist_student,
                                         'paymet_history'=>$is_payment_data
                                        ]);
            }else{
               return response()->json(['error'=>'Student ID ['.$is_exist_student->id.'] has deactivated! Please active to continue!']); 
            }
         }else{
            return response()->json(['error'=>'Student ID Not Found!']);
        }
    }

    public function isQRAvailable(Request $request)
    {
        $is_exist_student = Student::where('student_barcode','=',$request->student_id_is_available)->first();
        $is_payment_data = Invoice::where('invoice_student_id','=',$request->student_id_is_available)
                                     ->where('created_at','<=',$current_date)->take(8)->get();
        // dd($request->student_id_is_available);
        if($is_exist_student){
            if($is_exist_student->student_status=="1"){
                $data['students'] = $is_exist_student;
                return response()->json([
                                         'success'=>'ID Success!',
                                         'stud_data'=>$is_exist_student,
                                         'paymet_history'=>$is_payment_data
                                        ]);
            }else{
               return response()->json(['error'=>'Student ID ['.$is_exist_student->id.'] has deactivated! Please active to continue!']); 
            }
         }else{
            return response()->json(['error'=>'Student ID Not Found!']);
        }
    }

    public function photoUploadFresh(Request $request){
        $validator = Validator::make($request->all(), [
            'imageUpload' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validator->passes()) {
            
            $isStudentFresh = Student::where('id','=',$request->student_id)->first();
            if($isStudentFresh){
                $isStudentActive = Student::where('student_status','=','1')->where('id','=',$request->student_id)->first();
                if($isStudentActive){
                    $image = $request->file('imageUpload');
                    $new_name = $request->student_id . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('../private_image_store/student_images/original'), $new_name);
                    $student = Student::find($request->student_id);
                    if($student) {
                        $student->student_image = '1';
                        $student->save();
                        return response()->json(['success'=>'Photo uploaded successfully! SHOULD SETUP UPLOADING METHOD']);
                    }else{
                        // Log::warning("Error----> Unautherized try! | StudentController| student");
                        return response()->json(['error'=>'Unautherized try!']);
                    }
                }else{
                    // Log::warning("Error----> Unautherized try! | StudentController| isStudentActive");
                    return response()->json(['error'=>'Unautherized try!']);
                }
            }else{
                // Log::warning("Error----> Unautherized try! | StudentController| isStudentFresh");
                return response()->json(['error'=>'Unautherized try!']);
            }
            
        }else{
            return response()->json(['error'=>$validator->errors()->all()]);
        }
    
}

public function profile(){
    // return view('student.student_register');
        // $data['students'] = Student::where('id','=',6)->first();
    $student = Student::where('id','=',6)->first();
        if($student->student_image!=1){
            $student->student_image = 'profile-dummy';
        }else{
            $student->student_image = $student->id;
        }
        $data['students'] = $student;
        return view('student.student_full_profile',$data);
}

public function isavailablemarking(Request $request){
    $current_date = date("Y-m-d");
    $marking_lecture_id = 1;

    $is_record_exist = CardMarking::where('student_barcode','=',$request->student_id_is_available)
                                  ->where('created_at','>=',$current_date.' 00:00:00')
                                  ->where('marking_lecture_id','=','1')->first();


     $is_exist_student = Student::where('student_barcode','=',$request->student_id_is_available)->first();
        $is_payment_data = Invoice::where('invoice_student_id','>=',$request->student_id_is_available)
                                     ->where('created_at','<=',$current_date)->take(8)->get();
                                    
        // dd($request->student_id_is_available);
        if($is_exist_student){
            if($is_exist_student->student_status=="1"){
                $data['students'] = $is_exist_student;
                return response()->json([
                            'success'=>'ID Success!',
                            'stud_data'=>$is_exist_student,
                            'paymet_history'=>$is_payment_data
                        ]);
            }else{
               return response()->json(['error'=>'Student ID ['.$is_exist_student->id.'] has deactivated! Please active to continue!']); 
            }
         }else{
            return response()->json(['error'=>'Student ID Not Found!']);
        }
}


    private function isAdmin(){
        $logged_user = Auth::user();
        if($logged_user->role=="ADMIN"){
            
        }else{
            return abort(404);
        }
    }

    public function studentReport(Request $request){
        $this->isAdmin();
        $data_sets_students = DB::table('students')
                    ->where('student_status','=','1')
                    ->whereBetween('created_at', [$request->from_date." 00:00:00", $request->to_date." 23:59:59"])
                    ->orderBy('created_at', 'asc')
                    ->Paginate(10);
         if ($request->gettype) {
            return view('reports.admin-student-report', compact('data_sets_students'));
        }
        $data_sets_students = Student::where('student_status','=','1')
                                ->orderBy('created_at', 'asc')
                                ->paginate(10);
                                
        return view('reports.pagination-student', compact('data_sets_students'));
    }

    public function studentdelete(Request $request){
        $this->isAdmin();
        if($request->student_id){
            $room = Student::find($request->student_id);
            $room->student_status='0';
            $room->save();

            return response()->json(['success'=>'Deleted!']);
        }else{
            return response()->json(['error'=>'Not deleted!']);
        }

    }

    public function isCashier(){
        $logged_user = Auth::user();
        if($logged_user->role=="CASHIER"){
           return abort(404); 
        }
    }
}

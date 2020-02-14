<?php

namespace App\Http\Controllers;

use App\Teacher;
use Validator;
use Illuminate\Http\Request;
use Auth;
use DB;

class TeacherController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $this->isCashier();
        return view('lecturer.teacher_register');
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
        $this->isCashier();
        $validator = Validator::make($request->all(), [
            'teacher_status' => 'required|max:1',
            'teacher_title' => 'required|max:15',
            'teacher_name' => 'required|max:100',
            'teacher_dob' => 'max:10',
            'teacher_group' => 'required|max:20',
            'teacher_address' => 'max:150',
            'revenue_percentage'=>'required|max:2|min:1',
            'teacher_mobile' => 'required|max:10|min:10|unique:teachers,teacher_mobile',
            'teacher_subject' => 'required|max:50',
//            'teacher_image' => 'max:5120',
            'teacher_bank_account' => 'max:50',
            'teacher_notes' => 'max:200',
            'teacher_nic' => 'required|max:12|min:9|unique:teachers,teacher_nic'
        ]);

        if ($validator->passes()) {
            $logged_user = Auth::user();
            $teacher = new Teacher;
            $teacher->created_by = $logged_user->name;
            $teacher->teacher_status = $request->teacher_status;
            $teacher->teacher_title = $request->teacher_title;
            $teacher->teacher_name = $request->teacher_name;
            $teacher->teacher_dob = $request->teacher_dob;
            $teacher->teacher_group = $request->teacher_group;
            $teacher->teacher_address = $request->teacher_address;
            $teacher->teacher_mobile = $request->teacher_mobile;
            $teacher->teacher_subject = $request->teacher_subject;
//            $teacher->teacher_image = $request->teacher_image;
            $teacher->teacher_bank_account = $request->teacher_bank_account;
            $teacher->teacher_notes = $request->teacher_notes;
            $teacher->teacher_nic = $request->teacher_nic;
            $teacher->teacher_institute = $request->teacher_institute;
            $teacher->revenue_percentage = $request->revenue_percentage;
            

            $teacher->save();
            return response()->json(['success'=>'Added new records.']);
        }
        return response()->json(['error'=>$validator->errors()->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }


        private function isAdmin(){
        $logged_user = Auth::user();
        if($logged_user->role=="ADMIN"){
            
        }else{
            return abort(404);
        }
    }

    public function teacherReport(Request $request){
        $this->isAdmin();
        $data_sets_teachers = DB::table('teachers')
                    ->where('teacher_status','=','1')
                    ->whereBetween('created_at', [$request->from_date, $request->to_date])
                    ->orderBy('created_at', 'asc')
                    ->Paginate(10);
         if ($request->gettype) {
            return view('reports.admin-teacher-report', compact('data_sets_teachers'));
        }
        $data_sets_teachers = Teacher::where('teacher_status','=','1')
                                ->orderBy('created_at', 'asc')
                                ->paginate(10);
        return view('reports.pagination-teacher', compact('data_sets_teachers'));
    }

    public function teacherdelete(Request $request){
        $this->isAdmin();
        if($request->teacher_id){
            $room = Teacher::find($request->teacher_id);
            $room->teacher_status='0';
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

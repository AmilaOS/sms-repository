<?php

namespace App\Http\Controllers;

use App\Lecture;
use App\Teacher;
use App\Institute;
use Illuminate\Http\Request;
use Validator;
use Auth;
use DB;
class LectureController extends Controller
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
        return view('lecture.lecture_register');
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

            'lecture_name' => 'required|max:100|min:5|unique:lectures,lecture_name',
            'lecture_status' => 'required',
//           'lecture_end_date' => 'required',
            'lecture_lecturer' => 'required|max:30',
            'lecture_classroom' => 'required',
            'lecture_start_date'=>'required',
            'lecture_end_date'=>'required',
            'lecture_more_information' => 'max:300',
            'lecture_hall_operator' => 'required|max:50',
            'lecture_fee'=>'max:8|required'
        ]);
        $institute = "";
         try{
            $institute = Institute::where('institute_short_code', $request->lecture_institute)->first();
            if($institute->institute_short_code==$request->lecture_institute){
                 if($validator->passes()) {
                    $selected_teacher = "";
                    try{
                       $selected_teacher = Teacher::where('id', '=', $request->lecture_lecturer)->first();
                       if($selected_teacher){
                            if($selected_teacher->teacher_status=='0'){
                                return response()->json(['error'=>["Invalid lecture id (deleted). Please enter a currently added lecture!"]]);
                            }
                        }else{
                            return response()->json(['error'=>["Might be there are no Lecturer records!2"]]);
                        }
                    }catch(Exception $e){
                        return response()->json(['error'=>["Might be there are no Lecturer records!1"]]);
                    }

                    if($selected_teacher->id==$request->lecture_lecturer){
                        $logged_user = Auth::user();
                        $lecture = new Lecture;
                        $lecture->created_by = $logged_user->name;
                        
                        $lecture->lecturer_name = $selected_teacher->teacher_name;
                        $lecture->lecture_name = $request->lecture_name;
                        $lecture->lecture_status = $request->lecture_status;
                        $lecture->lecture_start_date = $request->lecture_start_date;
                        $lecture->lecture_end_date = $request->lecture_end_date;
                        $lecture->lecture_lecturer = $request->lecture_lecturer;
                        $lecture->lecture_classroom = $request->lecture_classroom;
                        $lecture->lecture_more_information = $request->lecture_more_information;
                        $lecture->lecture_hall_operator = $request->lecture_hall_operator;
                        $lecture->lecture_institute = $institute->institute_short_code;
                        $lecture->lecture_fee = $request->lecture_fee;

                        $lecture->save();
                        return response()->json(['success'=>'Added a new record.']);
                    }else{
                        // dd($selected_teacher.' '.$request->lecture_name);
                        return response()->json(['error'=>["Invalid lecture id. Please enter a currently added lecture!"]]);
                    }

                    
                }
                return response()->json(['error'=>$validator->errors()->all()]);
            }
        }catch(Exception $e){
            return response()->json(['error'=>["Error. Please log in again.!"]]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function show(Lecture $lecture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecture $lecture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecture $lecture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecture $lecture)
    {
        //
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
        public function isavailable(Lecture $lecture)
    {
        if(true){
             return response()->json(['success'=>'ID Success!']);
        }
       
        return response()->json(['error'=>'Student ID Not Found!']);
    }

        private function isAdmin(){
        $logged_user = Auth::user();
        if($logged_user->role=="ADMIN"){
            
        }else{
            return abort(404);
        }
    }

    public function lectureReport(Request $request){
        $this->isAdmin();
        $data_sets_lectures = DB::table('lectures')
                    ->where('lecture_status','=','on')
                    ->whereBetween('created_at', [$request->from_date, $request->to_date])
                    ->orderBy('created_at', 'asc')
                    ->Paginate(5);
         if ($request->gettype) {
            return view('reports.admin-lecture-report', compact('data_sets_lectures'));
        }
        $data_sets_lectures = Lecture::where('lecture_status','=','on')
                                ->orderBy('created_at', 'asc')
                                ->paginate(5);
        return view('reports.pagination-lecture', compact('data_sets_lectures'));
    }

    public function lecturedelete(Request $request){
        $this->isAdmin();
        if($request->lecture_id){
            $room = Lecture::find($request->lecture_id);
            $room->lecture_status='0';
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

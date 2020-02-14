<?php

namespace App\Http\Controllers;

use App\Classroom;
use Validator;
use Illuminate\Http\Request;
use Auth;
use DB;

class ClassroomController extends Controller
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
    {
        $this->isCashier();
        return view('classroom.classroom_register');
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
            'room_number' => 'required|max:20|min:5|unique:classrooms,room_number',
            'room_name' => 'required|max:50|min:5|unique:classrooms,room_name',
            'room_student_amount' => 'required|gt:4|lt:1000000',
            'room_description' => 'max:200',
            'room_category' => 'max:20',
            'room_status' => 'max:1',
        ]);

        if ($validator->passes()) {
            if($request->room_category=='Choose option'){
                return response()->json(['error'=>["Please choose a classroom type!"]]);
            }

            $roomnamePrefixed = $request->room_institute.'_'.$request->room_name;

            $classroom = new Classroom;
            $classroom->room_number = $request->room_number;
            $classroom->room_name = $roomnamePrefixed;
            $classroom->room_student_amount = $request->room_student_amount;
            $classroom->room_description = $request->room_description;
            $classroom->room_category = $request->room_category;
            $classroom->room_status = $request->room_status;
            $classroom->room_institute = $request->room_institute;
            $classroom->save();
            return response()->json(['success'=>'Added new records.']);
        }
        return response()->json(['error'=>$validator->errors()->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classroom $classroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
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

    public function classroomReport(Request $request){
        $this->isAdmin();

        $data_sets = DB::table('classrooms')
                    ->where('room_status','=','1')
                    ->whereBetween('created_at', [$request->from_date." 00:00:00", $request->to_date." 23:59:59"])
                    ->orderBy('created_at', 'asc')
                    ->Paginate(5);

         if ($request->gettype) {

            return view('reports.admin-classroom-report', compact('data_sets'));
        }
        $data_sets = Classroom::where('room_status','=','1')
                                ->orderBy('created_at', 'asc')
                                ->paginate(5);
        return view('reports.pagination-classroom', compact('data_sets'));
    }

    public function classroomdelete(Request $request){
        $this->isAdmin();
        if($request->classroom_id){
            $room = Classroom::find($request->classroom_id);
            $room->room_status='0';
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

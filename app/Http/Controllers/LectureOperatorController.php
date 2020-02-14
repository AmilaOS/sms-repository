<?php

namespace App\Http\Controllers;

use App\LectureOperator;
use Illuminate\Http\Request;
use Validator;
use Auth;

class LectureOperatorController extends Controller
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
        return view('lectureoperator.lectureoperator');
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
            'lecture_hall_operator_name'=>'required|max:100|min:5',
            'lecture_hall_operator_contact'=>'required|max:10|min:10',
            'lecture_hall_operator_lec_room'=>'required',
            'lecture_hall_operator_info'=>'max:300',
            'created_by'=>'required|max:100|min:5',
        ]);

        if ($validator->passes()) {
            $lecture_operator = new LectureOperator;
            $lecture_operator->lecture_hall_operator_name = $request->lecture_hall_operator_name;
            $lecture_operator->lecture_hall_operator_contact = $request->lecture_hall_operator_contact;
            $lecture_operator->lecture_hall_operator_lec_room = $request->lecture_hall_operator_lec_room;
            $lecture_operator->lecture_hall_operator_info = $request->lecture_hall_operator_info;
            $lecture_operator->lecture_hall_operator_status = $request->lecture_hall_operator_status;
            $lecture_operator->created_by = $request->created_by;

            $lecture_operator->save();
            return response()->json(['success'=>'Added new records.']);
        }
        return response()->json(['error'=>$validator->errors()->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LectureOperator  $lectureOperator
     * @return \Illuminate\Http\Response
     */
    public function show(LectureOperator $lectureOperator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LectureOperator  $lectureOperator
     * @return \Illuminate\Http\Response
     */
    public function edit(LectureOperator $lectureOperator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LectureOperator  $lectureOperator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LectureOperator $lectureOperator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LectureOperator  $lectureOperator
     * @return \Illuminate\Http\Response
     */
    public function destroy(LectureOperator $lectureOperator)
    {
        //
    }
    public function isCashier(){
        $logged_user = Auth::user();
        if($logged_user->role=="CASHIER"){
           return abort(404); 
        }
    }
}

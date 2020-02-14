<?php

namespace App\Http\Controllers;

use App\CardMarking;
use App\Student;
use App\Lecture;
use App\Invoice;
use Validator;
use Illuminate\Http\Request;
use Auth;

class CardMarkingController extends Controller
{
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
        return view('cardmark.cardmarker');
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
        // dd($request);
        $validator = Validator::make($request->all(), [
            'student_barcode'=>'required',
            'marking_institute'=>'required',
            'marking_operator_id'=>'required',
            'marking_lecture_title'=>'required',
            'created_by'=>'required',
        ]);
        if ($validator->passes()) {
// ======================================================================


             $current_date = date("Y-m-d");
                 $is_exist_student = Student::where('student_barcode','=',$request->student_barcode)->first();
                 $is_exist_lecture = Lecture::where('id','=',$request->invoice_lecture_id)->first();
                 
                                                    
                    if($is_exist_student){
                        if($is_exist_student->student_status=="1"){
                            if($is_exist_lecture){


                                 // check payments
                                $month_first_date = date('Y-m-d 00:00:00',strtotime("first day of this month"));
                                $month_last_date = date('Y-m-d 00:00:00',strtotime("last day of this month"));
                                $is_payment_data  = Invoice::where('invoice_student_id','=',$is_exist_student->id)
                                                             ->where('invoice_lecture_id','=',$request->invoice_lecture_id)
                                                             ->where('created_at','>=',$month_first_date)->first();
                                //PRESENCE HISTORY                            
                                $presence_history = CardMarking::whereBetween('created_at', [$month_first_date, $month_last_date])
                                                                  ->where('marking_lecture_id','=',$request->invoice_lecture_id)
                                                                  ->orderBy('created_at', 'DESC')->take(8)->get();

                                $month_first_date_ = date('d',strtotime("first day of this month"));
                                $month_last_date_  = date('d',strtotime("last day of this month"));
                                $month_current_date = date('d',strtotime($current_date.' 00:00:00'));

                                if($is_payment_data){
                                    $paid_date = date("d-m-Y", strtotime($is_payment_data->created_at));
                                    // $is_record_exist = CardMarking::where('student_barcode','=',$request->student_barcode)
                                    //                               ->where('updated_at','>=',$current_date.' 00:00:00')
                                    //                               ->where('marking_lecture_id','=',$request->invoice_lecture_id)->first();
                             


                                        // New Record
                                        $Cardmarking = new CardMarking;
                                        $Cardmarking->student_barcode = $request->student_barcode;
                                        $Cardmarking->marking_student_id = $request->student_barcode;
                                        $Cardmarking->marking_institute = $request->marking_institute;
                                        $Cardmarking->marking_operator_id = $request->marking_operator_id;
                                        $Cardmarking->marking_lecture_title = $request->marking_lecture_title;
                                        $Cardmarking->created_by = $request->created_by;
                                        $Cardmarking->marking_tute_state = $request->marking_tute_state;
                                        $Cardmarking->marking_remarks = $request->marking_remarks;
                                        $Cardmarking->marking_lecture_id = $request->invoice_lecture_id;
                                        $Cardmarking->payment_state = "still developping";
                                        $Cardmarking->save();

                                        return response()->json([
                                                'success'=>'Succeed!',
                                                'stud_data'=>$is_exist_student,
                                                'presence_history'=>$presence_history,
                                                'paid_at'=>$paid_date
                                            ]);

                                }else{
                                     //Payements NOT OK 
                                    return response()->json(['error'=>'NOT PAID','unpaid'=>'NOT PAID','presence_history'=>$presence_history]);
                                }

                            }else{
                                return response()->json(['error'=>'Not available such Lecture!']); 
                            }
                        }else{
                           return response()->json(['error'=>'Student ID ['.$is_exist_student->id.'] has deactivated! Please active to continue!']); 
                        }
                     }else{
                        return response()->json(['error'=>'Student ID Not Found!']);
                    }

// ==========================================================================

        }
        return response()->json(['error'=>$validator->getMessageBag()->toArray()]);
        
    }

    public function entrywithoutpaid(Request $request){
                // dd($request);
        $validator = Validator::make($request->all(), [
            'student_barcode'=>'required',
            'marking_institute'=>'required',
            'marking_operator_id'=>'required',
            'marking_lecture_title'=>'required',
            'created_by'=>'required',
        ]);
        if ($validator->passes()) {
// ======================================================================


             $current_date = date("Y-m-d");
                 $is_exist_student = Student::where('student_barcode','=',$request->student_barcode)->first();
                 $is_exist_lecture = Lecture::where('id','=',$request->invoice_lecture_id)->first();
                 
                                                    
                    if($is_exist_student){
                        if($is_exist_student->student_status=="1"){
                            if($is_exist_lecture){


                                 // check payments
                                $month_first_date = date('Y-m-d 00:00:00',strtotime("first day of this month"));
                                $month_last_date = date('Y-m-d 00:00:00',strtotime("last day of this month"));
                                $is_payment_data  = Invoice::where('invoice_student_id','=',$is_exist_student->id)
                                                             ->where('invoice_lecture_id','=',$request->invoice_lecture_id)
                                                             ->where('created_at','>=',$month_first_date)->first();
                                //PRESENCE HISTORY                            
                                $presence_history = CardMarking::whereBetween('created_at', [$month_first_date, $month_last_date])
                                                                  ->where('marking_lecture_id','=',$request->invoice_lecture_id)
                                                                  ->orderBy('created_at', 'DESC')->take(8)->get();

                                $month_first_date_ = date('d',strtotime("first day of this month"));
                                $month_last_date_  = date('d',strtotime("last day of this month"));
                                $month_current_date = date('d',strtotime($current_date.' 00:00:00'));

                                if($is_payment_data){
                                    $paid_date = date("d-m-Y", strtotime($is_payment_data->created_at));
                                    // $is_record_exist = CardMarking::where('student_barcode','=',$request->student_barcode)
                                    //                               ->where('updated_at','>=',$current_date.' 00:00:00')
                                    //                               ->where('marking_lecture_id','=',$request->invoice_lecture_id)->first();
                                
                                        // New Record
                                        $Cardmarking = new CardMarking;
                                        $Cardmarking->student_barcode = $request->student_barcode;
                                        $Cardmarking->marking_student_id = $request->student_barcode;
                                        $Cardmarking->marking_institute = $request->marking_institute;
                                        $Cardmarking->marking_operator_id = $request->marking_operator_id;
                                        $Cardmarking->marking_lecture_title = $request->marking_lecture_title;
                                        $Cardmarking->created_by = $request->created_by;
                                        $Cardmarking->marking_tute_state = $request->marking_tute_state;
                                        $Cardmarking->marking_remarks = $request->marking_remarks;
                                        $Cardmarking->marking_lecture_id = $request->invoice_lecture_id;
                                        $Cardmarking->payment_state = "still developping";
                                        $Cardmarking->save();

                                        return response()->json([
                                                'success'=>'Succeed!',
                                                'stud_data'=>$is_exist_student,
                                                'presence_history'=>$presence_history
                                            ]);

                                }else{
                                     //NOT PAID, BUT ACCEPTED
                                    // New Record
                                        $Cardmarking = new CardMarking;
                                        $Cardmarking->student_barcode = $request->student_barcode;
                                        $Cardmarking->marking_student_id = $request->student_barcode;
                                        $Cardmarking->marking_institute = $request->marking_institute;
                                        $Cardmarking->marking_operator_id = $request->marking_operator_id;
                                        $Cardmarking->marking_lecture_title = $request->marking_lecture_title;
                                        $Cardmarking->created_by = $request->created_by;
                                        $Cardmarking->marking_tute_state = $request->marking_tute_state;
                                        $Cardmarking->marking_remarks = $request->marking_remarks;
                                        $Cardmarking->marking_lecture_id = $request->invoice_lecture_id;
                                        $Cardmarking->payment_state = "NOT PAID";
                                        $Cardmarking->save();

                                    return response()->json([
                                                'success'=>'Succeed!',
                                                'stud_data'=>$is_exist_student,
                                                'presence_history'=>$presence_history
                                            ]);
                                }

                            }else{
                                return response()->json(['error'=>'Not available such Lecture!']); 
                            }
                        }else{
                           return response()->json(['error'=>'Student ID ['.$is_exist_student->id.'] has deactivated! Please active to continue!']); 
                        }
                     }else{
                        return response()->json(['error'=>'Student ID Not Found!']);
                    }

// ==========================================================================

        }
        return response()->json(['error'=>$validator->getMessageBag()->toArray()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CardMarking  $cardMarking
     * @return \Illuminate\Http\Response
     */
    public function show(CardMarking $cardMarking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CardMarking  $cardMarking
     * @return \Illuminate\Http\Response
     */
    public function edit(CardMarking $cardMarking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CardMarking  $cardMarking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CardMarking $cardMarking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CardMarking  $cardMarking
     * @return \Illuminate\Http\Response
     */
    public function destroy(CardMarking $cardMarking)
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

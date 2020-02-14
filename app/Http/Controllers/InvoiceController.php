<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Lecture;
use App\Student;
use App\FreeCard;
use Illuminate\Http\Request;
use Validator;
use Auth;
use DB;

class InvoiceController extends Controller
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
        $this->isNotCashier();
        return view('invoice.invoice');
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
     * LSIT ALL LECTURE NAMES
    **/
    public function returnLectures(){
        $lecture_list = Lecture::all();
       return response()->json(['lecture_list'=>$lecture_list]);
    }



    /**
     * CHECK SELECTED LECTURE AVAILABILITY
    **/
    public function lecture_price_filler(Request $request){

        // FIND ALL LECTURES BY LECTURE NAME
        $lecture_list =  Lecture::where('lecture_name', '=', $request->selected_lecture_name)->first();

        if($lecture_list){
            if($lecture_list->lecture_status=="on"){
            // IF USER STATUS == ON
                return response()->json(['lecture_list'=>$lecture_list]);
            }else{
                // IF USER STATUS == ON
                return response()->json(['error'=>'Selected Lecture is not valid!']);
            }
        }else{
           return response()->json(['error'=>'Selected Lecture is not valid!']); 
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
    public function payment(Request $request)
    {   
         $is_exist_student = Student::where('id','=',$request->invoice_student_id)->first();
         $lecture_list =  Lecture::where('lecture_name', '=', $request->invoice_lecture_title)->first();

         if($is_exist_student){
            if($lecture_list){

                if ($request->invoice_type=="Free Card") {
                    $is_frecard_holder = FreeCard::where('student_id','=',$request->invoice_student_id)
                    ->where('lecture_name','=',$request->invoice_lecture_title)->first();
                    if($is_frecard_holder){
                            $validator = Validator::make($request->all(), [
                                'invoice_student_id'=>'required',
                                'invoice_lecture_title'=>'required',
                                'invoice_amount_received'=>'required|numeric',
                                'invoice_amount'=>'required|numeric',
                                'invoice_amount_due'=>'required|numeric',
                                'invoice_type'=>'required',
                            ]);

                            if($validator->passes()) {
                                $invoice = new Invoice;

                                $invoice->invoice_student_id=$request->invoice_student_id;
                                $invoice->invoice_lecture_title=$request->invoice_lecture_title;
                                $invoice->invoice_lecture_id=$lecture_list->id;
                                $invoice->invoice_student_name=$is_exist_student->student_name;
                                $invoice->institute=$request->institute;
                                $invoice->invoice_amount_received='0';
                                $invoice->invoice_amount='0';
                                $invoice->invoice_amount_due='0';
                                $invoice->invoice_type='Free card';
                                $invoice->created_by=$request->created_by;

                                $invoice->save();

                                 return response()->json(['success'=>'Transaction Successful!.']);
                             }else{
                                return response()->json(['error'=>$validator->errors()->all()]);
                             }
                    }else{
                        return response()->json(['error'=>'This student is not a Free card holder']);
                    }
                 }

                $validator = Validator::make($request->all(), [
                'invoice_student_id'=>'required',
                'invoice_lecture_title'=>'required',
                'invoice_amount_received'=>'required|numeric',
                'invoice_amount'=>'required|numeric',
                'invoice_amount_due'=>'required|numeric',
                'invoice_type'=>'required',
            ]);

            if($validator->passes()) {
                $invoice = new Invoice;

                $invoice->invoice_student_id=$request->invoice_student_id;
                $invoice->invoice_lecture_title=$request->invoice_lecture_title;
                $invoice->invoice_lecture_id=$lecture_list->id;
                $invoice->invoice_student_name=$is_exist_student->student_name;
                $invoice->institute=$request->institute;
                $invoice->invoice_amount_received=$request->invoice_amount_received;
                $invoice->invoice_amount=$request->invoice_amount;
                $invoice->invoice_amount_due=$request->invoice_amount_due;
                $invoice->invoice_type=$request->invoice_type;
                $invoice->created_by=$request->created_by;

                $invoice->save();

                 return response()->json(['success'=>'Transaction Successful!.']);
             }else{
                return response()->json(['error'=>$validator->errors()->all()]);
             }

            }
         }
         return response()->json(['error'=>'Unautheried try!']);
         
    }

    private function isAdmin(){
        $logged_user = Auth::user();
        if($logged_user->role=="ADMIN"){
            
        }else{
            return abort(404);
        }
    }

    public function invoiceReport(Request $request){
        $this->isAdmin();
        $data_sets_invoices = DB::table('invoices')
                    ->where('invoice_status','=','1')
                    ->whereBetween('created_at', [$request->from_date, $request->to_date])
                    ->orderBy('created_at', 'asc')
                    ->Paginate(50);
         if ($request->gettype) {
            return view('reports.admin-invoice-report', compact('data_sets_invoices'));
        }
        $data_sets_invoices = Invoice::where('invoice_status','=','1')
                                ->orderBy('created_at', 'asc')
                                ->paginate(50);
        return view('reports.pagination-invoice', compact('data_sets_invoices'));
    }

    public function invoicedelete(Request $request){
        $this->isAdmin();
        if($request->invoice_id){
            $room = Invoice::find($request->invoice_id);
            $room->invoice_status='0';
            $room->save();

            return response()->json(['success'=>'Deleted!']);
        }else{
            return response()->json(['error'=>'Not deleted!']);
        }

    }


    public function earningReport(Request $request){
        $this->isAdmin();
        $data_sets_earnings = Invoice::select(
                    'lectures.lecturer_name',
                    'teachers.teacher_address as address',
                    'teachers.revenue_percentage as revenue_percentage',
                    'teachers.teacher_bank_account as acc_number',
                    'lectures.lecture_lecturer as lecture_id', 
                    DB::raw('SUM(invoices.invoice_amount) as salary'))
                         ->join('lectures', 'lectures.id', '=', 'invoices.invoice_lecture_id')
                         ->join('teachers', 'teachers.id', '=', 'lectures.lecture_lecturer')
                         ->whereBetween('invoices.created_at', [$request->from_date, $request->to_date])
                         ->groupBy('lectures.lecturer_name','lectures.lecture_lecturer')
                         ->orderBy('lectures.lecturer_name', 'asc')
                         ->paginate(50);
         if ($request->gettype) {
            return view('reports.admin-earning-report', compact(['data_sets_earnings','request']));
        }
        $data_sets_earnings = Invoice::where('invoice_status','=','1')
                                ->orderBy('created_at', 'asc')
                                ->paginate(50);
        return view('reports.pagination-earning', compact(['data_sets_earnings','request']));
    }

    public function earningdelete(Request $request){
        $this->isAdmin();
        if($request->invoice_id){
            $room = Invoice::find($request->invoice_id);
            $room->invoice_status='0';
            $room->save();

            return response()->json(['success'=>'Deleted!']);
        }else{
            return response()->json(['error'=>'Not deleted!']);
        }

    }

    public function salaryReport(Request $request){
       $this->isAdmin();
       $salary = Invoice::select(
                    'lectures.lecturer_name',
                    'teachers.teacher_address as address',
                    'teachers.revenue_percentage as revenue_percentage',
                    'teachers.teacher_bank_account as acc_number',
                    'lectures.lecture_lecturer as lecture_id', 
                    DB::raw('SUM(invoices.invoice_amount) as salary'))
                         ->join('lectures', 'lectures.id', '=', 'invoices.invoice_lecture_id')
                         ->join('teachers', 'teachers.id', '=', 'lectures.lecture_lecturer')
                         ->whereBetween('invoices.created_at', [$request->from_date, $request->to_date])
                         ->groupBy('lectures.lecturer_name','lectures.lecture_lecturer')
                         ->orderBy('lectures.lecturer_name', 'asc')
                         ->get();
        if($salary){
           return view('reports.admin-salary-report', compact(['salary','request'])); 
        }
        return response()->json(['error'=>'Data Not found!']);
    }

    public function isCashier(){
        $logged_user = Auth::user();
        if($logged_user->role=="CASHIER"){
           return abort(404); 
        }
    }
    public function isNotCashier(){
        $logged_user = Auth::user();
        if($logged_user->role=="CASHIER"){
          
        }else{
             return abort(404); 
        }
    }
}

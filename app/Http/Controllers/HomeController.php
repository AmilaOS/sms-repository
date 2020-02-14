<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Invoice;
use DB;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    private function isAdmin(){
        $logged_user = Auth::user();
        if($logged_user->role=="ADMIN"){
            
        }else{
            return abort(404);
        }
    }

    public function index(Request $request){ 

        $start_date =date('Y-m-01', strtotime(date("Y-m-d",time())));
        $end_date =date('Y-m-t', strtotime(date("Y-m-d",time())));
        if($request->start_date){
            $start_date =$request->start_date;
            $end_date =$request->end_date;
        }

    $logged_user = Auth::user();
        

        if($logged_user){
            if($logged_user->role=="ADMIN"){
                $page_name = '';
                $top_five_by_lecture;
                $top_five_by_teacher;
                $bottom_five_by_lecture;
                $bottom_five_by_teacher;
                $total_income_by_date;
                $income_runrate_by_date;
                $total_active_student_count_by_date;
                $total_left_student_count_by_date;
                $male_student_count;
                $female_student_count;
                $teachers_count;
                $income_chart;

                // GET DASHBOARD DATA BETWEEN SPECIFIC DATE RANGE
                $top_five_by_lecture            = $this->getTopFiveByLecture($start_date,$end_date,"Sample Company Ltd");
                $top_five_by_teacher            = $this->getTopFiveByTeacher($start_date,$end_date,"Sample Company Ltd");
                $bottom_five_by_lecture         = $this->getBottomFiveByLecture($start_date,$end_date,"Sample Company Ltd");
                $bottom_five_by_teacher         = $this->getBottomFiveByTeacher($start_date,$end_date,"Sample Company Ltd");
                $total_income_by_date           = $this->getTotalIncomeByDate($start_date,$end_date,"Sample Company Ltd");
                $income_runrate_by_date         = $this->getIncomeRunRateByDate($start_date,$end_date,$total_income_by_date[0]->invoice_amount);
                $total_active_student_count_by_date    = $this->getTotalActiveStudentCountByDate($start_date,$end_date,"Sample Company Ltd");
                $total_left_student_count_by_date    = $this->getTotalLeftStudentCountByDate($start_date,$end_date,"Sample Company Ltd");
                $male_student_count             = $this->getMaleStudentCount();
                $female_student_count           =$this->getFemaleStudentCount();
                $teachers_count                 =$this->getTeacherCount();
                $income_chart                   = $this->getIncomeBydate($start_date,$end_date,"Sample Company Ltd");

                    // dd($income_chart);
                $page_name ='dashboard-testing';
                if($request->start_date){
                    $page_name ='layouts.admin_panel.dashboard-charts';
                }

                return view($page_name)->withTitle('SMS | Dashboard')
                               ->withTopfivebylecture($top_five_by_lecture)
                               ->withTopfivebyteacher($top_five_by_teacher)
                               ->withBottomfivebylecture($bottom_five_by_lecture)
                               ->withBottomfivebyteacher($bottom_five_by_teacher)
                               ->withTotalincomebydate($total_income_by_date)
                               ->withIncomerunratebydate($income_runrate_by_date)
                               ->withTotalstudentcount($total_active_student_count_by_date)
                               ->withTotalleftstudentcount($total_left_student_count_by_date)
                               ->withMalestudentcount($male_student_count)
                               ->withFemalestudentcount($female_student_count)
                               ->withTeachercount($teachers_count)
                               ->withIncomechart($income_chart);

            }else if($logged_user->role=="OPERATOR"){
                $page_name ='menu-operator';

            }else if($logged_user->role=="CASHIER"){
                $page_name ='invoice.invoice';

            }
            else if($logged_user->role=="CARDMARKER"){
                $page_name ='menu-cardmarker';

            }else{
                return abort(404);
            }
        }else{
            return view('login');
        }
        return view($page_name);
    }

    public function cashier(){
        $logged_user = Auth::user(); 
        if($logged_user->role=="CASHIER"){
            return view('invoice.invoice');
        }
        return abort(404);
    }

    public function cardmarker(){
        $logged_user = Auth::user(); 
        if($logged_user->role=="CARDMARKER"){
            return view('menu-cardmarker');
        }
        return abort(404);
    }

    public function operator(){
        $logged_user = Auth::user(); 
        if($logged_user->role=="OPERATOR"){
            return view('menu-operator');
        }
        return abort(404);
    }

     public function admin(){
        $this->isAdmin();
        $start_date =date('Y-m-01', strtotime(date("Y-m-d",time())));
        $end_date =date('Y-m-t', strtotime(date("Y-m-d",time())));
        if($request->start_date){
            $start_date =$request->start_date;
            $end_date =$request->end_date;
        }
        $logged_user = Auth::user();
        $page_name = '';
        $top_five_by_lecture;
        $top_five_by_teacher;
        $bottom_five_by_lecture;
        $bottom_five_by_teacher;
        $total_income_by_date;
        $income_runrate_by_date;
        $total_active_student_count_by_date;
        $total_left_student_count_by_date;
        $male_student_count;
        $female_student_count;
        $teachers_count;
        $income_chart;

        if($logged_user){
            if($logged_user->role=="ADMIN"){
                // GET DASHBOARD DATA BETWEEN SPECIFIC DATE RANGE
                $top_five_by_lecture            = $this->getTopFiveByLecture($start_date,$end_date,"Sample Company Ltd");
                $top_five_by_teacher            = $this->getTopFiveByTeacher($start_date,$end_date,"Sample Company Ltd");
                $bottom_five_by_lecture         = $this->getBottomFiveByLecture($start_date,$end_date,"Sample Company Ltd");
                $bottom_five_by_teacher         = $this->getBottomFiveByTeacher($start_date,$end_date,"Sample Company Ltd");
                $total_income_by_date           = $this->getTotalIncomeByDate($start_date,$end_date,"Sample Company Ltd");
                $income_runrate_by_date         = $this->getIncomeRunRateByDate($start_date,$end_date,$total_income_by_date[0]->invoice_amount);
                $total_active_student_count_by_date    = $this->getTotalActiveStudentCountByDate($start_date,$end_date,"Sample Company Ltd");
                $total_left_student_count_by_date    = $this->getTotalLeftStudentCountByDate($start_date,$end_date,"Sample Company Ltd");
                $male_student_count             = $this->getMaleStudentCount();
                $female_student_count           =$this->getFemaleStudentCount();
                $teachers_count                 =$this->getTeacherCount();
                $income_chart                   = $this->getIncomeBydate($start_date,$end_date,"Sample Company Ltd");

                $page_name ='dashboard-testing';

                 $page_name ='dashboard-testing';
                if($request->start_date){
                    $page_name ='layouts.admin_panel.dashboard-charts';
                }

                if($total_income_by_date[0]->invoice_amount==0 || $total_income_by_date[0]->invoice_amount==null){
                    $total_income_by_date[0]->invoice_amount=0;
                }
                return view($page_name)->withTitle('SMS | Dashboard')
                               ->withTopfivebylecture($top_five_by_lecture)
                               ->withTopfivebyteacher($top_five_by_teacher)
                               ->withBottomfivebylecture($bottom_five_by_lecture)
                               ->withBottomfivebyteacher($bottom_five_by_teacher)
                               ->withTotalincomebydate($total_income_by_date)
                               ->withIncomerunratebydate($income_runrate_by_date)
                               ->withTotalstudentcount($total_active_student_count_by_date)
                               ->withTotalleftstudentcount($total_left_student_count_by_date)
                               ->withMalestudentcount($male_student_count)
                               ->withFemalestudentcount($female_student_count)
                               ->withTeachercount($teachers_count)
                               ->withIncomechart($income_chart);
            }else{
                 return abort(404);
            }
        }else{
            return view('login');
        }
    }

    //01 TOP SUMMERY BAR ==============================================================================================

    public function getTopFiveByLecture($from_date,$to_date,$company_id){
        $this->isAdmin();
         $_top_five_invoice_data_lecture = DB::table('invoices')
                 ->select(DB::raw('sum(invoice_amount) as total'),'invoice_lecture_title')
                 ->groupBy('invoice_lecture_title')
                 ->whereBetween('created_at', [$from_date, $to_date])
                 ->take(5)
                 ->orderBy('total', 'desc')
                 ->get();

        return $_top_five_invoice_data_lecture;
    }

    public function getBottomFiveByLecture($from_date,$to_date,$company_id){
        $this->isAdmin();
        $_bottom_five_invoice_data_lecture = DB::table('invoices')
                 ->select(DB::raw('sum(invoice_amount) as total'),'invoice_lecture_title')
                 ->groupBy('invoice_lecture_title')
                 ->whereBetween('created_at', [$from_date, $to_date])
                 ->take(5)
                 ->orderBy('total', 'asc')
                 ->get();

        return $_bottom_five_invoice_data_lecture;
    }

    public function getTopFiveByTeacher($from_date,$to_date,$company_id){
        $this->isAdmin();
        $_top_five_invoice_data_teacher = DB::table('invoices')
                 ->select(DB::raw('sum(invoice_amount) as total'),'invoice_lecture_id as lecturer_name')
                 ->groupBy('invoice_lecture_id')
                 ->whereBetween('created_at', [$from_date, $to_date])
                 ->take(5)
                 ->orderBy('total', 'desc')
                 ->get();
         foreach ($_top_five_invoice_data_teacher as $key => $value) {
            $xx =DB::select('select lecturer_name from lectures where id='.$value->lecturer_name);
            $_top_five_invoice_data_teacher[$key]->lecturer_name = $xx[0]->lecturer_name;
         }
         // dd($_top_five_invoice_data_teacher);

        return $_top_five_invoice_data_teacher;



    }

    public function getBottomFiveByTeacher($from_date,$to_date,$company_id){
        $this->isAdmin();
    $_bottom_five_invoice_data_teacher = DB::table('invoices')
                 ->select(DB::raw('sum(invoice_amount) as total'),'invoice_lecture_id as lecturer_name')
                 ->groupBy('invoice_lecture_id')
                 ->whereBetween('created_at', [$from_date, $to_date])
                 ->take(5)
                 ->orderBy('total', 'asc')
                 ->get();
         foreach ($_bottom_five_invoice_data_teacher as $key => $value) {
            $xx =DB::select('select lecturer_name from lectures where id='.$value->lecturer_name);
            $_bottom_five_invoice_data_teacher[$key]->lecturer_name = $xx[0]->lecturer_name;
         }
         // dd($_bottom_five_invoice_data_teacher);
         return $_bottom_five_invoice_data_teacher;
    }

    public function getTotalIncomeByDate($from_date,$to_date,$company_id){
        $this->isAdmin();
         $_total_income_by_date = DB::select('select sum(invoice_amount) as invoice_amount from invoices 
                                              where convert(created_at,DATE) between "'.$from_date.'" AND "'.$to_date.'"');
        return $_total_income_by_date;
    }

    public function getIncomeRunRateByDate($from_date,$to_date,$total_income){
        $this->isAdmin();
        $from_date =date_create($from_date);
        $to_date = date_create($to_date);
        $diff=date_diff($from_date,$to_date);
        $num_of_days = $diff->format("%R%a");
        if($total_income==0){
           $total_income = 0;
        }else{
           $total_income = number_format(($total_income/$num_of_days), 2) ; 
        }
        return $total_income;
    }

    public function getTotalActiveStudentCountByDate($from_date,$to_date,$company_id){
        $this->isAdmin();
         $_total_student_count_by_date = DB::select('SELECT count(id) as student_count FROM students 
                                              WHERE student_status="1"');
        return $_total_student_count_by_date;
    }

    public function getTotalLeftStudentCountByDate($from_date,$to_date,$company_id){
        $this->isAdmin();
         $_total_left_student_count_by_date = DB::select('SELECT count(id) as student_count FROM students 
                                              WHERE student_status="0"');
        return $_total_left_student_count_by_date;
    }

    public function getStudentCount(){
        $this->isAdmin();
        $_total_students = DB::select('SELECT count(id) as student_count FROM students');
        return $_total_students[0]->student_count;
    }

    public function getMaleStudentCount(){
        $this->isAdmin();
        $_total_students = DB::select('SELECT count(id) as male_student_count FROM students WHERE student_gender="Male" AND student_status="1"');
        return $_total_students[0]->male_student_count;
    }

    public function getFemaleStudentCount(){
        $this->isAdmin();
        $_total_students = DB::select('SELECT count(id) as female_student_count FROM students WHERE student_gender="Female" AND student_status="1"');
        return $_total_students[0]->female_student_count;
    }

    public function getTeacherCount(){
        $this->isAdmin();
        $_teachers_count = DB::select('SELECT count(id) as teacher_count FROM teachers WHERE teacher_status="1"');
        return $_teachers_count[0]->teacher_count;
    }


 //02 INCOME STATISTICS CHART ==============================================================================================

    public function getIncomeBydate($from_date,$to_date,$company_id){
        $this->isAdmin();
        $_income_ = DB::select('SELECT SUM(invoice_amount) as invoice_amount,CONVERT(created_at,DATE) as created_at FROM invoices WHERE CONVERT(created_at,DATE) BETWEEN "'.$from_date.'" AND "'.$to_date.'" GROUP BY CONVERT(created_at,DATE)');
        // dd($_income_);
        return $_income_;
    }

    }

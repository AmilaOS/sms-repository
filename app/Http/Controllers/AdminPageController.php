<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Support\Facades\Response;
use View;
use User;

class AdminPageController extends Controller
{
	public function __construct(){
	    $this->middleware('auth');
	}

	public function admin(){
		$this->isAdmin();
		return view('login');
	}


	private function isAdmin(){
		$logged_user = Auth::user();
		if($logged_user->role=="ADMIN"){
			
		}else{
			return abort(404);
		}
	}

	public function findURL(Request $request){
		$this->isAdmin();
		$page_name;
		$data_sets;
		if($request->requestedPageUrl){
			switch ($request->requestedPageUrl) {
				case 'admin_invoice':
					// $data_set = DB::table('users')->paginate(15);
					$page_name="reports.admin-invoice-report";
					break;
			case 'admin_earning':
					$page_name="reports.admin-earning-report";
					break;
			case 'admin_classroom':
					$data_sets = DB::table('classrooms')->select(DB::raw('*'))
														->whereBetween('created_at', [$request->from_date, $request->to_date])
						                 				->orderBy('created_at', 'asc')
						                 				->simplePaginate(5);
					$page_name="reports.admin-classroom-report";
					break;
			case 'admin_lecture':
					$page_name="reports.admin-lecture-report";
					break;
			case 'admin_salary':
					$page_name="reports.admin-salary-report";
					break;
			case 'admin_student':
					$page_name="reports.admin-student-report";
					break;
			case 'admin_systemuser':
					$page_name="reports.admin-systemuser-report";
					break;
			case 'admin_teacher':
					$page_name="reports.admin-teacher-report";
					break;
				default:
					return abort(404);
					break;
			}
			// return view($page_name,['data_sets' => $data_sets]);
			 return Response::json(View::make($page_name, array('data_sets' => $data_sets))->render());
			// return response()->json(['users' => $data_set,'dddd'=>$page_name]);
		}
		
		return abort(404);
	}

	    public function systemuserReport(Request $request){
        $this->isAdmin();
        $data_sets_systemusers = DB::table('users')
                    ->orderBy('created_at', 'asc')
                    ->Paginate(50);
         if ($request->gettype) {
            return view('reports.admin-systemuser-report', compact('data_sets_systemusers'));
        }
        $data_sets_systemusers = User::orderBy('created_at', 'asc')
                                ->paginate(50);
        return view('reports.pagination-systemuser', compact('data_sets_systemusers'));
    }

    public function systemuserdelete(Request $request){
        $this->isAdmin();
        if($request->systemuser_id){
            $room = DB::table('users')->where('id','=',$request->systemuser_id)->get();
            $room[0]->status='0';
            $room[0]->save();

            return response()->json(['success'=>'Deleted!']);
        }else{
            return response()->json(['error'=>'Not deleted!']);
        }

    }
}

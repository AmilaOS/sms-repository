<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Validator;
use App\Product;


class HomesController extends Controller
{


    /**
     * Display a listing of the myform.
     *
     * @return \Illuminate\Http\Response
     */
    public function myform()
    {
        return view('myform');
    }


    /**
     * Display a listing of the myformPost.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'detail' => 'required',
        ]);


        if ($validator->passes()) {
            $userpost = new Product;
            $userpost->name = $request->name;
            $userpost->detail = $request->detail;
            $userpost->save();
            return response()->json(['success'=>'Added new records.']);
        }


        return response()->json(['error'=>$validator->errors()->all()]);
    }
}

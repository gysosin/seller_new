<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class viewordersControler extends Controller
{
    function index()
    {
        $login_id = Auth::user()->id; 
        $data= db::table('order_details')->where('user_id',$login_id)->get();
        return view('order/orderview',['data'=>$data]);
        
    }
}

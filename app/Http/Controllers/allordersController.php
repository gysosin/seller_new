<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class allordersController extends Controller
{
    function index()
    {
        $login_id = Auth::user()->id; 
        $data= db::table('orders')->where('user_id',$login_id)->get();
        return view('order/allOrders',['data'=>$data]);
        
    }
}

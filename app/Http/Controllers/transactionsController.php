<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class transactionsController extends Controller
{
    function index()
    {
        //$login_id = Auth::user()->id; 
        $data= db::table('purchases')->get();
        return view('transaction/transactions',['data'=>$data]);
        
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sellinghistory extends Controller
{
    function index()
    {
//$login_id = Auth::user()->id; 
        $data= db::table('purchase_details')->get();
        return view('transaction/sellinghistory',['data'=>$data]);
        
    }
}

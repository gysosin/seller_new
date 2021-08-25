<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cencellation extends Controller
{
    function index()
    {
        $login_id = Auth::user()->id; 
        $data= db::table('failed_jobs')->where('user_id',$login_id)->get();
        return view('cencellation/cencellation',['data'=>$data]);
        
    }
}

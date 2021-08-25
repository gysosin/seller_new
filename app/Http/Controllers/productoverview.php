<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productoverview extends Controller
{
    function index()
    {

        
        $data= db::table('purchase_details')->get();
        return view('product/productoverview',['data'=>$data]);
        
    }
}

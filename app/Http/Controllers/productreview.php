<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productreview extends Controller
{
    function index()
    {

        
        $data= db::table('product_rating_reviews')->get();
        return view('product/productreview',['data'=>$data]);
        
    }
}
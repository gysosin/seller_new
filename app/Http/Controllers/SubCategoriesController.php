<?php

namespace App\Http\Controllers;

use App\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoriesController extends Controller
{
 
    function show()
    {
       
       // return view('categories')->with('categoriesArr',categories::all());
   
       $data= db::table('sub_categories')->get();
        return view('product/Sub_category',['data'=>$data]);
    }

}

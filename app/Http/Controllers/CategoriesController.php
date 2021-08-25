<?php

namespace App\Http\Controllers;

use App\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
 
    function show()
    {
       
       // return view('categories')->with('categoriesArr',categories::all());
   
       $data= db::table('categories')->get();
        return view('product/categories',['data'=>$data]);
    }

}

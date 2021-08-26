<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class allordersController extends Controller
{
    function index()
    {
        

        $login_id = Auth::user()->id; //seller login id 
        $data = DB::table('orders')
        ->join('order_details', 'orders.id', '=','order_details.order_id')
        ->join('products', 'products.id	', '=','order_details.product_id')
        ->join('addresses', 'addresses.user_id', '=','orders.user_id')
        ->where('products.user_id', $login_id)
        ->get();
        return view('order/allOrders',['data'=>$data]);
        
    }
}

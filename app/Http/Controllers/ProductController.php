<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function category()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.addproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $res=new product;
     
        $res->name=$request->input('name');
        $res->description=$request->input('description');
        $res->stock=$request->input('stock');
        /* $res->category=$request->input('category');
        $res->scategory=$request->input('scategory'); */
        $res->price=$request->input('price');


  
        $res->save();
       
        $request->session()->flash('msg','data submitted');
        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    
    {
        return view('product.products')->with('productArr',product::all());
        $data= db::table('categories')->get();
        return view('product/categories',['data'=>$data]);
    }
    
    
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product, $id)
    {
        return view('product.editproduct')->with('productArr',product::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        $res=product::find($request->id);
     
        $res->name=$request->input('name');
        $res->description=$request->input('description');
        $res->stock=$request->input('stock');
        /* $res->category=$request->input('category');
        $res->scategory=$request->input('scategory'); */
        $res->price=$request->input('price');


  
        $res->save();
       
        $request->session()->flash('msg','data updated');
        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product,$id)
    {
        product::destroy(array('id',$id));
        return redirect('product');
    }
}

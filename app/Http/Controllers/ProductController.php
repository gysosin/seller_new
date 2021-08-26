<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\sub_categories;
use Illuminate\Support\Facades\Auth;
use App\Product_photos;
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
        $categories= db::table('categories')->get();
        return view('product.addproduct',["categories" => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_image' =>'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $product_image = time().'.'.$request->product_image->extension();
        $request->product_image->move(public_path('products_images'),$product_image);
        $login_id = Auth::user()->id;

        $res=new product;
        $res->user_id=$login_id;
        $res->name=$request->input('name');
        $res->description=$request->input('description');
        $res->slug=$request->input('name');
        $res->stock=$request->input('stock');
        $res->category_id=$request->input('category');
        $res->sub_category_id=$request->input('subcategory');
        $res->price=$request->input('price');
        $res->photo = $product_image;
        $res->status='0';// Inactive
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
        $res->category_id=$request->input('category');
        $res->sub_category_id=$request->input('subcategory');
        $res->price=$request->input('price');
        $res->status=$request->input('status');
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

    public function subCat(Request $request)
    {

        $parent_id = $request->cat_id;

        $subcategories = sub_categories::where('category_id',$parent_id)->get();
    // dd($subcategories);
      return view('ajax_forms.subcategories', compact('subcategories'));
    }
}

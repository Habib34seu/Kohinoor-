<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        $productCat = ProductCategory::select('id','name')->get();
        $productsubCat = ProductSubCategory::select('id','name')->get();
        return view("admin.product.index",['data'=>$data],compact('productCat','productsubCat'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new Product;
        $request->validate([
            'prod_cat_id'     =>'required',
            'prod_subcat_id'  =>'required',
            'name'            =>'required',
            'img'             =>'image|mimes:jpeg,png,jpg,gif',
        ]);

        $fileName = null;
    if (request()->hasFile('img')) {
        $file = request()->file('img');
        $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./uploades/product/', $fileName);    
    }

    $product=Product::create([
        'prod_cat_id'    => $request->input('prod_cat_id'),
        'prod_subcat_id' => $request->input('prod_subcat_id'),
        'name'   => $request->input('name'),
        'img'            => $fileName,
        
    ]);
    if($product){
        return redirect()->back();
       }
  
       return 'failed';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::where('id',$id)->first();
        return view("product.show",compact('product')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}

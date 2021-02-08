<?php

namespace App\Http\Controllers;

use App\Models\ProductSubCategory;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ProductSubCategory::all();
        $productCat = ProductCategory::select('id','name')->get();
        return view("admin.productSubCategory.index",['data'=>$data],compact('productCat'));
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
            'prod_cat_id'     =>'required',
            'name'            =>'required',
        ]);

    $productSubCategory=ProductSubCategory::create([
        'prod_cat_id' => $request->input('prod_cat_id'),
        'name'        => $request->input('name'),
    ]);
    if($productSubCategory){
        return redirect()->back();
       }
  
       return 'failed';  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductSubCategory  $productSubCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductSubCategory $productSubCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductSubCategory  $productSubCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductSubCategory $productSubCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductSubCategory  $productSubCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductSubCategory $productSubCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductSubCategory  $productSubCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductSubCategory $productSubCategory)
    {
        //
    }
}

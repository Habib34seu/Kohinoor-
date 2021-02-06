<?php

namespace App\Http\Controllers;

use App\Models\BrandCategory;
use Illuminate\Http\Request;

class BrandCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BrandCategory::all();
        return view('admin.brandCategory.index',compact('data'));
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
            'name'     =>'required',
        ]);

    $brandCategory=BrandCategory::create([
        'name' => $request->input('name'),
    ]);
    if($brandCategory){
        return redirect()->back();
       }
  
       return 'failed'; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BrandCategory  $brandCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BrandCategory $brandCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BrandCategory  $brandCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BrandCategory $brandCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BrandCategory  $brandCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BrandCategory $brandCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BrandCategory  $brandCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BrandCategory $brandCategory)
    {
        //
    }
}

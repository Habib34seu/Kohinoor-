<?php

namespace App\Http\Controllers;

use App\Models\BrandCategory;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Brand::all();
        $brandCat = BrandCategory::select('id','name')->get();
        return view("admin.brand.index",['data'=>$data],compact('brandCat'));
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
            'brandcat_id'     =>'required',
            'name'            =>'required',
            'img'             =>'image|mimes:jpeg,png,jpg,gif',
        ]);

        $fileName = null;
    if (request()->hasFile('img')) {
        $file = request()->file('img');
        $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./uploades/brand/', $fileName);    
    }

    $brand=Brand::create([
        'brandcat_id' => $request->input('brandcat_id'),
        'name'        => $request->input('name'),
        'img'         => $fileName,
    ]);
    if($brand){
        return redirect()->back();
       }
  
       return 'failed';  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $brands = Brand::where('id',$id)->first();

        // $brandCatarray = BrandCategory::all();
        // $brandarry=[];
        // for($i=0;$i<count($brandCatarray); $i++){
        //     $brandArray = Brand::where('brandcat_id',$brandCatarray[$i]['id'])->get();
        //     $brandCatarray[$i]['brandarry']=$brandArray;
        // };
        return view("brand.show",compact('brands')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }
}

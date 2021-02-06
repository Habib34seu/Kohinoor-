<?php

namespace App\Http\Controllers;

use App\Models\QuarterlyResult;
use Illuminate\Http\Request;

class QuarterlyResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = QuarterlyResult::all();
        return view('admin.quarterlyResult.qr_index',compact('data'));
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
            'img'      =>'image|mimes:jpeg,png,jpg,gif',
        ]);

        $fileName = null;
    if (request()->hasFile('img')) {
        $file = request()->file('img');
        $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./uploades/qr/', $fileName);    
    }

    $quarterlyResult=QuarterlyResult::create([
        'name' => $request->input('name'),
        'img' => $fileName,
    ]);
    if($quarterlyResult){
        return redirect()->back();
       }
  
       return 'failed'; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuarterlyResult  $quarterlyResult
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $qr = QuarterlyResult::where('id',$id)->first();
        return view("quarterlyResult.show",compact('qr')); 
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QuarterlyResult  $quarterlyResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuarterlyResult $quarterlyResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuarterlyResult  $quarterlyResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuarterlyResult $quarterlyResult)
    {
        //
    }
}

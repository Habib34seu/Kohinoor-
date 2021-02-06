<?php

namespace App\Http\Controllers;

use App\Models\HalfYearlyReport;
use Illuminate\Http\Request;

class HalfYearlyReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_half(){
        $data = HalfYearlyReport::all();
        return view('admin.half_yearly_result.half_yearly_index',compact('data'));
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
        $file->move('./uploades/halfyear/', $fileName);    
    }

    $halfYearlyReport=HalfYearlyReport::create([
        'name' => $request->input('name'),
        'img' => $fileName,
    ]);
    if($halfYearlyReport){
        return redirect()->back();
       }
  
       return 'failed';  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HalfYearlyReport  $halfYearlyReport
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hfr = HalfYearlyReport::where('id',$id)->first();
        return view("halfYearlyResult.show",compact('hfr')); 
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HalfYearlyReport  $halfYearlyReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HalfYearlyReport $halfYearlyReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HalfYearlyReport  $halfYearlyReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(HalfYearlyReport $halfYearlyReport)
    {
        //
    }
}

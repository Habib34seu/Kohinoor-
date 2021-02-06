<?php

namespace App\Http\Controllers;

use App\Models\CorporateGovernance;
use Illuminate\Http\Request;

class CorporateGovernanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CorporateGovernance::all();
        return view('admin.corporateGovernance.cg_index',compact('data'));
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
        $file->move('./uploades/cg/', $fileName);    
    }

    $corporateGovernance=CorporateGovernance::create([
        'name' => $request->input('name'),
        'img' => $fileName,
    ]);
    if($corporateGovernance){
        return redirect()->back();
       }
  
       return 'failed';  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CorporateGovernance  $corporateGovernance
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cpg = CorporateGovernance::where('id',$id)->first();
        return view("corporateGovernance.show",compact('cpg')); 
    }

 
    public function update(Request $request, CorporateGovernance $corporateGovernance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CorporateGovernance  $corporateGovernance
     * @return \Illuminate\Http\Response
     */
    public function destroy(CorporateGovernance $corporateGovernance)
    {
        //
    }
}

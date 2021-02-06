<?php

namespace App\Http\Controllers;

use App\Models\PSI;
use Illuminate\Http\Request;

class PSIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PSI::all();
        return view('admin.psi.psi_index',compact('data'));
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
            'img'      =>'image|mimes:jpeg,png,jpg,gif',
        ]);

        $fileName = null;
    if (request()->hasFile('img')) {
        $file = request()->file('img');
        $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./uploades/psi/', $fileName);    
    }

    $psi=PSI::create([
        'img' => $fileName,
    ]);
    if($psi){
        return redirect()->back();
       }
  
       return 'failed';  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PSI  $pSI
     * @return \Illuminate\Http\Response
     */
    public function show(PSI $pSI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PSI  $pSI
     * @return \Illuminate\Http\Response
     */
    public function edit(PSI $pSI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PSI  $pSI
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PSI $pSI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PSI  $pSI
     * @return \Illuminate\Http\Response
     */
    public function destroy(PSI $pSI)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = staff::latest()->paginate(5);
        return view('staff/index',compact('staffs'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff/create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request ->validate([
            'nome'=>'required',
            'profession'=>'required',
            'definition'=>'required',
            'image'=>'required' 
       ]);
       $input = $request->all(); 
       if ($image = $request->file('image')){  
           $destinationPath = 'images/';
           $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
           $image->move($destinationPath, $profileImage);
           $input['image'] = "$profileImage";
       }  
       staff::create( $input);
       return redirect()->route('staff.index')->with('success','Opération terminée avec succès'); 
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(staff $staff)
    {
       return view('staff/edit',compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, staff $staff)
    {
        $request ->validate([
            'nome'=>'required',
            'profession'=>'required',
            'definition'=>'required',
            'image'=>'required' 
       ]);
       $staff->update($request->all()); 
       return redirect()->route('staff.index')->with('success','Opération terminée avec succès'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(staff $staff)
    {
        $staff->delete();
        return redirect()->route('staff.index')->with('success','Opération terminée avec succès'); 
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $formations=formation::latest()->paginate('5');
       return view('formation/index',compact('formations'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formation/create');  
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
            'nome'=>'required',
            'description'=>'required', 
            'image'=>'required'
        ]);
        formation::create($request->all());
        return redirect()->route('formation.index')->with('success','Opération terminée avec succès'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function show(formation $formation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit(formation $formation)
    {
       return view('formation/edit',compact('formation')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, formation $formation)
    {
        $request->validate([
            'nome'=>'required',
            'description'=>'required', 
            'image'=>'required'
        ]);
        $formation->update($request->all()); 
        return redirect()->route('formation.index')->with('success','Opération terminée avec succès'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy(formation $formation)
    {
        $formation->delete();
        return redirect()->route('formation.index')->with('success','Opération terminée avec succès'); 
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets=projet::latest()->paginate('5');
        return view('projet/index',compact('projets'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('projet/create'); 
    }

    public function store(Request $request){  
        $request -> validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required' 
        ]);  
        $input=$request->all(); 
        if($image = $request->file('image')){ 
            $destinationPath = 'images/';  
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage"; 
        }                                       
        projet::create( $input);  
        return redirect()->route('projet.index')->with('success','Opération terminée avec succès'); 
    }

    public function edit(projet $projet)  
    { 
        return view('projet/edit',compact('projet')); 
    }

    public function update(Request $request, projet $projet) 
    {
        $request -> validate([
            'title' => 'required',
            'description' => 'required', 
            'image' => 'required' 
        ]); 
        $projet->update($request->all());  
        return redirect()->route('projet.index')->with('success','Opération terminée avec succès'); 
    }

    public function destroy(projet $projet)
    {
        $projet->delete();
        return redirect()->route('projet.index')->with('success','Opération terminée avec succès');  
    } 
}

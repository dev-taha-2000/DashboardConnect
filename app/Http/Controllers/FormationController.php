<?php

namespace App\Http\Controllers;

use App\Models\formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{ 
    public function index()
    {  
       $formations=formation::latest()->paginate('5');
       return view('formation/index',compact('formations'));  
    }

    public function create()
    {
        return view('formation/create');  
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required',
            'description'=>'required', 
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg' 
        ]);   
        $input = $request->all(); 
        if ($image = $request->file('image')){  
            $destinationPath = 'images/'; 
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }  
        formation::create($input); 
        return redirect()->route('formation.index')->with('success','Opération terminée avec succès'); 
    }

   
    public function show(formation $formation)
    {
        //
    }

  
    public function edit(formation $formation)
    {
       return view('formation/edit',compact('formation')); 
    }

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
    public function destroy(formation $formation)
    {
        $formation->delete();
        return redirect()->route('formation.index')->with('success','Opération terminée avec succès'); 
    }
}

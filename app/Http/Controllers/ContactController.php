<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts=contact::latest()->paginate(5);  
        return view('contact/index',compact('contacts'));
    }

    public function destroy(contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index'); 
    }
}

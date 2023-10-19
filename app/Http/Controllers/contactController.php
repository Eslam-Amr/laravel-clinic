<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    //
    function index()
    {
        return view('contact.index');
    }
    function addContact(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:30',
            'email' => 'required|email|unique:contacts,email',
            'phone' => 'required',
            'subject' => 'required|min:3|max:600',
            'message' => 'required|min:3|max:600',
        ]);
        contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        // dd($request->all());
        return redirect()->route('contact.index');
        // echo "kljbsdfjkl";
        // return view('contact.index') ;
    }
}

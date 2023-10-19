<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    //
    function index(){
        return view('register.index');
    }
    function addUser(Request $request){
        $request->validate([
            'name' => 'required|min:3|max:30',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|max:300',
            'phone' => 'required',
            ]);
            User::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=> $request->password,
                'phone'=> $request->phone,
                ]);
                // dd($request->all());
                return redirect()->route('register.index')->with('message','user added successfly');
// dd($request->all());
        // echo "Add User";
        // echo "test";
        // return view('register.index');
    }
}

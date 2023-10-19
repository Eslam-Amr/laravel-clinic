<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    function index()
    {
        return view('login.index');
    }
    function auth(Request $request)
    {
        $admin = false;
        // dd((User::select('email')->get()->all()));
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:300',
        ]);
        if (auth()->attempt($request->only('email', 'password'))) {
            foreach (User::select('email')->get()->all() as $user) {
                // dump($user['email']);
                if ($user['email'] == 'eslamamr537@gmail.com') {
                    $admin = true;
                    break;
                }
            }
            if ($admin)
                return redirect()->route('admin.index');
            else
                return redirect()->route('home.index');

            // die;
            // return redirect()->route('admin.index');

            // else
            // return redirect()->route('home.index');
        }
        return back()->with('message', 'invalid email or password');
        // dd($request->all());
    }
    function logout()
    {
        auth()->logout();
        return redirect()->route('home.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class Login extends Controller
{

    function index(){
        $title = "Login Administrator";
        return view('login', compact('title'));
    }

    function getAuth(Request $request){
        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->back();
        }

        return redirect('dashboard');
    }
}

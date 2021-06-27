<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{


    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {	
    	$credentials = $request->validate([
    		'email' => 'required|email',
    		'password' => 'required|string|min:6'
    	]);

        return back()->withError();
    }
}

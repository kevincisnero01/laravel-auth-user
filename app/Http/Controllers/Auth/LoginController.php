<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    	if(Auth::attempt($credentials))
    	{
    		return redirect()->route('dashboard');
    	}

        return back()
        	->withInput(request(['email']))
        	->withErrors(['password' => trans('auth.failed')]);
    }
}

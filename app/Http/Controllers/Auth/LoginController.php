<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }
     /**/

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {	
    	$credentials = $request->validate([
    		$this->username() => 'required',
    		'password' => 'required|string|min:6'
    	]);

    	if(Auth::attempt($credentials))
    	{
    		return redirect()->route('dashboard');
    	}

        return back()
        	->withInput(request([$this->username()]))
        	->withErrors(['password' => trans('auth.failed')]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function username()
    {
        return 'username';
    }
}

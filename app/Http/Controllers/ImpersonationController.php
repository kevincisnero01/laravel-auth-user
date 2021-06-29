<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ImpersonationController extends Controller
{
    public function store(Request $request)
    {

    	if(auth()->user()->canImpersonate())
    	{
    		session(['impersonator_id' => auth()->id()]);
        	
        	auth()->loginUsingId( request('user_id') );
        	return back()->with('flash','Estas personificando al usuario con el id:'.request('user_id'));
    	}

    	return back()->with('flash','Accion no permitida');
    }


    public function destroy()
    {
    	auth()->loginUsingId( session('impersonator_id') );

    	session()->forget('impersonator_id');

    	return back()->with('flash','Has vueldo .. Usuario:'.auth()->user()->name);
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users',['users' => $users]);
    }

    public function store(Request $request)
    {
        auth()->loginUsingId( request('user_id') );

        return back()->with('flash','Estas personificando al usuario con el id:'.request('user_id'));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	public function showLogin(){
	    if(Auth::check()){
	    	return redirect('/inicio');
	    }
	    return view('index');
	}

	public function postLogin(Request $request){
        $userdata = array(
            'email' => $request->input('email'),
            'password'=> $request->input('password')
        );
        /*if (Auth::attempt($userdata)) {
        	return redirect('/inicio');
        }*/
        return redirect('/inicio');
	}
}
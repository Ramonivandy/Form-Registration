<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class registrationController extends Controller
{
    public function register(Request $request){
    	$this->validate($request, [
    		'username' => 'required',
    		'email' => 'required',
    		'password' => 'required',
    		'confpassword' => 'required',
    		'phone' => 'required',
    		'company' => 'required'
    	]);
    	
    	$candidates = new Candidate;
    	$candidates->username = $request->input('username');
    	$candidates->email = $request->input('email');
    	$candidates->password = $request->input('password');
    	$candidates->confpassword = $request->input('confpassword');
    	$candidates->phone = $request->input('phone');
    	$candidates->company = $request->input('company');
    	$candidates->save();

    	return redirect('/home')->with('response', 'Register Success!');
    }


}

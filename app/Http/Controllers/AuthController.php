<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Hash;
use App\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {

    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required|email|unique:users',
    		'password' => 'required',
    		'username' => 'required',
    		'age' => 'required',
    		'phone_number' => 'required'
    	]);
    	$user = new User;

    	$user->name = $request->name;
    	$user->username = $request->username;
    	$user->email = $request->email;
    	$user->password = app('hash')->make($request->password);
    	$user->phone_number = $request->phone_number;
    	$user->age = $request->age;

    	if($user->save())
    	{
    		return response()->json(["message" => "Registrasi Berhasil"],200);
    	}
    	return response()->json(['message' => 'Registrasi Gagal, coba lagi'],500);
        
    }
}

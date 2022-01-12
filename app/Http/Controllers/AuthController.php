<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Validator;
use Hash;
use Session;
use App\User;


class AuthController extends Controller
{

	public function username()
	{
	    return 'username';
	}

	public function isLogin(){
		if (Auth::check()) { 
            return redirect()->route('home');
        }

        return redirect()->route('login');
	}

	public function showFormLogin()
    {

        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('home');
        }
        return view('panel.pages.auth.login');
    }
 
    public function login(Request $request)
    {

        $rules = [
            'username'                 => 'required',
            'password'              => 'required'
        ];
 
        $messages = [
            'username.required'        => 'Username tidak boleh kosong',
            'password.required'     => 'Password tidak boleh kosong',
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
 
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $data = [
            'username'  => $request->input('username'),
            'password'  => $request->input('password'),
        ];


        Auth::attempt($data);
 
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('home');
 
        } else { // false
 
            //Login Fail
            Session::flash('error', 'Username atau password salah');
            return redirect()->route('login');
        }
 
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
        
    }
}

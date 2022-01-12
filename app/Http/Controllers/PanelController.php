<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanelController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){
		if (auth()->user()->level_user == 'admin') {
            return view('panel.pages.home.admin');
        }else{
            return view('panel.pages.home.admin');
        }
    	
    }
}

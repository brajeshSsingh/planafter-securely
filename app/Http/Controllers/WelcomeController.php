<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
		if(!empty(Auth::user())){
			return redirect('/home');
		}else{
			return view('/Auth/login');
		}
        return view('/Auth/login');
		//return view('welcome');
    }

}

<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\User;
use App\UserDetail;
use App\UserCardDetail;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DigitallifeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
        $userDetail			= array();
		/*$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();*/
		
        return view('digital_life.digital-life', compact('userDetail'));
    }
	
	public function digital_life()
    {
		
		$userDetail			= array();
		/*$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();*/
		
        return view('digital_life.digital-life', compact('userDetail'));
    }
	
	public function digitallife_all()
    {
		
		$userDetail			= array();
		/*$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();*/
		
        return view('digital_life.digitallife_viewall', compact('userDetail'));
    }
	
	public function digital_life_instagram()
    {
		
		$userDetail			= array();
		/*$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();*/
		
        return view('digital_life.digital-life-instagram', compact('userDetail'));
    }
}
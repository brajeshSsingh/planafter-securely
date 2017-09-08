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

class EstateplanningController extends Controller
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
		
        return view('estate_planning.estateplaning_addNewtrust', compact('userDetail'));
    }
	
	public function estate_planning()
    {
		
		$userDetail			= array();
		/*$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();*/
		
        return view('estate_planning.estateplaning_addNewtrust', compact('userDetail'));
    }
	
	public function estateplaning_addnewwill()
    {
		
		$userDetail			= array();
		/*$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();*/
		
        return view('estate_planning.estateplaning_addnewwill', compact('userDetail'));
    }
	
	public function estateplaning_all()
    {
		
		$userDetail			= array();
		/*$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();*/
		
        return view('estate_planning.estateplaning_viewall', compact('userDetail'));
    }
	
	public function estateplaning_details_trust()
    {
		
		$userDetail			= array();
		/*$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();*/
		
        return view('estate_planning.estateplaning_details_trust', compact('userDetail'));
    }
}
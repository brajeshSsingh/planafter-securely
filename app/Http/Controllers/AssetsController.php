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

class AssetsController extends Controller
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
		
        return view('assets.add-new-asset', compact('userDetail'));
    }
	
	public function assets()
    {
		
		$userDetail			= array();
		/*$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();*/
		
        return view('assets.add-new-asset', compact('userDetail'));
    }
	
	public function add_new_jewelry()
    {
		
		$userDetail			= array();
		/*$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();*/
		
        return view('assets.add-new-jewelry-urse-etc', compact('userDetail'));
    }
	
	public function add_new_real_estate()
    {
		
		$userDetail			= array();
		/*$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();*/
		
        return view('assets.add-new-real-estate', compact('userDetail'));
    }
	
	public function add_new_vehicle()
    {
		
		$userDetail			= array();
		/*$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();*/
		
        return view('assets.add-new-vehicle', compact('userDetail'));
    }
	
	public function assets_view_all()
    {
		
		$userDetail			= array();
		/*$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();*/
		
        return view('assets.assets-view-all', compact('userDetail'));
    }
	
	public function assets_details_car()
    {
		
		$userDetail			= array();
		/*$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();*/
		
        return view('assets.assets_details_car', compact('userDetail'));
    }
}
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

class TaxescreditController extends Controller
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
		
        return view('taxes_credit.taxes_addtaxereturns', compact('userDetail'));
    }
	
	public function taxes_credit()
    {
		
		$userDetail			= array();
		/*$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();*/
		
        return view('taxes_credit.taxes_addtaxereturns', compact('userDetail'));
    }
	
	public function taxes_all()
    {
		
		$userDetail			= array();
		/*$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();*/
		
        return view('taxes_credit.taxes_viewall', compact('userDetail'));
    }
	
	public function taxes_details_taxreturns()
    {
		
		$userDetail			= array();
		/*$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();*/
		
        return view('taxes_credit.taxes_details_taxreturns', compact('userDetail'));
    }
	
}
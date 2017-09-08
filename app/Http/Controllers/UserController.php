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

class UserController extends Controller
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
		if(!empty(session()->get('user_first_name'))){
			session()->forget('user_first_name');
		}
        return view('dashboard.dashboard', compact('userDetail'));
    }
	
	
	public function logout(Request $request)
    {
        $this->middleware('guest', ['except' => 'logout']);
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/login');
    }
	
	public function dashboard()
    {
		
		$userDetail			= array();
		/*$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();*/
		if(!empty(session()->get('user_first_name'))){
			session()->forget('user_first_name');
		}
        return view('dashboard.dashboard', compact('userDetail'));
    }
	
	public function my_account()
    {
		
		$userDetail			= array();
		/*$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();*/
		
        return view('dashboard.my_account', compact('userDetail'));
    }
	
	public function setting()
    {
		
		$userDetail			= array();
		/*$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();*/
		
        return view('dashboard.settings_plansecurely', compact('userDetail'));
    }
	
	/*
	public function goDashboard()
	{
		$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();
		
		return view('pages.user.dashboard', compact('userDetail'));
	}
	
	public function congratsThanks()
	{
		$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();
		
		return view('pages.user.congrats-thanks', compact('userDetail'));
	}
	
	public function signupForm(Request $request)
	{
		
		$validator = Validator::make($request->all(),
			[
				'first_name'                => 'required',
				'last_name'              	=> 'required',
				'zipcode' 					=> 'required|numeric',
				'date_of_birth' 			=> 'required|date',
				'gender' 					=> 'required',
			]
		);
		if ($validator->fails()) {
			return redirect('/home')->withErrors($validator)->withInput();
        }else{
			$user 				= Auth::user();
			$userID 			= $user->id;
			
			$data = [
				'first_name'        => $request->input('first_name'),
				'last_name'         => $request->input('last_name'),
				'zipcode'           => $request->input('zipcode'),
				'date_of_birth'     => $request->input('date_of_birth'),
				'gender'          	=> $request->input('gender'),
				'token'             => str_random(64),
			];
			
			User::where('id', $userID)->update($data);
			
			return redirect('/user/cardFree');
		}
	}
	
	public function cardFree()
	{
		$user 				= Auth::user();
		$userID 			= $user->id;
		$UserCardDetail     = UserCardDetail::where('user_id', '=', $userID)->first();
		
		return view('pages.user.card-free', compact('UserCardDetail'));
	}
	
	public function cardFreeForm(Request $request)
	{
		
		$validator = Validator::make($request->all(),
			[
				'payment_type' 				=> 'required',
				'card_number' 				=> 'required',
				'security_code' 			=> 'required|numeric',
				'expiration_date' 			=> 'required|date',
				'postal_code' 				=> 'required',
				'country' 					=> 'required',
			]
		);
		if ($validator->fails()) {
			return redirect('/user/cardFree')->withErrors($validator)->withInput();
        }else{
			$user 				= Auth::user();
			$userID 			= $user->id;
			
			$data = [
				'payment_type' 				=> $request->input('payment_type'),
				'card_number' 				=> $request->input('card_number'),
				'security_code' 			=> $request->input('security_code'),
				'expiration_date' 			=> $request->input('expiration_date'),
				'postal_code' 				=> $request->input('postal_code'),
				'country' 					=> $request->input('country'),
				'token'             		=> str_random(64),
			];
			
			UserCardDetail::where('user_id', $userID)->update($data);
			
			return redirect('/user/personalView');
		}
	}
	
	public function personalView()
	{
		$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= UserDetail::where('user_id', '=', $userID)->first();
		
		return view('pages.user.personal-info', compact('userDetail'));
	}
	
	public function personalInfo(Request $request)
    {
		$user           	= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= UserDetail::where('user_id', '=', $userID)->first();
		$token 				= $request->input('_token');
        if(!empty($request->input('answer'))){
			
			$validator 		= Validator::make($request->all(), [
                'answer'    => 'required'
            ]);
			if ($validator->fails()) {
				return redirect('/user/personalView')->withErrors($validator)->withInput();
			} else {
				$userDetail->answer = $request->input('answer');
				$userDetail->token 	= str_random(64);
				$userDetail->save();
				return 'true';
			}
		}else if(!empty($request->input('homeowners'))){
			
			$owners 		= $request->input('homeowners');
			$homeowners 	= implode(",", $owners);
			$validator 		= Validator::make($request->all(), [
                'homeowners'    => 'required'
            ]);
			
			if ($validator->fails()) {
				return redirect('/user/personalView')->withErrors($validator)->withInput();
			} else {
				$userDetail->home_owners 	= $homeowners;
				$userDetail->token 			= str_random(64);
				$userDetail->save();
				return 'true';
			}
		}else if(!empty($request->input('health_care_planning'))){
			
			$health_care 			= $request->input('health_care_planning');
			$health_care_planning 	= implode(",", $health_care);
			$validator 		= Validator::make($request->all(), [
                'health_care_planning'    => 'required'
            ]);
			
			if ($validator->fails()) {
				return redirect('/user/personalView')->withErrors($validator)->withInput();
			} else {
				$userDetail->health_care_planning 	= $health_care_planning;
				$userDetail->token 					= str_random(64);
				$userDetail->save();
				return 'true';
			}
		}else if(!empty($request->input('financial_planning'))){
			
			$financial 				= $request->input('financial_planning');
			$financial_planning 	= implode(",", $financial);
			$validator 				= Validator::make($request->all(), [
                'financial_planning'    => 'required'
            ]);
			
			if ($validator->fails()) {
				return redirect('/user/personalView')->withErrors($validator)->withInput();
			} else {
				$userDetail->financial_planning 	= $financial_planning;
				$userDetail->token 					= str_random(64);
				$userDetail->save();
				return 'true';
			}
		}else if(!empty($request->input('legal_planning'))){
			
			$legal 				= $request->input('legal_planning');
			$legal_planning 	= implode(",", $legal);
			$validator 			= Validator::make($request->all(), [
                'legal_planning'    => 'required'
            ]);
			
			if ($validator->fails()) {
				return redirect('/user/personalView')->withErrors($validator)->withInput();
			} else {
				$userDetail->legal_planning 	= $legal_planning;
				$userDetail->token 				= str_random(64);
				$userDetail->save();
				return 'true';
			}
		}else if(!empty($request->input('eldercare_planning'))){
			
			$eldercare 				= $request->input('eldercare_planning');
			$eldercare_planning 	= implode(",", $eldercare);
			$validator 				= Validator::make($request->all(), [
                'eldercare_planning'    => 'required'
            ]);
			
			if ($validator->fails()) {
				return redirect('/user/personalView')->withErrors($validator)->withInput();
			} else {
				$userDetail->eldercare_planning 	= $eldercare_planning;
				$userDetail->token 					= str_random(64);
				$userDetail->save();
				return 'true';
			}
		}else if(!empty($request->input('funeral_wishes'))){
			
			$funeral 			= $request->input('funeral_wishes');
			$funeral_wishes 	= implode(",", $funeral);
			$validator 			= Validator::make($request->all(), [
                'funeral_wishes'    => 'required'
            ]);
			
			if ($validator->fails()) {
				return redirect('/user/personalView')->withErrors($validator)->withInput();
			} else {
				$userDetail->funeral_wishes 	= $funeral_wishes;
				$userDetail->token 				= str_random(64);
				$userDetail->save();
				return 'true';
			}
		}else if(!empty($request->input('lifepartner'))){
			
			$validator 			= Validator::make($request->all(), [
                'lifepartner'   => 'required'
            ]);
			
			if ($validator->fails()) {
				return redirect('/user/personalView')->withErrors($validator)->withInput();
			} else {
				$userDetail->life_partner 	= $request->input('lifepartner');
				$userDetail->token 			= str_random(64);
				$userDetail->save();
				return 'true';
			}
		}else if(!empty($request->input('children'))){
			
			$validator 			= Validator::make($request->all(), [
                'children'    	=> 'required'
            ]);
			
			if ($validator->fails()) {
				return redirect('/user/personalView')->withErrors($validator)->withInput();
			} else {
				$userDetail->children 	= $request->input('children');
				$userDetail->token 		= str_random(64);
				$userDetail->save();
				return 'true';
			}
		}else if(!empty($request->input('yearsOld'))){
			
			$validator 			= Validator::make($request->all(), [
                'yearsOld'    	=> 'required'
            ]);
			
			if ($validator->fails()) {
				return redirect('/user/personalView')->withErrors($validator)->withInput();
			} else {
				$userDetail->years_old 	= $request->input('yearsOld');
				$userDetail->token 		= str_random(64);
				$userDetail->save();
				return 'true';
			}
		}else if(!empty($request->input('lindsey')) && !empty($request->input('wayne')) || !empty($request->input('myChild')) || !empty($request->input('someone')) || !empty($request->input('myself'))){
			
			if(!empty($request->input('lindsey')) && !empty($request->input('wayne'))){
				
				$validator 			= Validator::make($request->all(), [
					'lindsey'    	=> 'required',
					'wayne'    		=> 'required'
				]);
				
				if ($validator->fails()) {
					return redirect('/user/personalView')->withErrors($validator)->withInput();
				} else {
					$userDetail->lindsey 	= $request->input('lindsey');
					$userDetail->wayne 		= $request->input('wayne');
					$userDetail->my_child 	= '';
					$userDetail->someone 	= '';
					$userDetail->myself 	= '';
					$userDetail->token 		= str_random(64);
					$userDetail->save();
					return 'true';
				}
			}else if(!empty($request->input('myChild'))){
				
				$validator 			= Validator::make($request->all(), [
					'myChild'    	=> 'required'
				]);
				
				if ($validator->fails()) {
					return redirect('/user/personalView')->withErrors($validator)->withInput();
				} else {
					$userDetail->lindsey 	= '';
					$userDetail->wayne 		= '';
					$userDetail->my_child 	= $request->input('myChild');
					$userDetail->someone 	= '';
					$userDetail->myself 	= '';
					$userDetail->token 		= str_random(64);
					$userDetail->save();
					return 'true';
				}
			}else if(!empty($request->input('someone'))){
				
				$validator 			= Validator::make($request->all(), [
					'someone'    	=> 'required'
				]);
				
				if ($validator->fails()) {
					return redirect('/user/personalView')->withErrors($validator)->withInput();
				} else {
					$userDetail->lindsey 	= '';
					$userDetail->wayne 		= '';
					$userDetail->my_child 	= '';
					$userDetail->someone 	= $request->input('someone');
					$userDetail->myself 	= '';
					$userDetail->token 		= str_random(64);
					$userDetail->save();
					return 'true';
				}
			}else if(!empty($request->input('myself'))){
				
				$validator 			= Validator::make($request->all(), [
					'myself'    	=> 'required'
				]);
				
				if ($validator->fails()) {
					return redirect('/user/personalView')->withErrors($validator)->withInput();
				} else {
					$userDetail->lindsey 	= '';
					$userDetail->wayne 		= '';
					$userDetail->my_child 	= '';
					$userDetail->someone 	= '';
					$userDetail->myself 	= $request->input('myself');
					$userDetail->token 		= str_random(64);
					$userDetail->save();
					return 'true';
				}
			}
		}else if(!empty($request->input('realEstate')) || !empty($request->input('useMyDos'))){
			
			if(!empty($request->input('realEstate'))){
				
				$validator 			= Validator::make($request->all(), [
					'realEstate'    => 'required'
				]);
				
				if ($validator->fails()) {
					return redirect('/user/personalView')->withErrors($validator)->withInput();
				} else {
					$userDetail->real_estate 	= $request->input('realEstate');
					$userDetail->token 			= str_random(64);
					$userDetail->save();
					return 'true';
				}
			}else if(!empty($request->input('useMyDos'))){
				
				$validator 			= Validator::make($request->all(), [
					'useMyDos'    	=> 'required'
				]);
				
				if ($validator->fails()) {
					return redirect('/user/personalView')->withErrors($validator)->withInput();
				} else {
					$userDetail->use_my_dos = $request->input('useMyDos');
					$userDetail->token 		= str_random(64);
					$userDetail->save();
					return 'true';
				}
			}
		}else if(!empty($request->input('importantInfo')) && !empty($request->input('emailAddress')) && !empty($request->input('personalize'))){
		
			$validator 				= Validator::make($request->all(), [
				'importantInfo'    	=> 'required',
				'emailAddress'    	=> 'required',
				'personalize'    	=> 'required'
			]);
			
			if ($validator->fails()) {
				return redirect('/user/personalView')->withErrors($validator)->withInput();
			} else {
				$userDetail->important_info 	= $request->input('importantInfo');
				$userDetail->email_address 		= $request->input('emailAddress');
				$userDetail->personalize 		= $request->input('personalize');
				$userDetail->token 				= str_random(64);
				$userDetail->save();
				return 'true';
			}
		}else if(!empty($request->input('companyImportantInfo')) && !empty($request->input('companyEmailAddress')) && !empty($request->input('companyPersonalize'))){
			
			$validator 						= Validator::make($request->all(), [
				'companyImportantInfo'    	=> 'required',
				'companyEmailAddress'    	=> 'required',
				'companyPersonalize'    	=> 'required'
			]);
			
			if ($validator->fails()) {
				return redirect('/user/personalView')->withErrors($validator)->withInput();
			} else {
				$userDetail->company_important_info 	= $request->input('companyImportantInfo');
				$userDetail->company_email_address 		= $request->input('companyEmailAddress');
				$userDetail->company_personalize 		= $request->input('companyPersonalize');
				$userDetail->token 						= str_random(64);
				$userDetail->save();
				return 'true';
			}
		}else if(!empty($request->input('eldercare')) && !empty($request->input('health_and_medical')) && !empty($request->input('after_gone')) && !empty($request->input('financial')) && !empty($request->input('legal')) && !empty($request->input('my_life'))){
			
			$eldercare 				= $request->input('eldercare');
			$health 				= $request->input('health_and_medical');
			$after 					= $request->input('after_gone');
			$financial 				= $request->input('financial');
			$legal 					= $request->input('legal');
			$life 					= $request->input('my_life');
			
			$eldercare_wishes 		= implode(",", $eldercare);
			$health_and_medical 	= implode(",", $health);
			$after_gone 			= implode(",", $after);
			$financial_wishes 		= implode(",", $financial);
			$legal_wishes 			= implode(",", $legal);
			$my_life 				= implode(",", $life);
			
			$validator 				= Validator::make($request->all(), [
                'eldercare'    			=> 'required',
				'health_and_medical'    => 'required',
				'after_gone'    		=> 'required',
				'financial'    			=> 'required',
				'legal'    				=> 'required',
				'my_life'    			=> 'required',
            ]);
			
			if ($validator->fails()) {
				return redirect('/user/personalView')->withErrors($validator)->withInput();
			} else {
				$userDetail->eldercare 				= $eldercare_wishes;
				$userDetail->health_and_medical 	= $health_and_medical;
				$userDetail->after_gone 			= $after_gone;
				$userDetail->financial 				= $financial_wishes;
				$userDetail->legal 					= $legal_wishes;
				$userDetail->my_life 				= $my_life;
				$userDetail->token 					= str_random(64);
				$userDetail->save();
				return 'true';
			}
		}else{
			return 'false';
		}
    }*/
}
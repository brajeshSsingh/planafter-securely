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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
	 
    public function index()
    {
		$userDetail			= array();
		if(!empty(session()->get('user_id'))){
			$user_id 			= session()->get('user_id');
			$userDetail        	= User::where('id', '=', $user_id)->first();
		}
		if(Auth::user()){
			return redirect('/user/dashboard');
		}else{ 
			return view('steps.step1-personal-details', compact('userDetail'));
		}
    }
	
	public function addStep1(Request $request)
    {
		
		$validator = Validator::make($request->all(),
						[
						'first_name' => 'required',
						'middle_name' => 'required',
						'last_name' => 'required',
						'date_of_birth' => 'required',
						'gender' => 'required',
						]);
		if ($validator->fails()) {
			return redirect('/')->withErrors($validator)->withInput();
		}else{
			
			if(!empty(session()->get('user_id'))){ 
				$user_id = session()->get('user_id');
				$update = User::where('id', $user_id)->update([
                    'first_name' => $request->input('first_name'),
					'middle_name' => $request->input('middle_name'),
					'last_name' => $request->input('last_name'),
					'gender' => $request->input('gender'),
					'date_of_birth' => $request->input('date_of_birth'),
                ]);
			}else{
				$user = User::create([
						'first_name' => $request->input('first_name'),
						'middle_name' => $request->input('middle_name'),
						'last_name' => $request->input('last_name'),
						'gender' => $request->input('gender'),
						'date_of_birth' => $request->input('date_of_birth'),
					]);
				session()->put('user_id', $user->id);
			}
			return redirect('/home/step2');
		}
    }
	
	public function step2()
    {
		$userDetail			= array();
		if(!empty(session()->get('user_detail_id'))){
			$user_id 			= session()->get('user_detail_id');
			$userDetail        	= UserDetail::where('id', '=', $user_id)->first();
		}
		if(Auth::user()){
			return redirect('/user/dashboard');
		}else{ 
			return view('steps.step2-reason-for-using-platform', compact('userDetail'));
		}
    }
	
	public function addStep2(Request $request)
    {
		$validator = Validator::make($request->all(),
						[
						'answer' => 'required',
						]);
		if ($validator->fails()) {
			return redirect('/home/step2')->withErrors($validator)->withInput();
		}else{
			
			if(!empty(session()->get('user_detail_id'))){ 
				$user_id = session()->get('user_detail_id');
				$update = UserDetail::where('id', $user_id)->update([
                    'answer' => $request->input('answer'),
                ]);
			}else{
				$user_id = session()->get('user_id');
				$user = UserDetail::create([
						'user_id' => $user_id,
						'answer' => $request->input('answer'),
					]);
				session()->put('user_detail_id', $user->id);
			}
			return redirect('/home/step3');
		}
    }
	
	public function step3()
    {
		
		$userDetail			= array();
		if(!empty(session()->get('user_detail_id'))){
			$user_id 			= session()->get('user_detail_id');
			$userDetail        	= UserDetail::where('id', '=', $user_id)->first();
		}
		if(Auth::user()){
			return redirect('/user/dashboard');
		}else{ 
			return view('steps.step3-insurance-planning', compact('userDetail'));
		}
    }
	
	public function addStep3(Request $request)
    {
		
		$validator = Validator::make($request->all(),
						[
						'insurance_planning' => 'required',
						]);
		if ($validator->fails()) {
			return redirect('/home/step3')->withErrors($validator)->withInput();
		}else{
			$insurance_planning = implode(',', $request->input('insurance_planning'));
			if(!empty(session()->get('user_detail_id'))){ 
				$user_id = session()->get('user_detail_id');
				$update = UserDetail::where('id', $user_id)->update([
                    'insurance_planning' => $insurance_planning,
                ]);
			}else{
				$user_id = session()->get('user_id');
				$user = UserDetail::create([
						'user_id' => $user_id,
						'insurance_planning' => $insurance_planning,
					]);
				session()->put('user_detail_id', $user->id);
			}
			return redirect('/home/step4');
		}
    }
	
	public function step4()
    {
		
		$userDetail			= array();
		if(!empty(session()->get('user_detail_id'))){
			$user_id 			= session()->get('user_detail_id');
			$userDetail        	= UserDetail::where('id', '=', $user_id)->first();
		}
		if(Auth::user()){
			return redirect('/user/dashboard');
		}else{ 
			return view('steps.step4-health-care-planning', compact('userDetail'));
		}
    }
	
	public function addStep4(Request $request)
    {
		$validator = Validator::make($request->all(),
						[
						'health_care_planning' => 'required',
						]);
		if ($validator->fails()) {
			return redirect('/home/step4')->withErrors($validator)->withInput();
		}else{
			$health_care_planning = implode(',', $request->input('health_care_planning'));
			if(!empty(session()->get('user_detail_id'))){ 
				$user_id = session()->get('user_detail_id');
				$update = UserDetail::where('id', $user_id)->update([
                    'health_care_planning' => $health_care_planning,
                ]);
			}else{
				$user_id = session()->get('user_id');
				$user = UserDetail::create([
						'user_id' => $user_id,
						'health_care_planning' => $health_care_planning,
					]);
				session()->put('user_detail_id', $user->id);
			}
			return redirect('/home/step5');
		}
    }
	
	public function step5()
    {
		
		$userDetail			= array();
		if(!empty(session()->get('user_detail_id'))){
			$user_id 			= session()->get('user_detail_id');
			$userDetail        	= UserDetail::where('id', '=', $user_id)->first();
		}
		if(Auth::user()){
			return redirect('/user/dashboard');
		}else{ 
			return view('steps.step5-financial-planning', compact('userDetail'));
		}
    }
	
	public function addStep5(Request $request)
    {
		
		$validator = Validator::make($request->all(),
						[
						'financial_planning' => 'required',
						]);
		if ($validator->fails()) {
			return redirect('/home/step5')->withErrors($validator)->withInput();
		}else{
			$financial_planning = implode(',', $request->input('financial_planning'));
			if(!empty(session()->get('user_detail_id'))){ 
				$user_id = session()->get('user_detail_id');
				$update = UserDetail::where('id', $user_id)->update([
                    'financial_planning' => $financial_planning,
                ]);
			}else{
				$user_id = session()->get('user_id');
				$user = UserDetail::create([
						'user_id' => $user_id,
						'financial_planning' => $financial_planning,
					]);
				session()->put('user_detail_id', $user->id);
			}
			return redirect('/home/step6');
		}
    }
	
	public function step6()
    {
		
		$userDetail			= array();
		if(!empty(session()->get('user_detail_id'))){
			$user_id 			= session()->get('user_detail_id');
			$userDetail        	= UserDetail::where('id', '=', $user_id)->first();
		}
		if(Auth::user()){
			return redirect('/user/dashboard');
		}else{ 
			return view('steps.step6-legal-planning', compact('userDetail'));
		}
    }
	
	public function addStep6(Request $request)
    {
		
		$validator = Validator::make($request->all(),
						[
						'legal_planning' => 'required',
						]);
		if ($validator->fails()) {
			return redirect('/home/step6')->withErrors($validator)->withInput();
		}else{
			$legal_planning = implode(',', $request->input('legal_planning'));
			if(!empty(session()->get('user_detail_id'))){ 
				$user_id = session()->get('user_detail_id');
				$update = UserDetail::where('id', $user_id)->update([
                    'legal_planning' => $legal_planning,
                ]);
			}else{
				$user_id = session()->get('user_id');
				$user = UserDetail::create([
						'user_id' => $user_id,
						'legal_planning' => $legal_planning,
					]);
				session()->put('user_detail_id', $user->id);
			}
			return redirect('/home/step7');
		}
    }
	
	public function step7()
    {
		
		$userDetail			= array();
		if(!empty(session()->get('user_detail_id'))){
			$user_id 			= session()->get('user_detail_id');
			$userDetail        	= UserDetail::where('id', '=', $user_id)->first();
		}
		if(Auth::user()){
			return redirect('/user/dashboard');
		}else{ 
			return view('steps.step7-future-planning', compact('userDetail'));
		}
    }
	
	public function addStep7(Request $request)
    {
		
		$validator = Validator::make($request->all(),
						[
						'future_planning' => 'required',
						]);
		if ($validator->fails()) {
			return redirect('/home/step7')->withErrors($validator)->withInput();
		}else{
			$future_planning = implode(',', $request->input('future_planning'));
			if(!empty(session()->get('user_detail_id'))){ 
				$user_id = session()->get('user_detail_id');
				$update = UserDetail::where('id', $user_id)->update([
                    'future_planning' => $future_planning,
                ]);
			}else{
				$user_id = session()->get('user_id');
				$user = UserDetail::create([
						'user_id' => $user_id,
						'future_planning' => $future_planning,
					]);
				session()->put('user_detail_id', $user->id);
			}
			return redirect('/home/step8');
		}
    }
	
	public function step8()
    {
		
		$userDetail			= array();
		if(!empty(session()->get('user_detail_id'))){
			$user_id 			= session()->get('user_detail_id');
			$userDetail        	= UserDetail::where('id', '=', $user_id)->first();
		}
		if(Auth::user()){
			return redirect('/user/dashboard');
		}else{ 
			return view('steps.step8-funeral-planning', compact('userDetail'));
		}
    }
	
	public function addStep8(Request $request)
    {
		
		$validator = Validator::make($request->all(),
						[
						'funeral_wishes' => 'required',
						]);
		if ($validator->fails()) {
			return redirect('/home/step8')->withErrors($validator)->withInput();
		}else{
			
			if(!empty(session()->get('user_detail_id'))){ 
				$user_id = session()->get('user_detail_id');
				$update = UserDetail::where('id', $user_id)->update([
                    'funeral_wishes' => $request->input('funeral_wishes'),
                ]);
			}else{
				$user_id = session()->get('user_id');
				$user = UserDetail::create([
						'user_id' => $user_id,
						'funeral_wishes' => $request->input('funeral_wishes'),
					]);
				session()->put('user_detail_id', $user->id);
			}
			return redirect('/home/step9');
		}
    }
	
	public function step9()
    {
		
		$userDetail			= array();
		if(!empty(session()->get('user_detail_id'))){
			$user_id 			= session()->get('user_detail_id');
			$userDetail        	= UserDetail::where('id', '=', $user_id)->first();
		}
		if(Auth::user()){
			return redirect('/user/dashboard');
		}else{ 
			return view('steps.step9-marital-status', compact('userDetail'));
		}
    }
	
	public function addStep9(Request $request)
    {
		
		$validator = Validator::make($request->all(),
						[
						'life_partner' => 'required',
						]);
		if ($validator->fails()) {
			return redirect('/home/step9')->withErrors($validator)->withInput();
		}else{
			
			if(!empty(session()->get('user_detail_id'))){ 
				$user_id = session()->get('user_detail_id');
				$update = UserDetail::where('id', $user_id)->update([
                    'life_partner' => $request->input('life_partner'),
                ]);
			}else{
				$user_id = session()->get('user_id');
				$user = UserDetail::create([
						'user_id' => $user_id,
						'life_partner' => $request->input('life_partner'),
					]);
				session()->put('user_detail_id', $user->id);
			}
			return redirect('/home/step10');
		}
    }
	
	public function step10()
    {
		
		$userDetail			= array();
		if(!empty(session()->get('user_detail_id'))){
			$user_id 			= session()->get('user_detail_id');
			$userDetail        	= UserDetail::where('id', '=', $user_id)->first();
		}
		if(Auth::user()){
			return redirect('/user/dashboard');
		}else{ 
			return view('steps.step10-children', compact('userDetail'));
		}
    }
	
	public function addStep10(Request $request)
    {
		
		$validator = Validator::make($request->all(),
						[
						'children' => 'required',
						'children_years_old1' => 'required',
						'children_years_old2' => 'required',
						]);
		if ($validator->fails()) {
			return redirect('/home/step10')->withErrors($validator)->withInput();
		}else{

			if(!empty(session()->get('user_detail_id'))){ 
				$user_id = session()->get('user_detail_id');
				$update = UserDetail::where('id', $user_id)->update([
                    'children' => $request->input('children'),
					'children_years_old1' => $request->input('children_years_old1'),
					'children_years_old2' => $request->input('children_years_old2'),
                ]);
			}else{
				$user_id = session()->get('user_id');
				$user = UserDetail::create([
						'user_id' => $user_id,
						'children' => $request->input('children'),
						'children_years_old1' => $request->input('children_years_old1'),
						'children_years_old2' => $request->input('children_years_old2'),
					]);
				session()->put('user_detail_id', $user->id);
			}
			return redirect('/home/step11');
		}
    }
	
	public function step11()
    {
		
		$userDetail			= array();
		if(!empty(session()->get('user_detail_id'))){
			$user_id 			= session()->get('user_detail_id');
			$userDetail        	= UserDetail::where('id', '=', $user_id)->first();
		}
		if(Auth::user()){
			return redirect('/user/dashboard');
		}else{ 
			return view('steps.step11', compact('userDetail'));
		}
    }
	
	public function addStep11(Request $request)
    {
		
		$validator = Validator::make($request->all(),
						[
						'insurance_planning' => 'required',
						]);
		if ($validator->fails()) {
			return redirect('/home/step11')->withErrors($validator)->withInput();
		}else{
			$insurance_planning = implode(',', $request->input('insurance_planning'));
			if(!empty(session()->get('user_detail_id'))){ 
				$user_id = session()->get('user_detail_id');
				$update = UserDetail::where('id', $user_id)->update([
                    'insurance_planning' => $insurance_planning,
                ]);
			}else{
				$user_id = session()->get('user_id');
				$user = UserDetail::create([
						'user_id' => $user_id,
						'insurance_planning' => $insurance_planning,
					]);
				session()->put('user_detail_id', $user->id);
			}
			return redirect('/home/step12');
		}
    }
	
	public function step12()
    {
		
		$userDetail			= array();
		if(!empty(session()->get('user_detail_id'))){
			$user_id 			= session()->get('user_detail_id');
			$userDetail        	= UserDetail::where('id', '=', $user_id)->first();
		}
		if(Auth::user()){
			return redirect('/user/dashboard');
		}else{ 
			return view('steps.step-12-invite-designated-representative', compact('userDetail'));
		}
    }
	
	public function addStep12(Request $request)
    {
		
		$validator = Validator::make($request->all(),
						[
						'email_address' => 'required',
						'personal_message' => 'required',
						]);
		if ($validator->fails()) {
			return redirect('/home/step12')->withErrors($validator)->withInput();
		}else{
			
			if(!empty(session()->get('user_detail_id'))){ 
				$user_id = session()->get('user_detail_id');
				$update = UserDetail::where('id', $user_id)->update([
                    'email_address' => $request->input('email_address'),
					'personal_message' => $request->input('personal_message'),
                ]);
			}else{
				$user_id = session()->get('user_id');
				$user = UserDetail::create([
						'user_id' => $user_id,
						'email_address' => $request->input('email_address'),
						'personal_message' => $request->input('personal_message'),
					]);
				session()->put('user_detail_id', $user->id);
			}
			return redirect('/home/step13');
		}
    }
	
	public function step13()
    {
		
		$userDetail			= array();
		/*$user 				= Auth::user();
		$userID 			= $user->id;
		$userDetail        	= User::where('id', '=', $userID)->first();*/
		if(Auth::user()){
			return redirect('/user/dashboard');
		}else{ 
			return view('steps.step13-confirmation', compact('userDetail'));
		}
    }
	
}

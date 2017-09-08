<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ChangepasswordController extends Controller
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
        return view('changepassword.changepassword');
    }
	
	public function changePassword(Request $request)
	{
		$validator = Validator::make($request->all(),
		[
		'password' => 'required',
		'new_password' => 'required|min:6',
		'confirm_password' => 'required|min:6|same:new_password',
		]);
		if ($validator->fails()) {
			return redirect('/changepassword')->withErrors($validator)->withInput();
		}else{
			
			$user = Auth::user();
			$curPassword = $request->input('password');
			$newPassword = $request->input('new_password');
			$confirmPassword = $request->input('confirm_password');
			
			if (Hash::check($curPassword, $user->password)) {
				$user_id = $user->id;
				$obj_user = User::find($user_id)->first();
				$obj_user->password = Hash::make($newPassword);
				$obj_user->save();
				$request->session()->flash('success', 'Your password has been changed.');
				//return response()->json(["result"=>true]);
			}
			else
			{
				$request->session()->flash('failure', 'Your password has not been changed. Please check your old password!');
				//return response()->json(["result"=>false]);
			}
			return redirect('/changepassword');
		}
	}
}

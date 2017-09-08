<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Middleware options can be located in `app/Http/Kernel.php`
|
*/

// Homepage Route
Route::get('/', 'WelcomeController@welcome')->name('welcome');

// Authentication Routes
Auth::routes();

// Public Routes
Route::group(['middleware' => 'web'], function() {

    // Activation Routes
    Route::get('/activate', ['as' => 'activate', 'uses' => 'Auth\ActivateController@initial']);

    Route::get('/activate/{token}', ['as' => 'authenticated.activate', 'uses' => 'Auth\ActivateController@activate']);
    Route::get('/activation', ['as' => 'authenticated.activation-resend', 'uses' => 'Auth\ActivateController@resend']);
    Route::get('/exceeded', ['as' => 'exceeded', 'uses' => 'Auth\ActivateController@exceeded']);

    // Socialite Register Routes
    Route::get('/social/redirect/{provider}', ['as' => 'social.redirect', 'uses' => 'Auth\SocialController@getSocialRedirect']);
    Route::get('/social/handle/{provider}', ['as' => 'social.handle', 'uses' => 'Auth\SocialController@getSocialHandle']);

    // Route to for user to reactivate their user deleted account.
    Route::get('/re-activate/{token}', ['as' => 'user.reactivate', 'uses' => 'RestoreUserController@userReActivate']);
	
	Route::name('goDashboard')->get('/user/goDashboard')->uses('UserController@goDashboard');
	
	Route::get('/user/goDashboard', ['as' => 'user.goDashboard', 'uses' => 'UserController@goDashboard']);
	
	Route::post('/user/goDashboard', ['as' => 'user.goDashboard', 'uses' => 'UserController@goDashboard']);
	
	Route::name('congratsThanks')->get('/user/congratsThanks')->uses('UserController@congratsThanks');
	
	Route::get('/user/congratsThanks', ['as' => 'user.congratsThanks', 'uses' => 'UserController@congratsThanks']);
	
	Route::post('/user/congratsThanks', ['as' => 'user.congratsThanks', 'uses' => 'UserController@congratsThanks']);
	
	Route::name('personalInfo')->get('/user/personalInfo')->uses('UserController@personalInfo');
	
	Route::get('/user/personalInfo', ['as' => 'user.personalInfo', 'uses' => 'UserController@personalInfo']);
	
	Route::post('/user/personalInfo', ['as' => 'user.personalInfo', 'uses' => 'UserController@personalInfo']);
	
	Route::name('personalView')->get('/user/personalView')->uses('UserController@personalView');
	
	Route::get('/user/personalView', ['as' => 'user.personalView', 'uses' => 'UserController@personalView']);
	
	Route::name('cardFree')->get('/user/cardFree')->uses('UserController@cardFree');
	
	Route::get('/user/cardFree', ['as' => 'user.cardFree', 'uses' => 'UserController@cardFree']);
	
	Route::name('cardFreeForm')->get('/user/cardFreeForm')->uses('UserController@cardFreeForm');
	
	Route::post('/user/cardFreeForm', ['as' => 'user.cardFreeForm', 'uses' => 'UserController@cardFreeForm']);

	Route::name('signupForm')->get('/user/signupForm')->uses('UserController@signupForm');
	
	Route::post('/user/signupForm', ['as' => 'user.signupForm', 'uses' => 'UserController@signupForm']);

});
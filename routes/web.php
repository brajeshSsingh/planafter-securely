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
*/

Route::get('/', function () {
	if(Auth::user()){
		//return view('dashboard/dashboard');
		return redirect('/user');
	}else{
		//return view('auth/login');
		if(!empty(session()->get('user_first_name'))){
			session()->forget('user_first_name');
		}
		return redirect('/login');
	}
});

Auth::routes();

//*Start HomeController*//

Route::get('/', 'HomeController@index');

Route::get('/home/addStep1', 'HomeController@addStep1');
Route::post('/home/addStep1', 'HomeController@addStep1');

Route::get('/home/step2', 'HomeController@step2');

Route::get('/home/addStep2', 'HomeController@addStep2');
Route::post('/home/addStep2', 'HomeController@addStep2');

Route::get('/home/step3', 'HomeController@step3');

Route::get('/home/addStep3', 'HomeController@addStep3');
Route::post('/home/addStep3', 'HomeController@addStep3');

Route::get('/home/step4', 'HomeController@step4');

Route::get('/home/addStep4', 'HomeController@addStep4');
Route::post('/home/addStep4', 'HomeController@addStep4');

Route::get('/home/step5', 'HomeController@step5');

Route::get('/home/addStep5', 'HomeController@addStep5');
Route::post('/home/addStep5', 'HomeController@addStep5');

Route::get('/home/step6', 'HomeController@step6');

Route::get('/home/addStep6', 'HomeController@addStep6');
Route::post('/home/addStep6', 'HomeController@addStep6');

Route::get('/home/step7', 'HomeController@step7');

Route::get('/home/addStep7', 'HomeController@addStep7');
Route::post('/home/addStep7', 'HomeController@addStep7');

Route::get('/home/step8', 'HomeController@step8');

Route::get('/home/addStep8', 'HomeController@addStep8');
Route::post('/home/addStep8', 'HomeController@addStep8');

Route::get('/home/step9', 'HomeController@step9');

Route::get('/home/addStep9', 'HomeController@addStep9');
Route::post('/home/addStep9', 'HomeController@addStep9');

Route::get('/home/step10', 'HomeController@step10');

Route::get('/home/addStep10', 'HomeController@addStep10');
Route::post('/home/addStep10', 'HomeController@addStep10');

Route::get('/home/step11', 'HomeController@step11');

Route::get('/home/addStep11', 'HomeController@addStep11');
Route::post('/home/addStep11', 'HomeController@addStep11');

Route::get('/home/step12', 'HomeController@step12');

Route::get('/home/addStep12', 'HomeController@addStep12');
Route::post('/home/addStep12', 'HomeController@addStep12');

Route::get('/home/step13', 'HomeController@step13');

//*End HomeController*//
//*Start UserController*//

Route::get('/user', 'UserController@index');

Route::get('/user/my_account', 'UserController@my_account');

Route::get('/user/setting', 'UserController@setting');

Route::get('/user/dashboard', 'UserController@dashboard');

Route::get('/user/logout', 'UserController@logout');

//*End UserController*//
//*Start FinancialController*//

Route::get('/financial', 'FinancialController@index');
Route::get('/financial/financial_all', 'FinancialController@financial_all');

//*End FinancialController*//
//*Start AssetsController*//

Route::get('/assets', 'AssetsController@index');
Route::get('/assets/add_new_jewelry', 'AssetsController@add_new_jewelry');
Route::get('/assets/add_new_real_estate', 'AssetsController@add_new_real_estate');
Route::get('/assets/add_new_vehicle', 'AssetsController@add_new_vehicle');
Route::get('/assets/assets_view_all', 'AssetsController@assets_view_all');
Route::get('/assets/assets_details_car', 'AssetsController@assets_details_car');

//*End AssetsController*//
//*Start LoansController*//

Route::get('/loans', 'LoansController@index');
Route::get('/loans/loans_all', 'LoansController@loans_all');
Route::get('/loans/loans_details_personalloan', 'LoansController@loans_details_personalloan');

//*End LoansController*//
//*Start InsuranceController*//

Route::get('/insurance', 'InsuranceController@index');
Route::get('/insurance/insurance_all', 'InsuranceController@insurance_all');
Route::get('/insurance/insurance_details_life_insurance', 'InsuranceController@insurance_details_life_insurance');

//*End InsuranceController*//
//*Start DigitallifeController*//

Route::get('/digitallife', 'DigitallifeController@index');
Route::get('/digitallife/digitallife_all', 'DigitallifeController@digitallife_all');
Route::get('/digitallife/digital_life_instagram', 'DigitallifeController@digital_life_instagram');

//*End DigitallifeController*//
//*Start HealthwellbeingController*//

Route::get('/healthwellbeing', 'HealthwellbeingController@index');
Route::get('/healthwellbeing/health_wellbeing_all', 'HealthwellbeingController@health_wellbeing_all');
Route::get('/healthwellbeing/health_wellbeing_details_healthinsurance', 'HealthwellbeingController@health_wellbeing_details_healthinsurance');

//*End HealthwellbeingController*//
//*Start DependentsController*//

Route::get('/dependents', 'DependentsController@index');
Route::get('/dependents/dependents_all', 'DependentsController@dependents_all');
Route::get('/dependents/dependents_details_childdetails', 'DependentsController@dependents_details_childdetails');

//*End DependentsController*//
//*Start EstateplanningController*//

Route::get('/estateplanning', 'EstateplanningController@index');
Route::get('/estateplanning/estateplaning_addnewwill', 'EstateplanningController@estateplaning_addnewwill');
Route::get('/estateplanning/estateplaning_all', 'EstateplanningController@estateplaning_all');
Route::get('/estateplanning/estateplaning_details_trust', 'EstateplanningController@estateplaning_details_trust');

//*End EstateplanningController*//
//*Start LegacyplanController*//

Route::get('/legacyplan', 'LegacyplanController@index');
Route::get('/legacyplan/legacyplan_all', 'LegacyplanController@legacyplan_all');
Route::get('/legacyplan/legacyplan_details', 'LegacyplanController@legacyplan_details');

//*End LegacyplanController*//
//*Start EldercareController*//

Route::get('/eldercare', 'EldercareController@index');
Route::get('/eldercare/eldercare_all', 'EldercareController@eldercare_all');
Route::get('/eldercare/eldercare_details_eldercare', 'EldercareController@eldercare_details_eldercare');

//*End EldercareController*//
//*Start TaxescreditController*//

Route::get('/taxescredit', 'TaxescreditController@index');
Route::get('/taxescredit/taxes_all', 'TaxescreditController@taxes_all');
Route::get('/taxescredit/taxes_details_taxreturns', 'TaxescreditController@taxes_details_taxreturns');

//*End TaxescreditController*//
//*Start CharitygivingController*//

Route::get('/charitygiving', 'CharitygivingController@index');
Route::get('/charitygiving/charity_giving_all', 'CharitygivingController@charity_giving_all');
Route::get('/charitygiving/charity_giving_details', 'CharitygivingController@charity_giving_details');

//*End CharitygivingController*//
//*Start DefaultController*//

Route::get('/default/default', 'DefaultController@index');

//*End DefaultController*//
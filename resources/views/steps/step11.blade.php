@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box-questionnaire-container remove-height">
			<div class="step-progress">
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:90%">
						<span class="sr-only">90% Complete</span>
					</div>
				</div>
			</div>
			
			{!! Form::open(['url' => '/home/addStep11', 'enctype' => 'multipart/form-data', 'class' => 'style-form', 'role' => 'form', 'method' => 'POST', 'id' => 'addStep11'] ) !!}
					
				{{ csrf_field() }}
						
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
						<div class="sub-header">
							<h5>Final Steps!</h5>
							<h2>With whom you would share the information?</h2>
							<p>When you decided to utilize PlanSecurely, who were you thinking of sharing<br/>the information with first?</p>
						</div>
						@php @$spouseTrue = false; @endphp
						@if(@$userDetail->sharing_information == 'spouse')
							@php @$spouseTrue = ture; @endphp
						@endif
						<div class="radio-btn-row">
							{{ Form::radio('sharing_information', 'spouse', @$spouseTrue, ['id' => 'spouse', 'class' => 'sharing_information']) }}
							<!--<input type="radio" id="spouse" name="sharing_information" />-->
							<label for="spouse"><span class="sharing_information" style="border : {{ $errors->has('sharing_information') ? '1px solid #a94442' : '' }}"></span>My spouse or partner</label>
						</div>
						<div class="form-details final-steps-box">
							<div class="row b-m-20">
								<div class="col-md-5 col-xs-12 col-sm-6">
									<div class="form-group{{ $errors->has('information_first_name') ? ' has-error' : '' }}">
										<label>First Name</label>
										<!--<input type="text" class="form-control" title="First Name" value="Howard">-->
										{!! Form::text('information_first_name', @$userDetail->information_first_name , ['class' => 'form-control', 'id' => 'information_first_name', 'title' => 'First Name']) !!}
									</div>
								</div>
								<div class="col-md-5 col-xs-12 col-sm-6">
									<div class="form-group{{ $errors->has('information_last_name') ? ' has-error' : '' }}">
										<label>Last Name</label>
										<!--<input type="text" class="form-control" title="Last Name" value="Henry">-->
										{!! Form::text('information_last_name', @$userDetail->information_last_name , ['class' => 'form-control', 'id' => 'information_last_name', 'title' => 'Last Name']) !!}
									</div>
								</div>
							</div>
							@php @$childTrue = false; @endphp
							@if(@$userDetail->sharing_information == 'child')
								@php @$childTrue = true; @endphp
							@endif
							<div class="radio-btn-row">
								{{ Form::radio('sharing_information', 'child', @$childTrue, ['id' => 'child', 'class' => 'sharing_information']) }}
								<!--<input type="radio" id="child" name="sharing_information" />-->
								<label for="child"><span class="sharing_information" style="border : {{ $errors->has('sharing_information') ? '1px solid #a94442' : '' }}"></span>My Child</label>
							</div>
							@php @$someoneTrue = false; @endphp
							@if(@$userDetail->sharing_information == 'someone')
								@php @$someoneTrue = true; @endphp
							@endif
							<div class="radio-btn-row">
								{{ Form::radio('sharing_information', 'someone', @$someoneTrue, ['id' => 'someone', 'class' => 'sharing_information']) }}
								<!--<input type="radio" id="someone" name="sharing_information" />-->
								<label for="someone"><span class="sharing_information" style="border : {{ $errors->has('sharing_information') ? '1px solid #a94442' : '' }}"></span>Someone else</label>
							</div>
							@php @$myselfTrue = false; @endphp
							@if(@$userDetail->sharing_information == 'myself')
								@php @$myselfTrue = true; @endphp
							@endif
							<div class="radio-btn-row b-m-60">
								{{ Form::radio('sharing_information', 'myself', @$myselfTrue, ['id' => 'myself', 'class' => 'sharing_information']) }}
								<!--<input type="radio" id="myself" name="sharing_information" />-->
								<label for="myself"><span class="sharing_information" style="border : {{ $errors->has('sharing_information') ? '1px solid #a94442' : '' }}"></span>I'd like to keep my plan to myself</label>
							</div>
							<p class="b-p-40">What section(s) of the plan would you like to give this person access to?</p>
							<div class="b-p-50">
								<label for="select_all" class="lbl-checkbox text-dark" tabindex="0">
									<div class="checkbox-btn">
										{{ Form::checkbox('select_all', null, null, ['id' => 'select_all']) }}
										<!--<input name="select_all" id="select_all" type="checkbox" >-->
										<span></span> 
									</div>
									Select all <small>(or select specific sections below)</small>
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="box-checkbox">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10" id="checkBoxes">
							<div class="row">
								<div class="col-md-4 col-lg-4 col-xs-12 col-sm-4">
									<h6>Financial Accounts</h6>
									
									@php @$financialFirst = false; @$financialSecond = false; @$financialThird = false; @$financialFour = false; @endphp
									@foreach (explode(',', @$userDetail->financial_accounts) as $page)
										@if($page == 'Bank Accounts')
											@php @$financialFirst = true; @endphp
										@endif
										@if($page == 'Credit Cards')
											@php @$financialSecond = true; @endphp
										@endif
										@if($page == 'Investment Accounts')
											@php @$financialThird = true; @endphp
										@endif
										@if($page == 'Other')
											@php @$financialFour = true; @endphp
										@endif
									@endforeach
								
									<div class="checkbox">
										<label for="financial_bank_account" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('financial_accounts[]', 'Bank Accounts', @$financialFirst, ['id' => 'financial_bank_account', 'class' => 'financial_accounts']) }}
												<!--<input name="financial_bank_account" id="financial_bank_account" type="checkbox">-->
												<span class="financial_accounts" style="border : {{ $errors->has('financial_accounts') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Bank Accounts
										</label>
									</div>
									<div class="checkbox">
										<label for="financial_credit_card" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('financial_accounts[]', 'Credit Cards', @$financialSecond, ['id' => 'financial_credit_card', 'class' => 'financial_accounts']) }}
												<!--<input name="financial_credit_card" id="financial_credit_card" type="checkbox">-->
												<span class="financial_accounts" style="border : {{ $errors->has('financial_accounts') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Credit Cards
										</label>
									</div>
									<div class="checkbox">
										<label for="financial_investment_account" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('financial_accounts[]', 'Investment Accounts', @$financialThird, ['id' => 'financial_investment_account', 'class' => 'financial_accounts']) }}
												<!--<input name="financial_investment_account" id="financial_investment_account" type="checkbox">--> 
												<span class="financial_accounts" style="border : {{ $errors->has('financial_accounts') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Investment Accounts
										</label>
									</div>
									<div class="checkbox">
										<label for="financial_account_other" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('financial_accounts[]', 'Other', @$financialFour, ['id' => 'financial_account_other', 'class' => 'financial_accounts']) }}
												<!--<input name="financial_account_other" id="financial_account_other" type="checkbox">-->
												<span class="financial_accounts" style="border : {{ $errors->has('financial_accounts') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Other
										</label>
									</div>
								</div>
								<div class="col-md-4 col-lg-4 col-xs-12 col-sm-4">
									<h6>Insurance</h6>
									
									@php @$insuranceFirst = false; @$insuranceSecond = false; @$insuranceThird = false; @$insuranceFour = false; @endphp
									@foreach (explode(',', @$userDetail->insurance) as $page)
										@if($page == 'Life Insurance')
											@php @$insuranceFirst = true; @endphp
										@endif
										@if($page == 'Disability Insurance')
											@php @$insuranceSecond = true; @endphp
										@endif
										@if($page == 'Long-Term Care')
											@php @$insuranceThird = true; @endphp
										@endif
										@if($page == 'Health Insurance')
											@php @$insuranceFour = true; @endphp
										@endif
									@endforeach
								
									<div class="checkbox">
										<label for="insurance_life_insurance" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('insurance[]', 'Life Insurance', @$insuranceFirst, ['id' => 'insurance_life_insurance', 'class' => 'insurance']) }}
												<!--<input name="insurance_life_insurance" id="insurance_life_insurance" type="checkbox">-->
												<span class="insurance" style="border : {{ $errors->has('insurance') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Life Insurance
										</label>
									</div>
									<div class="checkbox">
										<label for="insurance_disability_insurance" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('insurance[]', 'Disability Insurance', @$insuranceSecond, ['id' => 'insurance_disability_insurance', 'class' => 'insurance']) }}
												<!--<input name="insurance_disability_insurance" id="insurance_disability_insurance" type="checkbox">-->
												<span class="insurance" style="border : {{ $errors->has('insurance') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Disability Insurance
										</label>
									</div>
									<div class="checkbox">
										<label for="insurance_long_term_care" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('insurance[]', 'Long-Term Care', @$insuranceThird, ['id' => 'insurance_long_term_care', 'class' => 'insurance']) }}
												<!--<input name="insurance_long_term_care" id="insurance_long_term_care" type="checkbox">-->
												<span class="insurance" style="border : {{ $errors->has('insurance') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Long-Term Care
										</label>
									</div>
									<div class="checkbox">
										<label for="insurance_health_insurance" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('insurance[]', 'Health Insurance', @$insuranceFour, ['id' => 'insurance_health_insurance', 'class' => 'insurance']) }}
												<!--<input name="insurance_health_insurance" id="insurance_health_insurance" type="checkbox">-->
												<span class="insurance" style="border : {{ $errors->has('insurance') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Health Insurance
										</label>
									</div>
								</div>
								<div class="col-md-4 col-lg-4 col-xs-12 col-sm-4">
									<h6>Estate Planning</h6>
									
									@php @$estateFirst = false; @$estateSecond = false; @$estateThird = false; @$estateFour = false; @endphp
									@foreach (explode(',', @$userDetail->estate_planning) as $page)
										@if($page == 'Will')
											@php @$estateFirst = true; @endphp
										@endif
										@if($page == 'Trust')
											@php @$estateSecond = true; @endphp
										@endif
										@if($page == 'Power of Attorney')
											@php @$estateThird = true; @endphp
										@endif
										@if($page == 'Advance Directive')
											@php @$estateFour = true; @endphp
										@endif
									@endforeach
								
									<div class="checkbox">
										<label for="estate_will" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('estate_planning[]', 'Will', @$estateFirst, ['id' => 'estate_will', 'class'=>'estate_planning']) }}
												<!--<input name="estate_will" id="estate_will" type="checkbox">-->
												<span class="estate_planning" style="border : {{ $errors->has('estate_planning') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Will
										</label>
									</div>
									<div class="checkbox">
										<label for="estate_trust" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('estate_planning[]', 'Trust', @$estateSecond, ['id' => 'estate_trust', 'class'=>'estate_planning']) }}
												<!--<input name="estate_trust" id="estate_trust" type="checkbox">-->
												<span class="estate_planning" style="border : {{ $errors->has('estate_planning') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Trust
										</label>
									</div>
									<div class="checkbox">
										<label for="estate_power_of_attorney" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('estate_planning[]', 'Power of Attorney', @$estateThird, ['id' => 'estate_power_of_attorney', 'class'=>'estate_planning']) }}
												<!--<input name="estate_power_of_attorney" id="estate_power_of_attorney" type="checkbox">-->
												<span class="estate_planning" style="border : {{ $errors->has('estate_planning') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Power of Attorney
										</label>
									</div>
									<div class="checkbox">
										<label for="estate_advance_directive" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('estate_planning[]', 'Advance Directive', @$estateFour, ['id' => 'estate_advance_directive', 'class'=>'estate_planning']) }}
												<!--<input name="estate_advance_directive" id="estate_advance_directive" type="checkbox">-->
												<span class="estate_planning" style="border : {{ $errors->has('estate_planning') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Advance Directive
										</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-lg-4 col-xs-12 col-sm-4">
									<h6>Assets (things you own)</h6>
									
									@php @$assetsFirst = false; @$assetsSecond = false; @$assetsThird = false; @$assetsFour = false; @$assetsFive = false; @endphp
									@foreach (explode(',', @$userDetail->assets) as $page)
										@if($page == 'Vehicles')
											@php @$assetsFirst = true; @endphp
										@endif
										@if($page == 'Artwork & Collectables')
											@php @$assetsSecond = true; @endphp
										@endif
										@if($page == 'Real Estate')
											@php @$assetsThird = true; @endphp
										@endif
										@if($page == 'Jewelry & Purses')
											@php @$assetsFour = true; @endphp
										@endif
										@if($page == 'Other')
											@php @$assetsFive = true; @endphp
										@endif
									@endforeach
								
									<div class="checkbox">
										<label for="assets_vehicles" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('assets[]', 'Vehicles', @$assetsFirst, ['id' => 'assets_vehicles', 'class'=>'assets']) }}
												<!--<input name="assets_vehicles" id="assets_vehicles" type="checkbox">-->
												<span class="assets" style="border : {{ $errors->has('assets') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Vehicles
										</label>
									</div>
									<div class="checkbox">
										<label for="assets_artwork_collectable" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('assets[]', 'Artwork & Collectables', @$assetsSecond, ['id' => 'assets_artwork_collectable', 'class'=>'assets']) }}
												<!--<input name="assets_artwork_collectable" id="assets_artwork_collectable" type="checkbox">-->
												<span class="assets" style="border : {{ $errors->has('assets') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Artwork, Collectables
										</label>
									</div>
									<div class="checkbox">
										<label for="assets_real_estate" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('assets[]', 'Real Estate', @$assetsThird, ['id' => 'assets_real_estate', 'class'=>'assets']) }}
												<!--<input name="assets_real_estate" id="assets_real_estate" type="checkbox">-->
												<span class="assets" style="border : {{ $errors->has('assets') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Real Estate
										</label>
									</div>
									<div class="checkbox">
										<label for="assets_jewelry_purse" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('assets[]', 'Jewelry & Purses', @$assetsFour, ['id' => 'assets_jewelry_purse', 'class'=>'assets']) }}
												<!--<input name="assets_jewelry_purse" id="assets_jewelry_purse" type="checkbox">-->
												<span class="assets" style="border : {{ $errors->has('assets') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Jewelry, Purses, etc.
										</label>
									</div>
									<div class="checkbox">
										<label for="assets_other" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('assets[]', 'Other', @$assetsFive, ['id' => 'assets_other', 'class'=>'assets']) }}
												<!--<input name="assets_other" id="assets_other" type="checkbox">-->
												<span class="assets" style="border : {{ $errors->has('assets') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Other
										</label>
									</div>
								</div>
								<div class="col-md-4 col-lg-4 col-xs-12 col-sm-4">
									<h6>Digital Life</h6>
									
									@php @$digitalFirst = false; @$digitalSecond = false; @$digitalThird = false; @$digitalFour = false; @endphp
									@foreach (explode(',', @$userDetail->digital_life) as $page)
										@if($page == 'Instagram')
											@php @$digitalFirst = true; @endphp
										@endif
										@if($page == 'Twitter')
											@php @$digitalSecond = true; @endphp
										@endif
										@if($page == 'Facebook')
											@php @$digitalThird = true; @endphp
										@endif
										@if($page == 'Other')
											@php @$digitalFour = true; @endphp
										@endif
									@endforeach
								
									<div class="checkbox">
										<label for="digital_instagram" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('digital_life[]', 'Instagram', @$digitalFirst, ['id' => 'digital_instagram', 'class'=>'digital_life']) }}
												<!--<input name="digital_instagram" id="digital_instagram" type="checkbox">-->
												<span class="digital_life" style="border : {{ $errors->has('digital_life') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Instagram
										</label>
									</div>
									<div class="checkbox">
										<label for="digital_twitter" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('digital_life[]', 'Twitter', @$digitalSecond, ['id' => 'digital_twitter', 'class'=>'digital_life']) }}
												<!--<input name="digital_twitter" id="digital_twitter" type="checkbox">-->
												<span class="digital_life" style="border : {{ $errors->has('digital_life') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Twitter
										</label>
									</div>
									<div class="checkbox">
										<label for="digital_facebook" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('digital_life[]', 'Facebook', @$digitalThird, ['id' => 'digital_facebook', 'class'=>'digital_life']) }}
												<!--<input name="digital_facebook" id="digital_facebook" type="checkbox">-->
												<span class="digital_life" style="border : {{ $errors->has('digital_life') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Facebook
										</label>
									</div>
									<div class="checkbox">
										<label for="digital_other" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('digital_life[]', 'Other', @$digitalFour, ['id' => 'digital_other', 'class'=>'digital_life']) }}
												<!--<input name="digital_other" id="digital_other" type="checkbox">-->
												<span class="digital_life" style="border : {{ $errors->has('digital_life') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Other
										</label>
									</div>
								</div>
								<div class="col-md-4 col-lg-4 col-xs-12 col-sm-4">
									<h6>Legacy Plan</h6>
									
									@php @$legacyFirst = false; @$legacySecond = false; @endphp
									@foreach (explode(',', @$userDetail->legacy_plan) as $page)
										@if($page == 'Funeral Wishes')
											@php @$legacyFirst = true; @endphp
										@endif
										@if($page == 'Letters to Family & Friends')
											@php @$legacySecond = true; @endphp
										@endif
									@endforeach
								
									<div class="checkbox">
										<label for="legacy_funeral_wishes" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('legacy_plan[]', 'Funeral Wishes', @$legacyFirst, ['id' => 'legacy_funeral_wishes', 'class'=>'legacy_plan']) }}
												<!--<input name="legacy_funeral_wishes" id="legacy_funeral_wishes" type="checkbox">-->
												<span class="legacy_plan" style="border : {{ $errors->has('legacy_plan') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Funeral Wishes
										</label>
									</div>
									<div class="checkbox">
										<label for="legacy_letters_family_friends" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('legacy_plan[]', 'Letters to Family & Friends', @$legacySecond, ['id' => 'legacy_letters_family_friends', 'class'=>'legacy_plan']) }}
												<!--<input name="legacy_letters_family_friends" id="legacy_letters_family_friends" type="checkbox">-->
												<span class="legacy_plan" style="border : {{ $errors->has('legacy_plan') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Letters to Family &amp; Friends
										</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-lg-4 col-xs-12 col-sm-4">
									<h6>Loans (money you owe)</h6>
									
									@php @$loansFirst = false; @$dloansSecond = false; @$loansThird = false; @endphp
									@foreach (explode(',', @$userDetail->loans) as $page)
										@if($page == 'Mortgage Loans')
											@php @$loansFirst = true; @endphp
										@endif
										@if($page == 'Personal Loans')
											@php @$dloansSecond = true; @endphp
										@endif
										@if($page == 'Business Loans')
											@php @$loansThird = true; @endphp
										@endif
									@endforeach
								
									<div class="checkbox">
										<label for="loans_mortgage_loans" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('loans[]', 'Mortgage Loans', @$loansFirst, ['id' => 'loans_mortgage_loans', 'class'=>'loans']) }}
												<!--<input name="loans_mortgage_loans" id="loans_mortgage_loans" type="checkbox">-->
												<span class="loans" style="border : {{ $errors->has('loans') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Mortgage Loans
										</label>
									</div>
									<div class="checkbox">
										<label for="loans_personal_loans" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('loans[]', 'Personal Loans', @$dloansSecond, ['id' => 'loans_personal_loans', 'class'=>'loans']) }}
												<!--<input name="loans_personal_loans" id="loans_personal_loans" type="checkbox">-->
												<span class="loans" style="border : {{ $errors->has('loans') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Personal Loans
										</label>
									</div>
									<div class="checkbox">
										<label for="loans_business_loans" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('loans[]', 'Business Loans', @$loansThird, ['id' => 'loans_business_loans', 'class'=>'loans']) }}
												<!--<input name="loans_business_loans" id="loans_business_loans" type="checkbox">-->
												<span class="loans" style="border : {{ $errors->has('loans') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Business Loans
										</label>
									</div>
								</div>
								<div class="col-md-4 col-lg-4 col-xs-12 col-sm-4">
									<h6>Dependents</h6>
									
									@php @$dependentsFirst = false; @$dependentsSecond = false; @$dependentsThird = false; @endphp
									@foreach (explode(',', @$userDetail->dependents) as $page)
										@if($page == 'Children')
											@php @$dependentsFirst = true; @endphp
										@endif
										@if($page == 'Pets')
											@php @$dependentsSecond = true; @endphp
										@endif
										@if($page == 'Other')
											@php @$dependentsThird = true; @endphp
										@endif
									@endforeach
								
									<div class="checkbox">
										<label for="dependents_children" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('dependents[]', 'Children', @$dependentsFirst, ['id' => 'dependents_children', 'class'=>'dependents']) }}
												<!--<input name="dependents_children" id="dependents_children" type="checkbox">-->
												<span class="dependents" style="border : {{ $errors->has('dependents') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Children
										</label>
									</div>
									<div class="checkbox">
										<label for="dependents_pets" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('dependents[]', 'Pets', @$dependentsSecond, ['id' => 'dependents_pets', 'class'=>'dependents']) }}
												<!--<input name="dependents_pets" id="dependents_pets" type="checkbox">-->
												<span class="dependents" style="border : {{ $errors->has('dependents') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Pets
										</label>
									</div>
									<div class="checkbox">
										<label for="dependents_other" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('dependents[]', 'Other', @$dependentsThird, ['id' => 'dependents_other', 'class'=>'dependents']) }}
												<!--<input name="dependents_other" id="dependents_other" type="checkbox">-->
												<span class="dependents" style="border : {{ $errors->has('dependents') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Other
										</label>
									</div>
								</div>
								<div class="col-md-4 col-lg-4 col-xs-12 col-sm-4">
									<h6>Eldercare</h6>
									@php @$eldercare = false; @endphp
									@if(@$userDetail->eldercare == 'Eldercare plan')
										@php @$eldercare = true; @endphp
									@endif
									<div class="checkbox">
										<label for="dependents_eldercare_plan" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('eldercare', 'Eldercare plan', @$eldercare, ['id' => 'dependents_eldercare_plan', 'class'=>'eldercare']) }}
												<!--<input name="dependents_eldercare_plan" id="dependents_eldercare_plan" type="checkbox">-->
												<span class="eldercare" style="border : {{ $errors->has('eldercare') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Eldercare plan
										</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-lg-4 col-xs-12 col-sm-4">
									<h6>Taxes &amp; Credit</h6>
									
									@php @$taxesFirst = false; @$taxesSecond = false; @endphp
									@foreach (explode(',', @$userDetail->taxes_credit) as $page)
										@if($page == 'Tax Returns')
											@php @$taxesFirst = true; @endphp
										@endif
										@if($page == 'Credit Reports')
											@php @$taxesSecond = true; @endphp
										@endif
									@endforeach
								
									<div class="checkbox">
										<label for="taxes_credit_tax_returns" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('taxes_credit[]', 'Tax Returns', @$taxesFirst, ['id' => 'taxes_credit_tax_returns', 'class'=>'taxes_credit']) }}
												<!--<input name="taxes_credit_tax_returns" id="taxes_credit_tax_returns" type="checkbox">-->
												<span class="taxes_credit" style="border : {{ $errors->has('taxes_credit') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Tax Returns
										</label>
									</div>
									<div class="checkbox">
										<label for="taxes_credit_credit_reports" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('taxes_credit[]', 'Credit Reports', @$taxesSecond, ['id' => 'taxes_credit_credit_reports', 'class'=>'taxes_credit']) }}
												<!--<input name="taxes_credit_credit_reports" id="taxes_credit_credit_reports" type="checkbox">-->
												<span class="taxes_credit" style="border : {{ $errors->has('taxes_credit') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Credit Reports
										</label>
									</div>
								</div>
								<div class="col-md-4 col-lg-4 col-xs-12 col-sm-4">
									<h6>Charity &amp; Giving</h6>
									@php @$charity_giving = false; @endphp
									@if(@$userDetail->charity_giving == 'Current Giving')
										@php @$charity_giving = true; @endphp
									@endif
									<div class="checkbox">
										<label for="charity_giving_current_giving" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('charity_giving', 'Current Giving', @$charity_giving, ['id' => 'charity_giving_current_giving', 'class'=>'charity_giving']) }}
												<!--<input name="charity_giving_current_giving" id="charity_giving_current_giving" type="checkbox">-->
												<span class="charity_giving" style="border : {{ $errors->has('charity_giving') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Current Giving
										</label>
									</div>
								</div>
								<div class="col-md-4 col-lg-4 col-xs-12 col-sm-4">
									<h6>Personal</h6>
									
									@php @$personalFirst = false; @$personalSecond = false; @$personalThird = false; @endphp
									@foreach (explode(',', @$userDetail->personal) as $page)
										@if($page == 'Birth Certificates')
											@php @$personalFirst = true; @endphp
										@endif
										@if($page == 'Marriage License')
											@php @$personalSecond = true; @endphp
										@endif
										@if($page == 'Other')
											@php @$personalThird = true; @endphp
										@endif
									@endforeach
								
									<div class="checkbox">
										<label for="personal_birth_certificates" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('personal[]', 'Birth Certificates', @$personalFirst, ['id' => 'personal_birth_certificates', 'class'=>'personal']) }}
												<!--<input name="personal_birth_certificates" id="personal_birth_certificates" type="checkbox">-->
												<span class="personal" style="border : {{ $errors->has('personal') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Birth Certificates
										</label>
									</div>
									<div class="checkbox">
										<label for="personal_marriage_license" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('personal[]', 'Marriage License', @$personalSecond, ['id' => 'personal_marriage_license', 'class'=>'personal']) }}
												<!--<input name="personal_marriage_license" id="personal_marriage_license" type="checkbox">-->
												<span class="personal" style="border : {{ $errors->has('personal') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Marriage License
										</label>
									</div>
									<div class="checkbox">
										<label for="personal_other" class="lbl-checkbox" tabindex="0">
											<div class="checkbox-btn">
												{{ Form::checkbox('personal[]', 'Other', @$personalThird, ['id' => 'personal_other', 'class'=>'personal']) }}
												<!--<input name="personal_other" id="personal_other" type="checkbox">-->
												<span class="personal" style="border : {{ $errors->has('personal') ? '1px solid #a94442' : '' }}"></span> 
											</div>
											Other
										</label>
									</div>
								</div>
							</div>
							<div class="btn-row">
								<!--<button class="btn" type="button">Back</button>
								<button class="btn btn-primary" type="button">Continue</button>-->
								<a href="{{ url('/home/step10') }}" class="btn">Back</a>
								{!! Form::button('Continue', ['type' => 'button', 'class' => 'btn btn-primary', 'onClick' => 'elevenSteps();']) !!}
							</div>
						</div>
					</div>
				</div>
			{!! Form::close() !!}
        </div>
    </div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">
	 $(document).ready(function(){
        $('#select_all').click(function() {
			var checked = $(this).prop('checked');
			$('div#checkBoxes').find('input:checkbox').prop('checked', checked);
			/*var allVals = [];
			$('.supplierCheckbox:checked').each(function () {
				allVals.push($(this).val());
			});*/
		});
    });

	function elevenSteps(){
		var valid;	
		valid = validateForm();
		if(valid) {
			$('form#addStep11').submit();
		}
	}
	
	function validateForm(){
		var valid 						= true;	
		var sharing_information 		= $("input[name='sharing_information']:checked").prop("checked");
		var sharing_information_val 	= $("input[name='sharing_information']:checked").val();
		
		var information_first_name 		= $("#information_first_name").val();
		var information_last_name 		= $("#information_last_name").val();
		
		var financial_accounts 			= $("input[name='financial_accounts[]']:checked").prop("checked");
		var insurance 					= $("input[name='insurance[]']:checked").prop("checked");
		var estate_planning 			= $("input[name='estate_planning[]']:checked").prop("checked");
		var assets 						= $("input[name='assets[]']:checked").prop("checked");
		var digital_life 				= $("input[name='digital_life[]']:checked").prop("checked");
		var legacy_plan 				= $("input[name='legacy_plan[]']:checked").prop("checked");
		var loans 						= $("input[name='loans[]']:checked").prop("checked");
		var dependents 					= $("input[name='dependents[]']:checked").prop("checked");
		var eldercare 					= $("input[name='eldercare']:checked").prop("checked");
		var taxes_credit 				= $("input[name='taxes_credit[]']:checked").prop("checked");
		var charity_giving 				= $("input[name='charity_giving']:checked").prop("checked");
		var personal 					= $("input[name='personal[]']:checked").prop("checked");
		
		var inputVal = new Array(sharing_information, sharing_information_val, information_first_name, information_last_name, financial_accounts, insurance, estate_planning, assets, digital_life, legacy_plan, loans, dependents, eldercare, taxes_credit, charity_giving, personal);
		
		if(inputVal[0] == "" || inputVal[0] == undefined){
			$('.sharing_information').css('border', '1px solid #A94442');
			$('.sharing_information').parent().css('color', '#A94442');
			valid = false;
		}else{
			$('.sharing_information').css('border', '1px solid green');
			$('.sharing_information').parent().css('color', 'green');
		}
		if(inputVal[1] == "spouse"){
			
			if(inputVal[2] == "" || inputVal[2] == undefined){
				$('.sharing_information').css('border', '1px solid #A94442');
				$('.sharing_information').parent().css('color', '#A94442');
				$('#information_first_name').css('border', '1px solid #A94442');
				$('#information_first_name').parent().css('color', '#A94442');
				valid = false;
			}else{
				$('.sharing_information').css('border', '1px solid green');
				$('.sharing_information').parent().css('color', 'green');
				$('#information_first_name').css('border', '1px solid green');
				$('#information_first_name').parent().css('color', 'green');
			}
			if(inputVal[3] == "" || inputVal[3] == undefined){
				$('.sharing_information').css('border', '1px solid #A94442');
				$('.sharing_information').parent().css('color', '#A94442');
				$('#information_last_name').css('border', '1px solid #A94442');
				$('#information_last_name').parent().css('color', '#A94442');
				valid = false;
			}else{
				$('.sharing_information').css('border', '1px solid green');
				$('.sharing_information').parent().css('color', 'green');
				$('#information_last_name').css('border', '1px solid green');
				$('#information_last_name').parent().css('color', 'green');
			}
		}
		if(inputVal[4] == "" || inputVal[4] == undefined){
			$('.financial_accounts').css('border', '1px solid #A94442');
			$('.financial_accounts').parent().css('color', '#A94442');
			valid = false;
		}else{
			$('.financial_accounts').css('border', '1px solid green');
			$('.financial_accounts').parent().css('color', 'green');
		}
		if(inputVal[5] == "" || inputVal[5] == undefined){
			$('.insurance').css('border', '1px solid #A94442');
			$('.insurance').parent().css('color', '#A94442');
			valid = false;
		}else{
			$('.insurance').css('border', '1px solid green');
			$('.insurance').parent().css('color', 'green');
		}
		if(inputVal[6] == "" || inputVal[6] == undefined){
			$('.estate_planning').css('border', '1px solid #A94442');
			$('.estate_planning').parent().css('color', '#A94442');
			valid = false;
		}else{
			$('.estate_planning').css('border', '1px solid green');
			$('.estate_planning').parent().css('color', 'green');
		}
		if(inputVal[7] == "" || inputVal[7] == undefined){
			$('.assets').css('border', '1px solid #A94442');
			$('.assets').parent().css('color', '#A94442');
			valid = false;
		}else{
			$('.assets').css('border', '1px solid green');
			$('.assets').parent().css('color', 'green');
		}
		if(inputVal[8] == "" || inputVal[8] == undefined){
			$('.digital_life').css('border', '1px solid #A94442');
			$('.digital_life').parent().css('color', '#A94442');
			valid = false;
		}else{
			$('.digital_life').css('border', '1px solid green');
			$('.digital_life').parent().css('color', 'green');
		}
		if(inputVal[9] == "" || inputVal[9] == undefined){
			$('.legacy_plan').css('border', '1px solid #A94442');
			$('.legacy_plan').parent().css('color', '#A94442');
			valid = false;
		}else{
			$('.legacy_plan').css('border', '1px solid green');
			$('.legacy_plan').parent().css('color', 'green');
		}
		if(inputVal[10] == "" || inputVal[10] == undefined){
			$('.loans').css('border', '1px solid #A94442');
			$('.loans').parent().css('color', '#A94442');
			valid = false;
		}else{
			$('.loans').css('border', '1px solid green');
			$('.loans').parent().css('color', 'green');
		}
		if(inputVal[11] == "" || inputVal[11] == undefined){
			$('.dependents').css('border', '1px solid #A94442');
			$('.dependents').parent().css('color', '#A94442');
			valid = false;
		}else{
			$('.dependents').css('border', '1px solid green');
			$('.dependents').parent().css('color', 'green');
		}
		if(inputVal[12] == "" || inputVal[12] == undefined){
			$('.eldercare').css('border', '1px solid #A94442');
			$('.eldercare').parent().css('color', '#A94442');
			valid = false;
		}else{
			$('.eldercare').css('border', '1px solid green');
			$('.eldercare').parent().css('color', 'green');
		}
		if(inputVal[13] == "" || inputVal[13] == undefined){
			$('.taxes_credit').css('border', '1px solid #A94442');
			$('.taxes_credit').parent().css('color', '#A94442');
			valid = false;
		}else{
			$('.taxes_credit').css('border', '1px solid green');
			$('.taxes_credit').parent().css('color', 'green');
		}
		if(inputVal[14] == "" || inputVal[14] == undefined){
			$('.charity_giving').css('border', '1px solid #A94442');
			$('.charity_giving').parent().css('color', '#A94442');
			valid = false;
		}else{
			$('.charity_giving').css('border', '1px solid green');
			$('.charity_giving').parent().css('color', 'green');
		}
		if(inputVal[15] == "" || inputVal[15] == undefined){
			$('.personal').css('border', '1px solid #A94442');
			$('.personal').parent().css('color', '#A94442');
			valid = false;
		}else{
			$('.personal').css('border', '1px solid green');
			$('.personal').parent().css('color', 'green');
		}
		
		return valid;
	}
</script>

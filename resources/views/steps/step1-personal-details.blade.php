@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box-questionnaire-container">
            <div class="step-progress">
            	<div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:10%">
                  <span class="sr-only">10% Complete</span>
                </div>
              </div>
            </div>  
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="sub-header">
                        <h5>Step 01: Verify Identity</h5>
                        <h2>Personal Details</h2>
                        <p>Please tell us little bit about yourself so that we can make your experience with PlanSecurely more personalized and meaningful.</p>
                    </div>
					
					{!! Form::open(['url' => '/home/addStep1', 'enctype' => 'multipart/form-data', 'class' => 'style-form', 'role' => 'form', 'method' => 'POST'] ) !!}
					
						{{ csrf_field() }}
						
						<div class="form-details">
							<div class="row">
								<div class="col-md-8 col-lg-8 col-xs-12 col-sm-8">
									<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
										<label>First name</label>
										<!--<input type="text" class="form-control" id="name" title="First name">-->
										{!! Form::text('first_name', @$userDetail->first_name, ['class' => 'form-control', 'id' => 'first_name', 'title' => 'First name']) !!}
									</div>
								</div>
								<div class="col-md-4 col-lg-4 col-xs-12 col-sm-4">
									<div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
										<label>Middle Name</label>
										<!--<input type="text" class="form-control" id="name" title="Middle name">-->
										{!! Form::text('middle_name', @$userDetail->middle_name, ['class' => 'form-control', 'id' => 'middle_name', 'title' => 'Middle name']) !!}
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
									<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
										<label>Last Name</label>
										<!--<input type="text" class="form-control" id="date" title="Last Name">-->
										{!! Form::text('last_name', @$userDetail->last_name, ['class' => 'form-control', 'id' => 'last_name', 'title' => 'Last name']) !!}
									</div>
								</div>
							</div>
							<div class="row b-m-15">
								<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
									<div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
										<label>Date of Birth</label>
										<div class="row">
											<div class="col-md-6 col-lg-5 col-xs-12 col-sm-12">
												<div class="box-datetimepicker">
													<!--<input class="form-control input-date" id="datetimepicker1" placeholder="yyyy/mm/dd" type="text"/>-->
													{!! Form::text('date_of_birth', @$userDetail->date_of_birth, ['class' => 'form-control input-date', 'id' => 'datetimepicker1', 'placeholder' => 'yyyy/mm/dd', 'title' => 'yyyy/mm/dd']) !!}
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
									<div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
										<label>Gender</label>
										<div class="radio-btn-row full-btn">
											@php @$maleTrue = false; @endphp
											@if(@$userDetail->gender == 'male')
												@php @$maleTrue = true; @endphp
											@endif
											@php @$femaleTrue = false; @endphp
											@if(@$userDetail->gender == 'female')
												@php @$femaleTrue = true; @endphp
											@endif
											<!--<input type="radio" id="radio01" name="radio"/>-->
											{{ Form::radio('gender', 'male', @$maleTrue, ['id' => 'male']) }}
											<label for="male"><span style="border : {{ $errors->has('gender') ? '1px solid #a94442' : '' }}"></span>Male</label>
											<!--<input type="radio" id="radio02" name="radio" checked />-->
											{{ Form::radio('gender', 'female', @$femaleTrue, ['id' => 'female']) }}
											<label for="female"><span style="border : {{ $errors->has('gender') ? '1px solid #a94442' : '' }}"></span>Female</label>
										</div>
									</div>
								</div>
							</div>
							<div class="btn-row">
								<!--<a href="{{ url('/home/step2') }}" class="btn btn-primary">Continue</a>
								<button class="btn btn-primary" type="submit">Continue</button>-->
								{!! Form::button('Continue', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
							</div>
						</div>
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
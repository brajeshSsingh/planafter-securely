@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box-questionnaire-container">
            <div class="step-progress">
            	<div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:20%">
                  <span class="sr-only">20% Complete</span>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-7">
                   <div class="sub-header">     
                        <h5>Step 02: Describe your reasons</h5>
                        <h2>Reason for Using Platform</h2>
                        <p>What best describes your reason for utilizing our platform to organize your life documents?</p>
                    </div>  
					
					{!! Form::open(['url' => '/home/addStep2', 'enctype' => 'multipart/form-data', 'class' => 'style-form', 'role' => 'form', 'method' => 'POST'] ) !!}
					
						{{ csrf_field() }}
						
						<div class="form-details">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group{{ $errors->has('answer') ? ' has-error' : '' }}">
										<label>Choose an answer</label>
										<div class="hidden-xs">
											<!--<select class="selectpicker" title="" name="answer" id="answer">
												<option value="">Please Select</option>
												<option value="1">I need to get organised</option>
												<option value="2">I'm not sure yet</option>
												<option value="3">i'm a caregiver</option>
												<option value="4">I have an illness</option>
												<option value="5">im taking a trip</option>
												<option value="6">I recently attended a funeral</option>
												<option value="7">Someone close to me just died</option>
											</select>-->
											{{ Form::select('answer', ['' => 'Please Select', '1' => 'I need to get organized', '2' => 'Im not sure yet', '3' => 'Im a caregiver', '4' => 'I have an illness', '5' => 'Im taking a trip', '6' => 'I recently attended a funeral', '7' => 'Someone close to me just died', '8' => 'Im a newlywed', '9' => 'Im about to have surgery', '10' => 'Im preparing to move into an eldercare facility', '11' => 'I was referred by my Finacial planner', '12' => 'I was referred by my life insurance Agent', '13' => 'I have children who depend on me'], (@$userDetail->answer), ['class' => 'selectpicker', 'id' => 'answer', 'title' => 'Choose an answer']) }}
										</div>
										<div class="visible-xs">
											<!--<select class="form-control">
												<option value=""></option>
												<option value="1">I need to get organised</option>
												<option value="2">I'm not sure yet</option>
												<option value="3">i'm a caregiver</option>
												<option value="4">I have an illness</option>
												<option value="5">im taking a trip</option>
												<option value="6">I recently attended a funeral</option>
												<option value="7">Someone close to me just died</option>
											</select>-->
											{{ Form::select('', ['1' => 'I need to get organized', '2' => 'Im not sure yet', '3' => 'Im a caregiver', '4' => 'I have an illness', '5' => 'Im taking a trip', '6' => 'I recently attended a funeral', '7' => 'Someone close to me just died', '8' => 'Im a newlywed', '9' => 'Im about to have surgery', '10' => 'Im preparing to move into an eldercare facility', '11' => 'I was referred by my Finacial planner', '12' => 'I was referred by my life insurance Agent', '13' => 'I have children who depend on me'], (@$userDetail->answer), ['class' => 'form-control', 'title' => 'Choose an answer']) }}
										</div>
									</div>
								</div>
							</div>
							<div class="btn-row">
								<!--<button class="btn" type="button">Back</button>
								<!--<button class="btn" type="button">Continue</button>-->
								<a href="{{ url('/') }}" class="btn">Back</a>
								{!! Form::button('Continue', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
							</div>
						</div>
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
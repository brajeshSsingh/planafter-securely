@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box-questionnaire-container">
        	<div class="step-progress">
            	<div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                  <span class="sr-only">40% Complete</span>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-7">
                    <div class="sub-header">
                        <h5>Step 04: Health Care Planning</h5>
                        <h2>Health Care Planning</h2>
                        <p>Have you completed any of the following relating to your health care planning?</p>
                    </div>
					
					{!! Form::open(['url' => '/home/addStep4', 'enctype' => 'multipart/form-data', 'class' => 'style-form', 'role' => 'form', 'method' => 'POST'] ) !!}
					
						{{ csrf_field() }}
						
						<div class="form-details">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group{{ $errors->has('health_care_planning') ? ' has-error' : '' }}">
										<label>Select all that apply</label>
										<!--<select class="selectpicker" multiple title="">
											<option>I have a health insurance policy</option>
											<option>I am on medi-care / medi-cal</option>
											<option>I have an advance directive</option>
										</select>-->
										@php $first = ''; $second = ''; $third = ''; @endphp
										@foreach (explode(',', @$userDetail->health_care_planning) as $page)
											@if($page == 1)
												@php $first = $page; @endphp
											@endif
											@if($page == 2)
												@php $second = $page; @endphp
											@endif
											@if($page == 3)
												@php $third = $page; @endphp
											@endif
										@endforeach
										
										{{ Form::select('health_care_planning[]', ['1' => 'I have a health insurance policy', '2' => 'I am on medi-care / medi-cal', '3' => 'I have an advance directive'], ([(int)$first,(int)$second,(int)$third]), ['class' => 'selectpicker', 'title' => 'Select all that apply', 'multiple' => true, 'id' => 'health_care_planning']) }}
									</div>
								</div>
							</div>
							<div class="btn-row">
								<!--<button class="btn" type="button">Back</button>
								<button class="btn btn-primary" type="button">Continue</button>-->
								<a href="{{ url('/home/step3') }}" class="btn">Back</a>
								{!! Form::button('Continue', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
							</div>
						</div>
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
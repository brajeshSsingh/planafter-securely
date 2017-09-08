@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box-questionnaire-container">
        	<div class="step-progress">
            	<div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                  <span class="sr-only">30% Complete</span>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-7">
                    <div class="sub-header">
                    	<h5>Step 03: Insurance Planning</h5>
                    	<h2>Insurance Planning</h2>
                    	<p>Have you completed any of the following relating to your insurance planning?</p>
                    </div>
					
					{!! Form::open(['url' => '/home/addStep3', 'enctype' => 'multipart/form-data', 'class' => 'style-form', 'role' => 'form', 'method' => 'POST'] ) !!}
					
						{{ csrf_field() }}
						
						<div class="form-details">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group{{ $errors->has('insurance_planning') ? ' has-error' : '' }}">
										<label>Select all that apply</label>
										<!--<select name="insurance_planning[]" id="insurance_planning" class="selectpicker" multiple title="Select all that apply">
											<option value="">Please Select</option>
											<option value="1">I have homeowners or renters insurance</option>
											<option value="2">I have a life insurance policy</option>
											<option value="3">I have a long-term care insurance policy</option>
											<option value="4">I have a disability income insurance policy</option>
										</select>-->
										@php $first = ''; $second = ''; $third = ''; $four = ''; @endphp
										@foreach (explode(',', @$userDetail->insurance_planning) as $page)
											@if($page == 1)
												@php $first = $page; @endphp
											@endif
											@if($page == 2)
												@php $second = $page; @endphp
											@endif
											@if($page == 3)
												@php $third = $page; @endphp
											@endif
											@if($page == 4)
												@php $four = $page; @endphp
											@endif
										@endforeach
										
										{{ Form::select('insurance_planning[]', ['1' => 'I have homeowners or renters insurance', '2' => 'I have a life insurance policy', '3' => 'I have a long-term care insurance policy', '4' => 'I have a disability income insurance policy'], ([(int)$first,(int)$second,(int)$third,(int)$four]), ['class' => 'selectpicker', 'title' => 'Select all that apply', 'multiple' => true, 'id' => 'insurance_planning']) }}
									</div>
								</div>
							</div>
							<div class="btn-row">
								<!--<button class="btn" type="button">Back</button>
								<button class="btn btn-primary" type="button">Continue</button>-->
								<a href="{{ url('/home/step2') }}" class="btn">Back</a>
								{!! Form::button('Continue', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
							</div>
						</div>
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
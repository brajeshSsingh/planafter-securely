@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box-questionnaire-container">
        	<div class="step-progress">
            	<div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                  <span class="sr-only">50% Complete</span>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-7">
                    <div class="sub-header">
                        <h5>Step 05: Financial Planning</h5>
                        <h2>Financial Planning</h2>
                        <p>Have you completed any of the following relating to your financial planning?</p>
                    </div>
					
					{!! Form::open(['url' => '/home/addStep5', 'enctype' => 'multipart/form-data', 'class' => 'style-form', 'role' => 'form', 'method' => 'POST', 'id' => 'addStep5'] ) !!}
					
						{{ csrf_field() }}
						
						<div class="form-details">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group{{ $errors->has('financial_planning') ? ' has-error' : '' }}">
										<label>Select all that apply</label>
										<!--<select class="selectpicker" multiple title=""> 
											<option>I have retirement accounts setup</option>
											<option>I don't have any retirement accounts nor savings accounts</option>
											<option>I have atleast 6 months worth of expenses in an emergency fund </option>
											<option>I have credit card debt that i can't handle </option>
										</select>-->
										@php $first = ''; $second = ''; $third = ''; $four = ''; @endphp
										@foreach (explode(',', @$userDetail->financial_planning) as $page)
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
										{{ Form::select('financial_planning[]', ['1' => 'I have retirement accounts setup', '2' => 'I donot have any retirement accounts nor savings accounts', '3' => 'I have atleast 6 months worth of expenses in an emergency fund', '4' => 'I have credit card debt that i canot handle'], ([(int)$first,(int)$second,(int)$third,(int)$four]), ['class' => 'selectpicker', 'title' => 'Select all that apply', 'multiple' => true, 'id' => 'financial_planning']) }}
									</div>
								</div>
							</div>
							<div class="btn-row">
								 <!--<button class="btn" type="button">Back</button>
								<button class="btn btn-primary" type="button">Continue</button>-->
								<a href="{{ url('/home/step4') }}" class="btn">Back</a>
								{!! Form::button('Continue', ['type' => 'button', 'class' => 'btn btn-primary', 'onClick' => 'fifthSteps();']) !!}
							</div>
						</div>
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">
	function fifthSteps(){
		var valid;	
		valid = validateForm();
		if(valid) {
			$('form#addStep5').submit();
		}
	}
	
	function validateForm(){
		var valid 				= true;	
		var financial_planning 	= $('#financial_planning').val();
		
		var inputVal = new Array(financial_planning);
		
		if(inputVal[0] == ""){
			$("button[data-id='financial_planning']").css('border', '1px solid #A94442');
			$("button[data-id='financial_planning']").parent().css('color', '#A94442');
			valid = false;
		}else{
			$("button[data-id='financial_planning']").css('border', '1px solid green');
			$("button[data-id='financial_planning']").parent().css('color', 'green');
		}
		
		return valid;
	}
</script>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box-questionnaire-container">
        	<div class="step-progress">
            	<div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:65%">
                  <span class="sr-only">65% Complete</span>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="sub-header">
                        <h5>Step 07: Future Planning</h5>
                        <h2>Future Planning</h2>
                        <p>Have you completed any of the following relating to your future planning?</p>
                    </div>    
					
					{!! Form::open(['url' => '/home/addStep7', 'enctype' => 'multipart/form-data', 'class' => 'style-form', 'role' => 'form', 'method' => 'POST', 'id' => 'addStep7'] ) !!}
					
						{{ csrf_field() }}
						
						<div class="form-details">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group{{ $errors->has('future_planning') ? ' has-error' : '' }}">
										<label>Select all that apply</label>
										<!--<select class="selectpicker" multiple title="">
											<option>know what eldercare living arrangements I would like</option>
											<option>I have family who is willing to help me as I age</option>
											<option>I don't think I will be able to afford any eldercare support nor do I have family</option>
											<option>I will likely need to downsize in the near future as I age</option>
										</select>-->
										@php $first = ''; $second = ''; $third = ''; $four = ''; @endphp
										@foreach (explode(',', @$userDetail->future_planning) as $page)
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
										{{ Form::select('future_planning[]', ['1' => 'know what eldercare living arrangements I would like', '2' => 'I have family who is willing to help me as I age', '3' => 'I donot think I will be able to afford any eldercare support nor do I have family', '4' => 'I will likely need to downsize in the near future as I age'], ([(int)$first,(int)$second,(int)$third,(int)$four]), ['class' => 'selectpicker', 'title' => 'Select all that apply', 'multiple' => true, 'id' => 'future_planning']) }}
									</div>
								</div>
							</div>
							<div class="btn-row">
								 <!--<button class="btn" type="button">Back</button>
								<button class="btn btn-primary" type="button">Continue</button>-->
								<a href="{{ url('/home/step6') }}" class="btn">Back</a>
								{!! Form::button('Continue', ['type' => 'button', 'class' => 'btn btn-primary', 'onClick' => 'seventhSteps();']) !!}
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
	function seventhSteps(){
		var valid;	
		valid = validateForm();
		if(valid) {
			$('form#addStep7').submit();
		}
	}
	
	function validateForm(){
		var valid 			= true;	
		var future_planning 	= $('#future_planning').val();
		
		var inputVal = new Array(future_planning);
		
		if(inputVal[0] == ""){
			$("button[data-id='future_planning']").css('border', '1px solid #A94442');
			$("button[data-id='future_planning']").parent().css('color', '#A94442');
			valid = false;
		}else{
			$("button[data-id='future_planning']").css('border', '1px solid green');
			$("button[data-id='future_planning']").parent().css('color', 'green');
		}
		
		return valid;
	}
</script>
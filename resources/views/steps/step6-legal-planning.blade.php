@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box-questionnaire-container">
        	<div class="step-progress">
            	<div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                  <span class="sr-only">60% Complete</span>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-7">
                    <div class="sub-header">
                        <h5>Step 06: Legal Planning</h5>
                        <h2>Legal Planning</h2>
                        <p>Have you completed any of the following relating to your legal planning?</p>
                    </div>
					
					{!! Form::open(['url' => '/home/addStep6', 'enctype' => 'multipart/form-data', 'class' => 'style-form', 'role' => 'form', 'method' => 'POST', 'id' => 'addStep6'] ) !!}
					
						{{ csrf_field() }}
						
						<div class="form-details">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group{{ $errors->has('legal_planning') ? ' has-error' : '' }}">
										<label>Select all that apply</label>
										<!--<select class="selectpicker" multiple title="">
											<option>I have a trust</option>
											<option>I have a Will</option>
											<option>I have a POA </option>
											<option>I have a health care directive</option>
										</select>-->
										@php $first = ''; $second = ''; $third = ''; $four = ''; @endphp
										@foreach (explode(',', @$userDetail->legal_planning) as $page)
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
										{{ Form::select('legal_planning[]', ['1' => 'I have a trust', '2' => 'I have a Will', '3' => 'I have a POA', '4' => 'I have a health care directive'], ([(int)$first,(int)$second,(int)$third,(int)$four]), ['class' => 'selectpicker', 'title' => 'Select all that apply', 'multiple' => true, 'id' => 'legal_planning']) }}
									</div>
								</div>
							</div>
							<div class="btn-row">
								 <!--<button class="btn" type="button">Back</button>
								<button class="btn btn-primary" type="button">Continue</button>-->
								<a href="{{ url('/home/step5') }}" class="btn">Back</a>
								{!! Form::button('Continue', ['type' => 'button', 'class' => 'btn btn-primary', 'onClick' => 'sixthSteps();']) !!}
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
	function sixthSteps(){
		var valid;	
		valid = validateForm();
		if(valid) {
			$('form#addStep6').submit();
		}
	}
	
	function validateForm(){
		var valid 			= true;	
		var legal_planning 	= $('#legal_planning').val();
		
		var inputVal = new Array(legal_planning);
		
		if(inputVal[0] == ""){
			$("button[data-id='legal_planning']").css('border', '1px solid #A94442');
			$("button[data-id='legal_planning']").parent().css('color', '#A94442');
			valid = false;
		}else{
			$("button[data-id='legal_planning']").css('border', '1px solid green');
			$("button[data-id='legal_planning']").parent().css('color', 'green');
		}
		
		return valid;
	}
</script>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box-questionnaire-container">
        	<div class="step-progress">
            	<div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                  <span class="sr-only">80% Complete</span>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-7">
                     <div class="sub-header">   
                        <h5>Step 09: Marital Status</h5>
                        <h2>Marital Status</h2>
                        <p>Do you have a spouse or life partner?</p>
                    </div>
					
					{!! Form::open(['url' => '/home/addStep9', 'enctype' => 'multipart/form-data', 'class' => 'style-form', 'role' => 'form', 'method' => 'POST', 'id' => 'addStep9'] ) !!}
					
						{{ csrf_field() }}
						
						<div class="form-details">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group{{ $errors->has('life_partner') ? ' has-error' : '' }}">
										<label>Please select</label>
										 <div class="hidden-xs">
											<!--<select class="selectpicker" title=" ">
												<option>I have a spouse or life partner</option>
												<option>I'm single</option>
											</select>-->
											{{ Form::select('life_partner', ['1' => 'I have a spouse or life partner', '2' => 'I`m single'], (@$userDetail->life_partner), ['class' => 'selectpicker', 'title' => 'Select all that apply', 'id' => 'life_partner']) }}
										</div>
										<div class="visible-xs">
											<!--<select class="form-control">
												<option></option>
												<option>I have a spouse or life partner</option>
												<option>I'm single</option>
											</select>-->
											{{ Form::select('', ['1' => 'I have a spouse or life partner', '2' => 'I`m single'], (@$userDetail->life_partner), ['class' => 'form-control']) }}
										</div>
									</div>
								</div>
							</div>
							<div class="btn-row">
								 <!--<button class="btn" type="button">Back</button>
								<button class="btn btn-primary" type="button">Continue</button>-->
								<a href="{{ url('/home/step8') }}" class="btn">Back</a>
								{!! Form::button('Continue', ['type' => 'button', 'class' => 'btn btn-primary', 'onClick' => 'nineSteps();']) !!}
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
	function nineSteps(){
		var valid;	
		valid = validateForm();
		if(valid) {
			$('form#addStep9').submit();
		}
	}
	
	function validateForm(){
		var valid 			= true;	
		var life_partner 	= $('#life_partner').val();
		
		var inputVal = new Array(life_partner);
		
		if(inputVal[0] == ""){
			$("button[data-id='life_partner']").css('border', '1px solid #A94442');
			$("button[data-id='life_partner']").parent().css('color', '#A94442');
			valid = false;
		}else{
			$("button[data-id='life_partner']").css('border', '1px solid green');
			$("button[data-id='life_partner']").parent().css('color', 'green');
		}
		
		return valid;
	}
</script>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box-questionnaire-container">
        	<div class="step-progress">
            	<div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                  <span class="sr-only">95% Complete</span>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="sub-header">
                        <h5>Invite Designated Representative</h5>
                        <h2>Invite Designated Representative</h2>
                        <p>Please add the email address of designated representative and invite.</p>
                    </div>
					
					{!! Form::open(['url' => '/home/addStep12', 'enctype' => 'multipart/form-data', 'class' => 'style-form', 'role' => 'form', 'method' => 'POST', 'id' => 'addStep12'] ) !!}
					
						{{ csrf_field() }}
						
						<div class="form-details row-spacing">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group{{ $errors->has('email_address') ? ' has-error' : '' }}">
										<label>Howard's email address</label>
										<!--<input type="text" class="form-control">-->
										{!! Form::text('email_address', @$userDetail->email_address , ['class' => 'form-control', 'id' => 'email_address', 'title' => 'Howard`s email address']) !!}
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group{{ $errors->has('personal_message') ? ' has-error' : '' }}">
										<p>Add a personal message to Howard in the invite we send.</p>
										<!--<textarea class="form-control f18" placeholder="Example: I've been wanting to share this information with you fora while, please accept this invite."></textarea>-->
										{!! Form::textarea('personal_message', @$userDetail->personal_message, ['class' => 'form-control', 'placeholder' => 'Example: I`ve been wanting to share this information with you for a while, please accept this invite.', 'id' => 'personal_message']) !!}
									</div>
								</div>
							</div>
							<div class="btn-row">
								<!--<button class="btn" type="button">Back</button>
								<button class="btn btn-primary" type="button">Invite and Finish</button>-->
								<a href="{{ url('/home/step11') }}" class="btn">Back</a>
								{!! Form::button('Invite and Finish', ['type' => 'button', 'class' => 'btn btn-primary', 'onClick' => 'twelveSteps();']) !!}
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
	function twelveSteps(){
		var valid;	
		valid = validateForm();
		if(valid) {
			$('form#addStep12').submit();
		}
	}
	
	
	$(document).ready(function(){
		
		var regex 						= /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		
		$('#email_address').on('keyup',function(){
			
			if (!regex.test($(this).val())) {
				$('#email_address').css('border', '1px solid #A94442');
				$('#email_address').parent().css('color', '#A94442');
			}else{
				$('#email_address').css('border', '1px solid green');
				$('#email_address').parent().css('color', 'green');
			}
		});
	});
	
	
	function validateForm(){
		var valid 						= true;	
		var email_value 				= $('#email_address').val();
		var email_address 				= email_value.trim();
		var regex 						= /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
  
		var personal_message 			= $('#personal_message').val();
		
		var inputVal = new Array(email_address, personal_message);
		
		if(inputVal[0] == "" || inputVal[0] == undefined){
			$("#email_address").css('border', '1px solid #A94442');
			$("#email_address").parent().css('color', '#A94442');
			valid = false;
		}else if(!regex.test(inputVal[0])){
			$("#email_address").css('border', '1px solid #A94442');
			$("#email_address").parent().css('color', '#A94442');
			valid = false;
		}else{
			$("#email_address").css('border', '1px solid green');
			$("#email_address").parent().css('color', 'green');
		}
		if(inputVal[1] == ""){
			$("#personal_message").css('border', '1px solid #A94442');
			$("#personal_message").parent().css('color', '#A94442');
			valid = false;
		}else{
			$("#personal_message").css('border', '1px solid green');
			$("#personal_message").parent().css('color', 'green');
		}
		
		return valid;
	}
</script>
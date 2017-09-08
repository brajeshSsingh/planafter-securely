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
					
					{!! Form::open(['url' => '/home/addStep1', 'enctype' => 'multipart/form-data', 'class' => 'style-form', 'role' => 'form', 'method' => 'POST', 'id' => 'addStep1'] ) !!}
					
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
													{!! Form::text('date_of_birth', @$userDetail->date_of_birth, ['class' => 'date_of_birth form-control input-date', 'id' => 'datetimepicker1', 'placeholder' => 'yyyy/mm/dd', 'title' => 'yyyy/mm/dd']) !!}
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
											{{ Form::radio('gender', 'male', @$maleTrue, ['id' => 'male', 'class' => 'gender']) }}
											<label for="male"><span class="gender" style="border : {{ $errors->has('gender') ? '1px solid #a94442' : '' }}"></span>Male</label>
											<!--<input type="radio" id="radio02" name="radio" checked />-->
											{{ Form::radio('gender', 'female', @$femaleTrue, ['id' => 'female', 'class' => 'gender']) }}
											<label for="female"><span class="gender" style="border : {{ $errors->has('gender') ? '1px solid #a94442' : '' }}"></span>Female</label>
										</div>
									</div>
								</div>
							</div>
							<div class="btn-row">
								<!--<a href="{{ url('/home/step2') }}" class="btn btn-primary">Continue</a>
								<button class="btn btn-primary" type="submit">Continue</button>-->
								{!! Form::button('Continue', ['type' => 'button', 'class' => 'btn btn-primary', 'onClick' => 'firstSteps();']) !!}
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
   $(document).ready(function () {
		$('#datetimepicker1').datetimepicker({
			format: 'YYYY/MM/DD', 
			allowInputToggle: true,
			maxDate: null
		});
	});
	
	function firstSteps(){
		var valid;	
		valid = validateForm();
		if(valid) {
			$('form#addStep1').submit();
		}
	}
	$(document).ready(function(){
		
		var dateregex = new Date();
		var currentMonthregex = dateregex.getMonth()+1;
		if(currentMonthregex < 10){ currentMonthregex = '0'+currentMonthregex; }else{ currentMonthregex = currentMonthregex; }
		var currentDateregex = dateregex.getDate();
		if(currentDateregex < 10){ currentDateregex = '0'+currentDateregex; }else{ currentDateregex = currentDateregex; }
		var currentYearregex = dateregex.getFullYear();
		var date_of_birthregex = currentYearregex+'/'+currentMonthregex+'/'+currentDateregex;
		var dateFormate = /^(\d{4})(\/|-)(\d{1,2})(\/|-)(\d{1,2})$/;//YYYY-MM-DD
		
		$('#datetimepicker1').on('keyup',function(){
			if(dateFormate.test($(this).val()) && $(this).val() <= date_of_birthregex){
				$('#datetimepicker1').css('border', '1px solid green');
				$('#datetimepicker1').parent().css('color', 'green');
			}else{
				$('#datetimepicker1').css('border', '1px solid #A94442');
				$('#datetimepicker1').parent().css('color', '#A94442');
			}
		});
		
		/*var dateFormate = /^(\d{4})(\/|-)(\d{1,2})(\/|-)(\d{1,2})$/;//YYYY-MM-DD
		
		$('#datetimepicker1').on('keyup',function(){
			if(!dateFormate.test($(this).val())){
				$('#datetimepicker1').css('border', '1px solid #A94442');
				$('#datetimepicker1').parent().css('color', '#A94442');
			}else{
				$('#datetimepicker1').css('border', '1px solid green');
				$('#datetimepicker1').parent().css('color', 'green');
			}
		});*/
	});
	function validateForm(){
		var valid 					= true;	
		var first_name 				= $('#first_name').val();
		var last_name 				= $('#last_name').val();
		var date_of_birth 			= $('#datetimepicker1').val();
		
		var date = new Date();
		var currentMonth = date.getMonth()+1;
		if(currentMonth < 10){ currentMonth = '0'+currentMonth; }else{ currentMonth = currentMonth; }
		var currentDate = date.getDate();
		if(currentDate < 10){ currentDate = '0'+currentDate; }else{ currentDate = currentDate; }
		var currentYear = date.getFullYear();
		var current = currentYear+'/'+currentMonth+'/'+currentDate;
		
		var gender 					= $("input[name='gender']:checked").prop("checked");
		
		var inputVal = new Array(first_name, last_name, date_of_birth, gender, current);
		
		if(inputVal[0] == ""){
			$('#first_name').css('border', '1px solid #A94442');
			$('#first_name').parent().css('color', '#A94442');
			valid = false;
		}else{
			$('#first_name').css('border', '1px solid green');
			$('#first_name').parent().css('color', 'green');
		}
		if(inputVal[1] == ""){
			$('#last_name').css('border', '1px solid #A94442');
			$('#last_name').parent().css('color', '#A94442');
			valid = false;
		}
		else{
			$('#last_name').css('border', '1px solid green');
			$('#last_name').parent().css('color', 'green');
		}
		if(inputVal[2] == ""){
			$('.date_of_birth').css('border', '1px solid #A94442');
			$('.date_of_birth').parent().css('color', '#A94442');
			valid = false;
		}
		else{
			$('.date_of_birth').css('border', '1px solid green');
			$('.date_of_birth').parent().css('color', 'green');
		}
		if(inputVal[4] < inputVal[2] && inputVal[4] != inputVal[2]){
			$('.date_of_birth').css('border', '1px solid #A94442');
			$('.date_of_birth').parent().css('color', '#A94442');
			valid = false;
		}
		else{
			$('.date_of_birth').css('border', '1px solid green');
			$('.date_of_birth').parent().css('color', 'green');
		}
		if(inputVal[3] == undefined){
			$('.gender').css('border', '1px solid #A94442');
			$('.gender').parent().css('color', '#A94442');
			valid = false;
		}
		else{
			$('.gender').css('border', '1px solid green');
			$('.gender').parent().css('color', 'green');
		}
		
		return valid;
	}
</script>

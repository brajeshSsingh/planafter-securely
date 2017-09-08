@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box-questionnaire-container">
        	<div class="step-progress">
            	<div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                  <span class="sr-only">85% Complete</span>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="sub-header">
                    	<h5>Step 10: Children</h5>
                    	<h2>How many children do you have, if any?</h2>
                    	<p>Do you have a spouse or life partner?</p>
                    </div>
					
					{!! Form::open(['url' => '/home/addStep10', 'enctype' => 'multipart/form-data', 'class' => 'style-form', 'role' => 'form', 'method' => 'POST', 'id' => 'addStep10'] ) !!}
					
						{{ csrf_field() }}
						
						<div class="form-details row-spacing">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group{{ $errors->has('children') ? ' has-error' : '' }}">
										<label>I have</label>
										<div class="box-input-number">
											<div class="quantity">
												<!--<input type="number" min="1" max="100"  value="1">-->
												@php $children = 0; @endphp
												@if(!empty(@$userDetail->children))
													@php $children = @$userDetail->children; @endphp
												@endif
												
												{!! Form::number('children', @$children, ['class' => 'form-control', 'id' => 'children', 'title' => 'children', 'min' => '1', 'max' => '100']) !!}
											</div>
											<h6>Child/Children</h6> 
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<p class="b-p-40">How old are your children?</p>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group{{ $errors->has('children_years_old1') ? ' has-error' : '' }}">
												<label>Child #1</label>
												<div class="box-input-number">
													<div class="quantity">
														<!--<input type="number" min="1" max="100"  value="1">-->
														@php $children_years_old1 = 0; @endphp
														@if(!empty(@$userDetail->children_years_old1))
															@php $children_years_old1 = @$userDetail->children_years_old1; @endphp
														@endif
														
														{!! Form::number('children_years_old1', @$children_years_old1, ['class' => 'form-control', 'id' => 'children_years_old1', 'title' => 'children_years_old', 'min' => '1', 'max' => '100']) !!}
													</div>
													<h6>Years old</h6> 
												</div>
											</div>
										</div> 
										<div class="col-md-6">   
											<div class="form-group{{ $errors->has('children_years_old2') ? ' has-error' : '' }}">
												<label>Child #2</label>
												<div class="box-input-number">
													<div class="quantity">
														<!--<input type="number" min="1" max="100"  value="1">-->
														@php $children_years_old2 = 0; @endphp
														@if(!empty(@$userDetail->children_years_old2))
															@php $children_years_old2 = @$userDetail->children_years_old2; @endphp
														@endif
														
														{!! Form::number('children_years_old2', @$children_years_old2, ['class' => 'form-control', 'id' => 'children_years_old2', 'title' => 'children_years_old', 'min' => '1', 'max' => '100']) !!}
													</div>
													<h6>Years old</h6> 
												</div>
											</div>
										</div>        
									</div>    
								</div>
							</div>
							<div class="btn-row">
								 <!--<button class="btn" type="button">Back</button>
								<button class="btn btn-primary" type="button">Continue</button>-->
								<a href="{{ url('/home/step9') }}" class="btn">Back</a>
								{!! Form::button('Continue', ['type' => 'button', 'class' => 'btn btn-primary', 'onClick' => 'tenSteps();']) !!}
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
	function tenSteps(){
		var valid;	
		valid = validateForm();
		if(valid) {
			$('form#addStep10').submit();
		}
	}
	
	function validateForm(){
		var valid 					= true;	
		var children 				= $('#children').val();
		var children_years_old1 	= $('#children_years_old1').val();
		var children_years_old2 	= $('#children_years_old2').val();
		
		var inputVal = new Array(children, children_years_old1, children_years_old2);
		
		if(inputVal[0] == "" || inputVal[0] == 0){
			$("#children").css('border', '1px solid #A94442');
			$("#children").parent().css('color', '#A94442');
			valid = false;
		}else{
			$("#children").css('border', '1px solid green');
			$("#children").parent().css('color', 'green');
		}
		if(inputVal[1] == "" || inputVal[1] == 0){
			$("#children_years_old1").css('border', '1px solid #A94442');
			$("#children_years_old1").parent().css('color', '#A94442');
			valid = false;
		}else{
			$("#children_years_old1").css('border', '1px solid green');
			$("#children_years_old1").parent().css('color', 'green');
		}
		if(inputVal[2] == "" || inputVal[2] == 0){
			$("#children_years_old2").css('border', '1px solid #A94442');
			$("#children_years_old2").parent().css('color', '#A94442');
			valid = false;
		}else{
			$("#children_years_old2").css('border', '1px solid green');
			$("#children_years_old2").parent().css('color', 'green');
		}
		
		return valid;
	}
</script>
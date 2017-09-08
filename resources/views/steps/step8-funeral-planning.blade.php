@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box-questionnaire-container">
        	<div class="step-progress">
            	<div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                  <span class="sr-only">75% Complete</span>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-7">
                    <div class="sub-header">   
                        <h5>Step 08: Funeral Wishes</h5>
                        <h2>Funeral Planning</h2>
                        <p>Have you given any thought to your funeral wishes?</p>
                    </div>    
					
					{!! Form::open(['url' => '/home/addStep8', 'enctype' => 'multipart/form-data', 'class' => 'style-form', 'role' => 'form', 'method' => 'POST'] ) !!}
					
						{{ csrf_field() }}
						
						<div class="form-details">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group{{ $errors->has('funeral_wishes') ? ' has-error' : '' }}">
										<label>Please select</label>
										<div class="hidden-xs">
											<!--<select class="selectpicker"  title=" ">
												<option>I know what type of funeral I would like</option>
												<option>I know whether I would like to be buried or cremated</option>
											</select>-->
											{{ Form::select('funeral_wishes', ['1' => 'I know what type of funeral I would like', '2' => 'I know whether I would like to be buried or cremated'], (@$userDetail->funeral_wishes), ['class' => 'selectpicker', 'title' => 'Select all that apply', 'id' => 'funeral_wishes']) }}
										</div>
										<div class="visible-xs">
											<!--<select class="form-control">
												<option></option>
												<option>I know what type of funeral I would like</option>
												<option>I know whether I would like to be buried or cremated</option>
											</select>-->
											{{ Form::select('', ['1' => 'I know what type of funeral I would like', '2' => 'I know whether I would like to be buried or cremated'], (@$userDetail->funeral_wishes), ['class' => 'form-control']) }}
										</div>    
									</div>
								</div>
							</div>
							<div class="btn-row">
								 <!--<button class="btn" type="button">Back</button>
								<button class="btn btn-primary" type="button">Continue</button>-->
								<a href="{{ url('/home/step7') }}" class="btn">Back</a>
								{!! Form::button('Continue', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
							</div>
						</div>
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
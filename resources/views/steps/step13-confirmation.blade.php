@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box-questionnaire-container">
        	<div class="step-progress">
            	<div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                  <span class="sr-only">100% Complete</span>
                </div>
              </div>
            </div>
            <div class="content-congrats">
            	<p><img src="{{ url('questionnaire/img/icon-right.png') }}" title="right"/></p>
                <h2>Congrats, {{ @$userDetail }}!</h2>
                <p>You've customized your account on PlanSecurely, and opted to share your plan with Howard Henry, who will now be your designated representative for the parts of your plan selected.</p>
                <p>If you need additional help with PlanSecurely,<br/> please visit our <a href="#" title="">Help Centre.</a></p>
                <div class="btn-row">
                    <!--<button class="btn btn-primary" type="button">Visit Dashboard</button>-->
					<a href="{{ url('/user/dashboard') }}" class="btn btn-primary">Visit Dashboard</a>
                </div>
            </div>
        </div>
    </div>
@endsection
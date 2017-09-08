@extends('layouts.app')

@section('content')
<section class="wrapper">
	<h3><i class="fa fa-angle-right"></i> Change Password</h3>
	<!-- BASIC FORM ELELEMNTS -->
	<div class="row mt">
		<div class="col-lg-12">
			<div class="form-panel">
				@if(session()->has('failure'))
					<div class="alert alert-danger"> 
					{!! session('failure') !!}
					</div>
				@endif
				@if(session()->has('success'))
					<div class="alert alert-success"> 
					{!! session('success') !!}
					</div>
				@endif
				
				{!! Form::open(['url' => '/changePassword', 'class' => 'form-horizontal style-form', 'role' => 'form', 'method' => 'POST'] ) !!}
				<!--<form class="form-horizontal style-form" method="POST" action="{{ url('/changePassword') }}">-->
					{{ csrf_field() }}
					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
					
						<label class="col-sm-2 col-sm-2 control-label">Old Password<span class="mandatory">*</span></label>
						<!--{!! Form::label('old_password', 'Old Password *', ['class' => 'col-sm-2 col-sm-2 control-label mandatory']) !!}-->
						
						
						<div class="col-sm-6">
							{!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'Old Password']) !!}
							<!--<input type="password" class="form-control" name="password" id="password" placeholder="Old Password">-->
						</div>
						
						@if ($errors->has('password'))
							<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }}">
						<!--{!! Form::label('new_password', 'New Password', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}-->
						<label class="col-sm-2 col-sm-2 control-label">New Password<span class="mandatory">*</span></label>
						
						<div class="col-sm-6">
							{!! Form::password('new_password', ['class' => 'form-control', 'id' => 'new_password', 'placeholder' => 'New Password']) !!}
							<!--<input type="password" class="form-control" name="new_password" id="new_password" placeholder="New Password">-->
						</div>
						
						@if ($errors->has('new_password'))
							<span class="help-block">
								<strong>{{ $errors->first('new_password') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group{{ $errors->has('confirm_password') ? ' has-error' : '' }}">
						<!--{!! Form::label('confirm_password', 'Confirm Password', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}-->
						<label class="col-sm-2 col-sm-2 control-label">Confirm Password<span class="mandatory">*</span></label>
						<div class="col-sm-6">
							{!! Form::password('confirm_password', ['class' => 'form-control', 'id' => 'confirm_password', 'placeholder' => 'Confirm Password']) !!}
							<!--<input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password">-->
						</div>
				
						@if ($errors->has('confirm_password'))
							<span class="help-block">
								<strong>{{ $errors->first('confirm_password') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group">
						<label class="col-sm-2 col-sm-2 control-label"></label>
						<div class="col-sm-6">
							{!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
							<!--<button type="submit" name="submit" value="submit" class="btn btn-info">Confirm</button>-->
						</div>
					</div>
				{!! Form::close() !!}
				<!--</form>-->
			</div>
		</div>
		<!-- col-lg-12-->
	</div>
	<!-- /row -->
	<!-- BASIC FORM ELELEMNTS -->
</section>
<!--/wrapper -->

@endsection

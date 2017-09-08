@extends('layouts.app')

@section('content')
	<div class="container">
        <div class="box-questionnaire-container">
			<div id="login-page">
				<div class="container" style="width:40%;">
					{!! Form::open(['url' => 'login', 'class' => 'form-login', 'role' => 'form', 'method' => 'POST'] ) !!}
					<!--<form class="form-login" role="form" method="POST" action="{{ route('login') }}">-->
						<h2 class="form-login-heading setcolor" style="text-align:center;">User Login</h2>
						
						<div class="login-wrap">
							{{ csrf_field() }}
							<div class="{{ $errors->has('email') ? ' has-error' : '' }}">
								<div class="input-group mb-3">
									<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
									{!! Form::email('email', old('email'), ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email']) !!}
									<!--<input type="text" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required>-->
								</div>
								@if ($errors->has('email'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@else
									<br>
								@endif
							</div>
							<div class="{{ $errors->has('password') ? ' has-error' : '' }}">
								<div class="input-group mb-3{{ $errors->has('password') ? ' has-error' : '' }}">
									<span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
									{!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'Password']) !!}
									<!--<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>-->
								</div>
								@if ($errors->has('password'))
									<span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
							</div>
							<br>
							 {!! Form::button( '<i class="fa fa-lock"></i> SIGN IN', ['type' => 'submit', 'class' => 'btn btn-theme btn-block btn-primary setcolor'] ) !!}
							<!--<button type="submit" class="btn btn-theme btn-block setcolor"><i class="fa fa-lock"></i> SIGN IN</button>-->
						</div>
					<!--</form>-->
					{!! Form::close() !!}
				</div>
			</div>  
		</div>
	</div>  
@endsection
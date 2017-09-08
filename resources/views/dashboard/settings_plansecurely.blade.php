@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li class="active">Settings</li>
			</ol>
			<div class="row-bigspacing">
				<h2>Settings</h2>
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
						<div class="form-group">
							<div class="dropdown-property">
								<label>Chat</label>
								<div class="toggle-onoff">
									<h3>Enabled</h3>
									<label class="switch">
										<input type="checkbox">
										<span class="slider"></span> </label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
						<div class="form-group">
							<div class="dropdown-property">
								<label>Notifications</label>
								<div class="toggle-onoff">
									<h3>Disabled</h3>
									<label class="switch">
										<input type="checkbox">
										<span class="slider"></span> </label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
						<div class="form-group">
							<div class="dropdown-property">
								<label>Email notification</label>
								<h3 class="t-p-20">Do you like to get notified via email when any change made to your account?</h3>
								<div class="toggle-onoff">
									<label class="switch">
										<input type="checkbox">
										<span class="slider"></span> </label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection 
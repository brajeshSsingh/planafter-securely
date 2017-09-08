@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content profile-page">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li><a href="{{ url('/user/digitallife') }}">Digital Life</a></li>
				<li class="active">Instagram</li>
			</ol>
			<ul class="top-action-btns">
				<li class="btn-print"><a href="#" title=""></a></li>
				<li class="btn-edit"><a href="#" title=""></a></li>
				<li class="btn-delete"><a href="#" title=""></a></li>
			</ul>
			<h2>Instagram</h2>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label>Profile link</label>
						<h3><a href="#" title="">https://www.instagram.com/john.h</a></h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label>Username</label>
						<h3>john.h</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label>Password</label>
						<h3>MyPassword</h3>
					</div>
				</div>
			</div>
		</div>
@endsection 
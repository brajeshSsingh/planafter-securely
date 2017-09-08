@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user/dashboard') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li><a href="{{ url('/eldercare') }}">Eldercare</a></li>
				<li class="active">Add Eldercare Plan</li>
			</ol>
			<ul class="top-action-btns">
				<li class="btn-print"><a href="#" title=""></a></li>
				<li class="btn-edit"><a href="#" title=""></a></li>
				<li class="btn-delete"><a href="#" title=""></a></li>
			</ul>
			<h2>Eldercare Plan</h2>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
					<div class="form-group">
						<p class="text-light no-space">Do you currently care for your elderly parents?</p>
						<h3 class="f20">NO</h3>
					</div>
				</div>
			</div>
		</div>
@endsection 
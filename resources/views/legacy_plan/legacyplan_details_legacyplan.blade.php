@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li><a href="{{ url('/legacyplan') }}">Legacy Plan</a></li>
				<li class="active">Legacy Plan</li>
			</ol>
			<ul class="top-action-btns">
				<li class="btn-print"><a href="#" title=""></a></li>
				<li class="btn-edit"><a href="#" title=""></a></li>
				<li class="btn-delete"><a href="#" title=""></a></li>
			</ul>
			<h2>Legacy Plan</h2>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
					<div class="form-group label-font-14">
						<label class="pb5">What is their plan after their die?</label>
						<h3 class="add-line-height">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h3>
					</div>
				</div>
			</div>
		</div>
@endsection 
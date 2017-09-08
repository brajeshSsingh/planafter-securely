@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard </a></li>
				<li><a href="{{ url('/assets') }}">Assets </a></li>
				<li class="active">Rolls Royce</li>
			</ol>
			<ul class="top-action-btns">
				<li class="btn-print"><a href="#" title=""></a></li>
				<li class="btn-edit"><a href="#" title=""></a></li>
				<li class="btn-delete"><a href="#" title=""></a></li>
			</ul>
			<h2 class="p-b50">Car - Rolls Royce</h2>
			<div class="form-details label-font-14">
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
							<label>Vehicle Brand</label>
							<h3>Rloos Royce</h3>
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
							<label>Make</label>
							<h3>Rolls Roce 2017</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
							<label>Model</label>
							<h3>VSD212</h3>
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
							<label>Year</label>
							<h3>2017</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
							<label>Color</label>
							<div class="color-pickbox"> <span class="color-black"></span> </div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
							<label>License plate</label>
							<h3>ACG8095</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
							<label>Attachments</label>
							<ul class="list-attachments">
								<li>
									<div class="box-attachments"> <a href="#" title=""> <img src="{{ url('dashboard/img/icon-pdf.png') }}" alt="" title=""/> Download </a> </div>
								</li>
								<li>
									<div class="box-attachments"> <a href="#" title=""> <img src="{{ url('dashboard/img/icon-jpg.png') }}" alt="" title=""/> Download </a> </div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="form-group">
									<label>VIN Number</label>
									<h3>1HGB41JXMN109186</h3>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="form-group">
									<label>State Registration</label>
									<h3>California</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection 
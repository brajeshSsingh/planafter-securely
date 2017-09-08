@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li><a href="{{ url('/estateplanning') }}">Estate Planning</a></li>
				<li class="active">Trust</li>
			</ol>
			<ul class="top-action-btns">
				<li class="btn-print"><a href="#" title=""></a></li>
				<li class="btn-edit"><a href="#" title=""></a></li>
				<li class="btn-delete"><a href="#" title=""></a></li>
			</ul>
			<h2>Trust</h2>
			<div class="form-details label-font-14">
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>Name of trust</label>
							<h3>John Heitinga, Successor trust</h3>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>How did you create your trust</label>
							<h3>Attorney</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>When it last updated?</label>
							<h3>2016/07/01</h3>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>What was the purpose of</label>
							<h3>Set assside asset</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="form-group">
									<label>Where do you keep the signed notarized document?</label>
									<h3>In my home</h3>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="form-group">
									<label>Attachments</label>
								</div>
								<ul class="list-attachments">
									<li>
										<div class="box-attachments"> <a href="#" title=""> <img src="{{ url('dashboard/img/icon-pdf.png') }}" alt="" title=""> Download </a> </div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-lg-4 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>Additional notes & details</label>
							<h3 class="f16 add-line-height">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection 
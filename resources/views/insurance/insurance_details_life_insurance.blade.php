@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li><a href="{{ url('/insurance') }}">Insurance</a></li>
				<li class="active">Life Insurance</li>
			</ol>
			<ul class="top-action-btns">
				<li class="btn-print"><a href="#" title=""></a></li>
				<li class="btn-edit"><a href="#" title=""></a></li>
				<li class="btn-delete"><a href="#" title=""></a></li>
			</ul>
			<h2>Life Insurance</h2>
			<div class="form-details label-font-14">
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
							<label>Name of insurance company</label>
							<h3>Progressive Insurance</h3>
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
							<label>Type of policy</label>
							<h3>Return of premuim</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
							<label>Policy start date</label>
							<h3>2012/02/26</h3>
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
							<label>Policy number</label>
							<h3>2087852566</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
							<label>Premuim details</label>
							<h3>Monthly premium</h3>
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
							<label>Link to policy online</label>
							<h3><a href="#" title="">https://www.progressiveinsurance.com/login</a></h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
							<label>Policy statement</label>
							<ul class="list-attachments">
								<li>
									<div class="box-attachments"> <a href="#" title=""> <img src="{{ url('dashboard/img/icon-pdf.png') }}" alt="" title=""> Download </a> </div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
							<label>Username/Password</label>
							<h3>John.H/password</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>Do you have a broker who you work with on this policy?</label>
							<h3>No</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection 
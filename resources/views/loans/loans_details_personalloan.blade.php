@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li><a href="{{ url('/loans') }}">Loans</a></li>
				<li class="active">Personal Loan</li>
			</ol>
			<ul class="top-action-btns">
				<li class="btn-print"><a href="#" title=""></a></li>
				<li class="btn-edit"><a href="#" title=""></a></li>
				<li class="btn-delete"><a href="#" title=""></a></li>
			</ul>
			<h2>Personal Loan</h2>
			<div class="form-details label-font-14">
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>Amount loaned</label>
							<h3>$50,000</h3>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>Name of the person or entity who loaned you the money</label>
							<h3>Jonathon Sheppard</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>Payback terms</label>
							<h3>10 Years - $5000/m</h3>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>Purpose of loan</label>
							<h3>Home Buying</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>How are you paying back the currently</label>
							<h3>By Cheque</h3>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>Current balance</label>
							<h3>$19,000</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>Attachments - Promissory note</label>
						</div>
						<ul class="list-attachments">
							<li>
								<div class="box-attachments"> <a href="#" title=""> <img src="{{ url('dashboard/img/icon-pdf.png') }}" alt="" title=""> Download </a> </div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
@endsection 
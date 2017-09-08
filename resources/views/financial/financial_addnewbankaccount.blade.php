@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li><a href="{{ url('/financial') }}">Financial Account</a></li>
				<li class="active">Add New Bank Account</li>
			</ol>
			<div class="row">
				<div class="col-md-9 col-lg-7 col-xs-12 col-sm-12">
					<h2>Add New Bank Account</h2>
					<p class="f16">Add an account is simple, quick and easy! To begin search and find your bank <span>account /Credit card, or select from the popular banks listed below.</span></p>
					<div class="form-details t-m-20 label-font-14 label-color">
						<div class="row">
							<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
								<div class="form-group">
									<label>Search your bank or credit card</label>
									<input type="text" class="form-control" placeholder="Search Here" value="" title="Search">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
								<label>or select from the popular banks</label>
								<ul class="list-banks">
									<li><a href="#"><img src="{{ url('dashboard/img/img-walls-fargo.png') }}"/></a></li>
									<li><a href="#"><img src="{{ url('dashboard/img/img-hsbc.png') }}"/></a></li>
									<li><a href="#"><img src="{{ url('dashboard/img/img-chase.png') }}"/></a></li>
									<li><a href="#"><img src="{{ url('dashboard/img/img-paypal.png') }}"/></a></li>
									<li><a href="#"><img src="{{ url('dashboard/img/img-pnc-bank.png') }}"/></a></li>
									<li><a href="#"><img src="{{ url('dashboard/img/img-us-bank.png') }}"/></a></li>
									<li><a href="#"><img src="{{ url('dashboard/img/img-standrad-charted.png') }}"/></a></li>
									<li><a href="#"><img src="{{ url('dashboard/img/img-bank-of-america.png') }}"/></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="btn-row">
						<div class="row">
							<div class="col-md-12"> <a href="#" title="Cancel" class="btn">Cancel</a> <a href="{{ url('/financial/financial_all')}}" title="Continue" class="btn btn-primary">Continue</a> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection 
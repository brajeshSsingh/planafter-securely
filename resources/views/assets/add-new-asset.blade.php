@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard </a></li>
				<li><a href="{{ url('/assets')}}">Assets </a></li>
				<li class="active">Add New Asset</li>
			</ol>
			<h2>Add New Asset</h2>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="select-btn">
						<div class="form-group">
							<label>Select asset type</label>
							<div class="hidden-xs">
								<select class="selectpicker" data-width="100%">
									<option>Vehicle</option>
									<option>Artwork</option>
									<option>Investments</option>
									<option>Real Estate</option>
									<option>Jewelry</option>
									<option>Purse</option>
									<option>Other</option>
								</select>
							</div>
							<div class="visible-xs">
								<select class="form-control">
									<option>Vehicle</option>
									<option>Artwork</option>
									<option>Investments</option>
									<option>Real Estate</option>
									<option>Jewelry</option>
									<option>Purse</option>
									<option>Other</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> </div>
			</div>
			<div class="btn-row"> 
				<a href="#" title="Cancel" class="btn">Cancel</a> 
				<a href="{{ url('/assets/add_new_jewelry')}}" title="Continue" class="btn btn-primary">Continue</a> </div>
		</div>
@endsection          
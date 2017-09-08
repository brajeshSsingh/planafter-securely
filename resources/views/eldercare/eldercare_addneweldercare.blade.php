@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content ">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li><a href="{{ url('/eldercare') }}">Eldercare</a></li>
				<li class="active">Add Eldercare Details</li>
			</ol>
			<h2>Add Eldercare</h2>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
					<p class="f16">Do you currently care for your elderly parents?</p>
					<div class="radio-btn-row">
						<input type="radio" id="radio01" name="radio" />
						<label for="radio01"><span></span>Yes</label>
						<input type="radio" id="radio02" name="radio" />
						<label for="radio02"><span></span>No</label>
					</div>
				</div>
			</div>
			<div class="btn-row btn-top-spacing">
				<div class="row">
					<div class="col-md-12"> <a href="#" title="Cancel" class="btn">Cancel</a>
						<a href="{{ url('/eldercare/eldercare_all')}}" title="Save" class="btn btn-primary">Save</a>
						<!--<input type="submit" title="Save" class="btn btn-primary" value="Save"/>-->
					</div>
				</div>
			</div>
		</div>
@endsection 
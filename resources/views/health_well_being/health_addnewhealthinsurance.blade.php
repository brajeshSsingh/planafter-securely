@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li><a href="{{ url('/healthwellbeing') }}">Health & Well Being</a></li>
				<li class="active">Add New Health Insurance</li>
			</ol>
			<h2>Add New Health Insurance</h2>
			<div class="row">
				<div class="col-md-6 col-lg-6">
					<div class="form-group">
						<label>Name of insurance company</label>
						<input type="text" class="form-control" id="name" title="Name of insurance company">
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="form-group">
						<label>Type of policy</label>
						 <div class="hidden-xs">
						<select class="selectpicker" title="Choose one policy">
							<option>Saab</option>
							<option>Mercedes</option>
							<option>Audi</option>
						</select>
						</div>
						<div class="visible-xs">
						<select class="form-control">
							<option>Choose one policy</option>
							<option>Saab</option>
							<option>Mercedes</option>
							<option>Audi</option>
						</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-6">
					<div class="form-group">
						<label>Policy start date</label>
						<div class="row">
							<div class="col-md-6">
								<input class="form-control input-date" id="datetimepicker3" placeholder="yyyy/mm/dd" type="text"/>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="form-group">
						<label>Policy number</label>
						<input type="text" class="form-control" id="purpose" title="Policy number">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-6">
					<div class="form-group">
						<label>Premium details <span class="f12">(Monthly premium, etc.)</span></label>
						<input type="text" class="form-control" title="Premium details">
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="form-group">
						<label>Link to policy online</label>
						<input type="text" class="form-control" title="Link to policy online">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-6">
					<div class="form-group">
						<label>Upload policy statement</label>
						<div class="box-input-file">
							<input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
							<label for="file-1"><span>Select File</span></label>
							<span class="or-text">or drop files here to upload</span> </div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="form-group">
						<label>Username/Password</label>
						<input type="text" class="form-control" id="username" title="Username/Password">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
					<div class="form-group">
						<label>Do you have a broker who you work with on this policy?</label>
						<div class="radio-btn-row">
							<input id="radio01" name="radio" type="radio">
							<label for="radio01"><span></span>Yes</label>
							<input id="radio02" name="radio" type="radio">
							<label for="radio02"><span></span>No</label>
						</div>
					</div>
				</div>
			</div>
			<div class="btn-row btn-top-spacing">
				<div class="row">
					<div class="col-md-6"> <a href="#" title="Cancel" class="btn">Cancel</a>
						<a href="{{ url('/healthwellbeing/health_wellbeing_all')}}" title="Save" class="btn btn-primary">Save</a>
						<!--<input type="submit" title="Save" class="btn btn-primary" value="Save"/>-->
					</div>
					<div class="col-md-6 text-right"> <a href="#" title="Reset" class="btn">Reset</a> </div>
				</div>
			</div>
		</div>
@endsection 
@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content ">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li><a href="{{ url('/taxescredit') }}">Taxes</a></li>
				<li class="active">Add Taxes</li>
			</ol>
			<h2>Add Taxes</h2>
			<div class="row">
				<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
					<div class="form-group">
						<label>How do you prepare for taxes?</label>
						<div class="hidden-xs">
						<select class="selectpicker" data-width="100%" title="Choose your taxes">
							<option>Tax Prepare/CPA</option>
							<option>Online Software</option>
							<option>Other</option>
						</select>
						</div>
						 <div class="visible-xs">
						<select class="form-control">
							<option>Choose your taxes</option>
							<option>Tax Prepare/CPA</option>
							<option>Online Software</option>
							<option>Other</option>
						</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
					<div class="form-group">
						<label>Upload copies of your most recent text return below</label>
						<div class="box-input-file">
							<input type="file" name="file-2" id="file-2" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
							<label for="file-2"><span>Select File</span></label>
							<span class="or-text">or drop files here to upload</span> </div>
					</div>
				</div>
			</div>
			<div class="btn-row btn-top-spacing">
				<div class="row">
					<div class="col-md-6"> <a href="#" title="Cancel" class="btn">Cancel</a>
						<a href="{{ url('/taxescredit/taxes_all')}}" title="Save" class="btn btn-primary">Save</a>
						<!--<input type="submit" title="Save" class="btn btn-primary" value="Save"/>-->
					</div>
					<div class="col-md-6 text-right"> <a href="#" title="Reset" class="btn">Reset</a> </div>
				</div>
			</div>
		</div>
@endsection
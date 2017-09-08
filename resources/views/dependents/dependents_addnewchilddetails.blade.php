@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li><a href="{{ url('/dependents') }}">Dependents</a></li>
				<li class="active">Add Child Details</li>
			</ol>
			<h2>Add Child Details</h2>
			<div class="form-details">
				<div class="row">
					<div class="col-md-3 col-lg-3 col-xs-12 col-sm-3">
						<div class="form-group">
							<label>First name</label>
							<input type="text" class="form-control"  title="First name">
						</div>
					</div>
					<div class="col-md-3 col-lg-3 col-xs-12 col-sm-3">
						<div class="form-group">
							<label>Last name</label>
							<input type="text" class="form-control" title="Last name">
						</div>
					</div>
					<div class="col-md-3 col-lg-3 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>DOB</label>
							<div class="box-datetimepicker">
								<input class="form-control input-date" id="datetimepicker2" placeholder="yyyy/mm/dd" type="text"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>Place of birth</label>
							<input type="text" class="form-control" title="Place of birth" value="">
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>Social security number</label>
							<input type="text" class="form-control" title="What was the purpose of the trust">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>Upload copy of birth certificate and picture</label>
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
							<a href="{{ url('/dependents/dependents_all')}}" title="Save" class="btn btn-primary">Save</a>
							<!--<input type="submit" title="Save" class="btn btn-primary" value="Save"/>-->
						</div>
						<div class="col-md-6 text-right"> <a href="#" title="Reset" class="btn">Reset</a> </div>
					</div>
				</div>
			</div>
		</div>
@endsection 
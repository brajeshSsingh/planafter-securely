@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard </a></li>
				<li><a href="{{ url('/assets') }}">Assets </a></li>
				<li class="active">Add New Vehicle</li>
			</ol>
			<h2>Add New Vehicle</h2>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label>Vehicle type</label>
						<div class="hidden-xs">
						<select class="selectpicker" title="Select vehicle type">
							<option>Car</option>
							<option>Other</option>
						</select>
						</div>
						<div class="visible-xs">
						<select class="form-control">
							<option>Select vehicle type</option>
							<option>Car</option>
							<option>Other</option>
						</select>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label>Vehicle brand</label>
						<select class="selectpicker" data-live-search="true" title="Select vehicle brand">
							<option>Roding</option>
							<option>Roewe</option>
							<option>Rolls-Royce</option>
						</select>
					  </div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label>Vehical make</label>
						<div class="hidden-xs">
						<select class="selectpicker" title="Select vehicle make">
							<option>Car</option>
							<option>Other</option>
						</select>
						</div>
						<div class="visible-xs">
						<select class="form-control">
							<option>Select vehicle make</option>
							<option>Car</option>
							<option>Other</option>
						</select>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label>Vehicle model</label>
						<div class="hidden-xs">
						<select class="selectpicker" title="Select vehicle model">
							<option>Car</option>
							<option>Other</option>
						</select>
						</div>
						<div class="visible-xs">
						<select class="form-control">
							<option>Select vehicle model</option>
							<option>Car</option>
							<option>Other</option>
						</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label>Purchase Date of Property</label>
						<div class="row">
							<div class="col-md-6">
								<div class="box-datetimepicker">
									<input class="form-control input-date" id="datetimepicker2" placeholder="yyyy/mm/dd" type="text"/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label>License Plate</label>
						<input type="text" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label>Select color</label>
						<div class="row">
							<div class="col-xs-7 col-sm-4 col-md-3 col-lg-3">
								<div class="color-picker">
									<input type='text' id="showPaletteOnly"/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label>VIN Number</label>
						<input type="text" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label>Attach Files</label>
						<div class="box-input-file">
							<input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
							<label for="file-1"><span>Select File</span></label>
							<span class="or-text">or drop files here to upload</span> </div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group drop-down-bottom">
						<label>State Registration</label>
						<select class="selectpicker" title="Select state registration">
							<option>state</option>
							<option>state</option>
							<option>state</option>
						</select>
					</div>
				</div>
			</div>
			<div class="btn-row btn-top-spacing">
				<div class="row">
					<div class="col-md-6"> <a href="#" title="Cancel" class="btn">Cancel</a>
						<a href="{{ url('/assets/assets_view_all')}}" title="Save" class="btn btn-primary">Save</a>
						<!--<input type="submit" title="Save" class="btn btn-primary" value="Save"/>-->
					</div>
					<div class="col-md-6 text-right"> <a href="#" title="Reset" class="btn">Reset</a> </div>
				</div>
			</div>
		</div>
@endsection 
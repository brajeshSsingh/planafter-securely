@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard </a></li>
				<li><a href="{{ url('/assets')}}">Assets </a></li>
				<li class="active">Add New Jewelry, Purse, Etc.</li>
			</ol>
			<h2>Add New Jewelry, Purses, Etc.</h2>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label>Type of item</label>
						<div class="hidden-xs">
						<select class="selectpicker" title="Select item type">
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
						</div>
						<div class="visible-xs">
						<select class="form-control">
							<option>Select item type</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label>Name of the item</label>
						<input type="text" class="form-control" placeholder="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label>Where do you keep this item</label>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label>Insurence information</label>
						<input type="text" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label>Purchase Date </label>
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
						<label>Insurence information</label>
						<input type="text" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label>Attach Receipts, Files etc</label>
						<div class="box-input-file">
							<input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
							<label for="file-1"><span>Select Files</span></label>
							<span class="or-text">or drop files here to upload</span> </div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> </div>
			</div>
			<div class="btn-row btn-top-spacing">
				<div class="row">
					<div class="col-md-6"> <a href="#" title="Cancel" class="btn">Cancel</a>
						<a href="{{ url('/assets/add_new_real_estate')}}" title="Save" class="btn btn-primary">Save</a>
						<!--<input type="submit" title="Save" class="btn btn-primary" value="Save"/>-->
					</div>
					<div class="col-md-6 text-right"> <a href="#" title="Reset" class="btn">Reset</a> </div>
				</div>
			</div>
		</div>
@endsection       
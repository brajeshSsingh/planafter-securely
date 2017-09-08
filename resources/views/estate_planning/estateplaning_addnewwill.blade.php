@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li><a href="{{ url('/estateplanning') }}">Estate Planning</a></li>
				<li class="active">Add New Will</li>
			</ol>
			<h2>Add New Will</h2>
			<div class="form-details">
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>Name of Will</label>
							<input type="text" class="form-control" title="Name of Will">
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>How did you create your Will</label>
							 <div class="hidden-xs">
							<select class="selectpicker" title="Select How did you create your trust?">
								<option>Saab</option>
								<option>Mercedes</option>
								<option>Audi</option>
							</select>
							</div>
							<div class="visible-xs">
							<select class="form-control">
								<option>Select How did you create your trust?</option>
								<option>Saab</option>
								<option>Mercedes</option>
								<option>Audi</option>
							</select>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12">
								<div class="form-group">
									<label>When it last updated?</label>
									<div class="row">
										<div class="col-md-6">
											<div class="box-datetimepicker">
												<input class="form-control input-date" id="datetimepicker2" placeholder="yyyy/mm/dd" type="text"/>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12">
								<div class="form-group">
									<label>Where do you keep the signed notarized document?</label>
									<input type="text" class="form-control" title="Where do you keep the signed notarized document?">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12">
								<div class="form-group">
									<label>Please upload the copy of the document here</label>
									<div class="box-input-file">
										<input type="file" name="file-2" id="file-2" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
										<label for="file-2"><span>Select File</span></label>
										<span class="or-text">or drop files here to upload</span> </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>Additional notes and details</label>
							<textarea class="form-control" rows="8" id="comment" title="Additional notes and details"></textarea>
						</div>
					</div>
				</div>
				<div class="btn-row btn-top-spacing">
					<div class="row">
						<div class="col-md-6"> <a href="#" title="Cancel" class="btn">Cancel</a>
							<a href="{{ url('/estateplanning/estateplaning_all')}}" title="Save" class="btn btn-primary">Save</a>
							<!--<input type="submit" title="Save" class="btn btn-primary" value="Save"/>-->
						</div>
						<div class="col-md-6 text-right"> <a href="#" title="Reset" class="btn">Reset</a> </div>
					</div>
				</div>
			</div>
		</div>
@endsection 
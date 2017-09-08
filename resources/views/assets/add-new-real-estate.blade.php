@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard </a></li>
				<li><a href="{{ url('/assets')}}">Assets </a></li>
				<li class="active">Add New Real Estate</li>
			</ol>
			<h2>Add New Real Estate</h2>
			<ul class="nav nav-tabs border-tab" role="tablist">
				<li role="presentation" class="active"><a href="#property_info" aria-controls="property_info" role="tab" data-toggle="tab">Property info</a></li>
				<li role="presentation"><a href="#mortgage_info" aria-controls="mortgage_info" role="tab" data-toggle="tab">Mortgage info</a></li>
				<li role="presentation"><a href="#household_info" aria-controls="household_info" role="tab" data-toggle="tab">Household info</a></li>
			</ul>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="property_info">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Name of property</label>
								<input type="text" class="form-control" placeholder="Cooper Square">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Type of property</label>
								<div class="hidden-xs">
								<select class="selectpicker">
									<option>Resident</option>
									<option>Land</option>
									<option>Resident</option>
								</select>
								</div>
								<div class="visible-xs">
								<select class="form-control">
									<option>Resident</option>
									<option>Land</option>
									<option>Resident</option>
								</select>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Owner of property</label>
								<input type="text" class="form-control" placeholder="">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Address of property</label>
								<input type="text" class="form-control" placeholder="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Purchase price of property</label>
								<input type="text" class="form-control" placeholder="">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Purchase date of property</label>
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
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 two-col-height">
							<div class="form-group">
								<label>Provide a link to listing online</label>
								<input type="text" class="form-control" placeholder="">
							</div>
							<div class="form-group">
								<label>Attach files</label>
								<div class="box-input-file">
									<input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
									<label for="file-1"><span>Select File</span></label>
									<span class="or-text">or drop files here to upload</span> </div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Description of property</label>
								<textarea rows="4" class="form-control"></textarea>
							</div>
						</div>
					</div>
					<div class="btn-row btn-top-spacing">
						<div class="row">
							<div class="col-md-6"> <a href="#" title="Cancel" class="btn">Cancel</a>
								<input type="submit" title="Save" class="btn btn-primary" value="Save"/>
							</div>
							<div class="col-md-6 text-right"> <a href="#" title="Reset" class="btn">Reset</a> </div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="mortgage_info">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Mortgage account number <small>(If applicable)</small></label>
								<input type="text" class="form-control" placeholder="">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Link to mortgage account online</label>
								<input type="text" class="form-control" placeholder="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Attach Files</label>
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
								<input type="submit" title="Save" class="btn btn-primary" value="Save"/>
							</div>
							<div class="col-md-6 text-right"> <a href="#" title="Reset" class="btn">Reset</a> </div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="household_info">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Utilities <small>(Please list any utility accounts you have for this property)</small></label>
								<textarea rows="3"  class="form-control"></textarea>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>HQA Company? <small>(Please list if you have to pay HQA dues)</small></label>
								<textarea rows="3"  class="form-control"></textarea>
							</div>
						</div>
					</div>
					<div class="btn-row btn-top-spacing">
						<div class="row">
							<div class="col-md-6"> <a href="#" title="Cancel" class="btn">Cancel</a>
								<a href="{{ url('/assets/add_new_vehicle')}}" title="Save" class="btn btn-primary">Save</a>
								<!--<input type="submit" title="Save" class="btn btn-primary" value="Save"/>-->
							</div>
							<div class="col-md-6 text-right"> <a href="#" title="Reset" class="btn">Reset</a> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection 
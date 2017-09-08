@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li><a href="{{ url('/loans') }}">Loans</a></li>
				<li class="active">Add Personal Loan</li>
			</ol>
			<h2>Add Personal Loan</h2>
			<div class="form-details">
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
						<div class="form-group">
							<label>Amount loaned <small>(That you have to payback)</small></label>
							<input type="text" class="form-control" id="name" title="Amount loaned">
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
						<div class="form-group">
							<label>Name of the person or entity who loaned you the money</label>
							<input type="text" class="form-control" id="name" title="Name of the person">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
						<div class="form-group">
							<label>Payback terms <small>(Time period, Interest, etc.)</small></label>
							<input type="text" class="form-control" id="name" title="Payback terms ">
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
						<div class="form-group">
							<label>Purpose of loan</label>
							<input type="text" class="form-control" id="purpose" title="Purpose of loan">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
						<div class="form-group">
							<label>How are youpaying back the currently</label>
							<input type="text" class="form-control" title="How are youpaying back the currently">
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
						<div class="form-group">
							<label>Current Balance <small>(If you know it)</small></label>
							<input type="text" class="form-control" id="pdf" title="Current Balance">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
						<div class="form-group">
							<label>Upload promissory note <small>(or other documents if you have it)</small></label>
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
							<a href="{{ url('/loans/loans_all')}}" title="Continue" class="btn btn-primary">Save</a>
							<!--<input type="submit" title="Save" class="btn btn-primary" value="Save"/>-->
						</div>
						<div class="col-md-6 text-right"> <a href="#" title="Reset" class="btn">Reset</a> </div>
					</div>
				</div>
			</div>
		</div>
@endsection
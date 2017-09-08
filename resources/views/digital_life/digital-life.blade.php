@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li class="active">Digital Life</li>
			</ol>
			<h2>Digital Life</h2>
			<ul class="nav nav-tabs border-tab" role="tablist">
				<li role="presentation" class="active"><a href="#instagram" aria-controls="instagram" role="tab" data-toggle="tab">Instagram</a></li>
				<li role="presentation"><a href="#twitter" aria-controls="twitter" role="tab" data-toggle="tab">Twitter</a></li>
				<li role="presentation"><a href="#facebook" aria-controls="facebook" role="tab" data-toggle="tab">Facebook</a></li>
				<li role="presentation"><a href="#linkedin" aria-controls="linkedin" role="tab" data-toggle="tab">Linkedin</a></li>
				<li role="presentation"><a href="#other" aria-controls="other" role="tab" data-toggle="tab">Other</a></li>
			</ul>
			
			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="instagram">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Instagram account link</label>
								<input type="text" class="form-control" value="https://www.instagram.com/john.h">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Instagram username</label>
								<input type="text" class="form-control" value="john.h">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Instagram password</label>
								<input type="text" class="form-control" value="MyPassword">
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
				<div role="tabpanel" class="tab-pane" id="twitter">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Twitter account link</label>
								<input type="text" class="form-control" value="https://www.twitter.com/john.h">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Twitter username</label>
								<input type="text" class="form-control" value="john.h">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Twitter password</label>
								<input type="text" class="form-control" value="MyPassword">
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
				<div role="tabpanel" class="tab-pane" id="facebook">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Facebook account link</label>
								<input type="text" class="form-control" value="https://www.facebook.com/john.h">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Facebook username</label>
								<input type="text" class="form-control" value="john.h">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Facebook password</label>
								<input type="text" class="form-control" value="MyPassword">
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
				<div role="tabpanel" class="tab-pane" id="linkedin">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Linkedin account link</label>
								<input type="text" class="form-control" placeholder="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Linkedin username</label>
								<input type="text" class="form-control" placeholder="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Linkedin password</label>
								<input type="text" class="form-control" placeholder="">
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
				<div role="tabpanel" class="tab-pane" id="other">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>Other account link</label>
								<input type="text" class="form-control" placeholder="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>username</label>
								<input type="text" class="form-control" placeholder="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<label>password</label>
								<input type="text" class="form-control" placeholder="">
							</div>
						</div>
					</div>
					<div class="btn-row btn-top-spacing">
						<div class="row">
							<div class="col-md-6"> <a href="#" title="Cancel" class="btn">Cancel</a>
								<a href="{{ url('/digitallife/digitallife_all') }}" title="Save" class="btn btn-primary">Save</a>
								<!--<input type="submit" title="Save" class="btn btn-primary" value="Save"/>-->
							</div>
							<div class="col-md-6 text-right"> <a href="#" title="Reset" class="btn">Reset</a> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection 
@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li class="active">Digital Life</li>
			</ol>
			<ul class="top-action-btns">
				<li class="btn-mail"><a href="#" title=""></a></li>
				<li class="btn-print"><a href="#" title=""></a></li>
				<li class="btn-download"><a href="#" title=""></a></li>
			</ul>
			<div class="tab">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#viewall" aria-controls="viewall" role="tab" data-toggle="tab">View All</a></li>
					<li role="presentation"><a href="{{ url('/digitallife/digital_life_instagram')}}">Instagram</a></li>
					<li role="presentation"><a href="#twitter" aria-controls="twitter" role="tab" data-toggle="tab">Twitter</a></li>
					<li role="presentation"><a href="#facebook" aria-controls="facebook" role="tab" data-toggle="tab">Facebook</a></li>
					<li role="presentation"><a href="#linkedin" aria-controls="linkedin" role="tab" data-toggle="tab">Linkedin</a></li>
					<li role="presentation"><a href="#other" aria-controls="other" role="tab" data-toggle="tab">Other</a></li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="viewall">
						<div class="row row-services">
							<div class="col-md-3">
								<div class="box-services services-ligthpink">
									<div class="services-header">
										<h6>Digital Life</h6>
										<h3>Instagram</h3>
									</div>
									<div class="services-content">
										<div class="services-content-row">
											<div class="services-column"> <img src="{{ url('dashboard/img/icon-instagram.png') }}" alt="" title=""/> </div>
											<div class="services-column text-right">
												<ul class="list-number">
													<li>
														<h6>Username</h6>
														<h4>John.H</h4>
													</li>
													<li>
														<h6>Password</h6>
														<h4>Password</h4>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="services-footer">
										<ul class="footer-action">
											<li> <a href="#" class="btn-edit" title="Edit">Edit</a> </li>
											<li> <a href="#" class="btn-delete" title="Delete">Delete</a> </li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="box-services services-skyblue">
									<div class="services-header">
										<h6>Digital Life</h6>
										<h3>Twitter</h3>
									</div>
									<div class="services-content">
										<div class="services-content-row">
											<div class="services-column"> <img src="{{ url('dashboard/img/icon-twitter.png') }}" alt="" title=""/> </div>
											<div class="services-column text-right">
												<ul class="list-number">
													<li>
														<h6>Username</h6>
														<h4>John.H</h4>
													</li>
													<li>
														<h6>Password</h6>
														<h4>Password</h4>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="services-footer">
										<ul class="footer-action">
											<li> <a href="#" class="btn-edit" title="Edit">Edit</a> </li>
											<li> <a href="#" class="btn-delete" title="Delete">Delete</a> </li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="box-services services-purple">
									<div class="services-header">
										<h6>Digital Life</h6>
										<h3>Facebook</h3>
									</div>
									<div class="services-content">
										<div class="services-content-row">
											<div class="services-column"> <img src="{{ url('dashboard/img/icon-facebook.png') }}" alt="" title=""/> </div>
											<div class="services-column text-right">
												<ul class="list-number">
													<li>
														<h6>Username</h6>
														<h4>John.H</h4>
													</li>
													<li>
														<h6>Password</h6>
														<h4>Password</h4>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="services-footer">
										<ul class="footer-action">
											<li> <a href="#" class="btn-edit" title="Edit">Edit</a> </li>
											<li> <a href="#" class="btn-delete" title="Delete">Delete</a> </li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="box-add-charity">
									<div class="add-charity-content"> <a href="#" title="">
										<p><img src="{{ url('dashboard/img/icon-linkedin-small.png') }}" title="linkedin"/></p>
										<h3>Click here to add<span>Linkedin Account</span></h3>
										</a> </div>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="instagram"></div>
					<div role="tabpanel" class="tab-pane" id="twitter"></div>
					<div role="tabpanel" class="tab-pane" id="facebook"></div>
					<div role="tabpanel" class="tab-pane" id="linkedin"></div>
					<div role="tabpanel" class="tab-pane" id="other"></div>
				</div>
			</div>
		</div>
@endsection 
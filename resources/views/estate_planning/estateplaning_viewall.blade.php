@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li class="active">Estate Planning</li>
			</ol>
			<ul class="top-action-btns">
				<li class="btn-mail"><a href="#" title=""></a></li>
				<li class="btn-print"><a href="#" title=""></a></li>
				<li class="btn-download"><a href="#" title=""></a></li>
			</ul>
			<div class="tab">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#viewall" aria-controls="viewall" role="tab" data-toggle="tab">View All</a></li>
					<li role="presentation"><a href="#will" aria-controls="will" role="tab" data-toggle="tab">Will</a></li>
					<li role="presentation"><a href="#trust" aria-controls="trust" role="tab" data-toggle="tab">Trust</a></li>
					<li role="presentation"><a href="#powerofattorney" aria-controls="powerofattorney" role="tab" data-toggle="tab">Power of Attorney</a></li>
					<li role="presentation"><a href="{{ url('/estateplanning/estateplaning_details_trust')}}">Estate Planing Details</a></li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="viewall">
						<div class="row row-services">
							<div class="col-md-3">
								<div class="box-services services-pink">
									<div class="services-header heading-small">
										<h6>Will</h6>
										<h3>Estate Planning Worksheet</h3>
									</div>
									<div class="services-content">
										<div class="services-content-row">
											<div class="services-column"> <img src="{{ url('dashboard/img/icon-estate-planing4-1.png') }}" alt="" title=""/> </div>
											<div class="services-column text-right">
												<ul class="list-number">
													<li>
														<h6>Will created</h6>
														<h4>Online</h4>
													</li>
													<li>
														<h6>Last updated</h6>
														<h4>2016/12/30</h4>
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
								<div class="box-services services-green">
									<div class="services-header">
										<h6>Trust</h6>
										<h3>Successor Trust</h3>
									</div>
									<div class="services-content">
										<div class="services-content-row">
											<div class="services-column"> <img src="{{ url('dashboard/img/icon-estate-planing4-2.png') }}" alt="" title=""/> </div>
											<div class="services-column text-right">
												<ul class="list-number">
													<li>
														<h6>Will created</h6>
														<h4>Online</h4>
													</li>
													<li>
														<h6>Last updated</h6>
														<h4>2016/12/30</h4>
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
									<div class="add-charity-content">
										<h3>Add <span>Estate Planing</span></h3>
										<p><a href="#" title="" class="btn-add">+</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="will"></div>
					<div role="tabpanel" class="tab-pane" id="trust"></div>
					<div role="tabpanel" class="tab-pane" id="powerofattorney"></div>
				</div>
			</div>
		</div>
@endsection 
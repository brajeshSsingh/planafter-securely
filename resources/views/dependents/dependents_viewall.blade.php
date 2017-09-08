@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li class="active">Dependents</li>
			</ol>
			<ul class="top-action-btns">
				<li class="btn-mail"><a href="#" title=""></a></li>
				<li class="btn-print"><a href="#" title=""></a></li>
				<li class="btn-download"><a href="#" title=""></a></li>
			</ul>
			<div class="tab">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#viewall" aria-controls="viewall" role="tab" data-toggle="tab">View All</a></li>
					<li role="presentation"><a href="{{ url('/dependents/dependents_details_childdetails')}}">Child Details</a></li>
					<li role="presentation"><a href="#other" aria-controls="other" role="tab" data-toggle="tab">Other</a></li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="viewall">
						<div class="row row-services">
							<div class="col-md-3">
								<div class="box-services services-yellow">
									<div class="services-header">
										<h6>Child Details</h6>
										<h3>Christian August</h3>
									</div>
									<div class="services-content">
										<div class="services-content-row">
											<div class="services-column"> <img src="{{ url('dashboard/img/icon-child-details.png') }}" alt="" title="" class="img-user"/> </div>
											<div class="services-column text-right">
												<ul class="list-number">
													<li>
														<h6>DOB</h6>
														<h4>2008/06/22</h4>
													</li>
													<li>
														<h6>Place of Birth</h6>
														<h4>Texas</h4>
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
										<h3>Add <span>Dependents</span></h3>
										<p><a href="#" title="" class="btn-add">+</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="childdetails"></div>
					<div role="tabpanel" class="tab-pane" id="other"></div>
				</div>
			</div>
		</div>
@endsection 
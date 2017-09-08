@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li class="active">Insurance</li>
			</ol>
			<ul class="top-action-btns">
				<li class="btn-mail"><a href="#" title=""></a></li>
				<li class="btn-print"><a href="#" title=""></a></li>
				<li class="btn-download"><a href="#" title=""></a></li>
			</ul>
			<div class="tab">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#viewall" aria-controls="viewall" role="tab" data-toggle="tab">View All</a></li>
					<li role="presentation"><a href="#lifeinsurance" aria-controls="lifeinsurance" role="tab" data-toggle="tab">Life Insurance</a></li>
					<li role="presentation"><a href="#disabilityinsurance " aria-controls="disabilityinsurance" role="tab" data-toggle="tab">Disability Insurance</a></li>
					<li role="presentation"><a href="#longtermcare" aria-controls="longtermcare" role="tab" data-toggle="tab">Long-term Care</a></li>
					<li role="presentation"><a href="{{ url('/insurance/insurance_details_life_insurance') }}">Insurance Details</a></li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="viewall">
						<div class="row row-services">
							<div class="col-md-3">
								<div class="box-services services-lightgreen">
									<div class="services-header">
										<h6>Life Insurance</h6>
										<h3>Progressive Insurance</h3>
									</div>
									<div class="services-content">
										<div class="services-content-row">
											<div class="services-column"> <img src="{{ url('dashboard/img/icon-insurance.png') }}" alt="" title=""/> </div>
											<div class="services-column text-right">
												<ul class="list-number">
													<li>
														<h6>Type of Policy</h6>
														<h4>Return of Premuim</h4>
													</li>
													<li>
														<h6>Policy Number</h6>
														<h4>2087852566</h4>
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
										<h3>Add <span>Insurance</span></h3>
										<p><a href="#" title="" class="btn-add">+</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="lifeinsurance"></div>
					<div role="tabpanel" class="tab-pane" id="disabilityinsurance"></div>
					<div role="tabpanel" class="tab-pane" id="longtermcare"></div>
				</div>
			</div>
		</div>
@endsection 
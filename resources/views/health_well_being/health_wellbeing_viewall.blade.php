@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li class="active">Health & Well Being</li>
			</ol>
			<ul class="top-action-btns">
				<li class="btn-mail"><a href="#" title=""></a></li>
				<li class="btn-print"><a href="#" title=""></a></li>
				<li class="btn-download"><a href="#" title=""></a></li>
			</ul>
			<div class="tab">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#viewall" aria-controls="viewall" role="tab" data-toggle="tab">View All</a></li>
					<li role="presentation"><a href="{{ url('/healthwellbeing/health_wellbeing_details_healthinsurance')}}">Health Insurance </a></li>
					<li role="presentation"><a href="#nontraditional" aria-controls="nontraditional" role="tab" data-toggle="tab">Non-Traditional</a></li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="viewall">
						<div class="row row-services">
							<div class="col-md-3">
								<div class="box-services services-orange">
									<div class="services-header">
										<h6>Health Insurance</h6>
										<h3>Aetna Insurance</h3>
									</div>
									<div class="services-content">
										<div class="services-content-row">
											<div class="services-column"> <img src="{{ url('dashboard/img/icon-wellbeing.png') }}" alt="" title=""/> </div>
											<div class="services-column text-right">
												<ul class="list-number">
													<li>
														<h6>Type of Policy</h6>
														<h4>Term</h4>
													</li>
													<li>
														<h6>Policy Number</h6>
														<h4>4542232466</h4>
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
										<h3>Add <span>Health & Well Being</span></h3>
										<p><a href="#" title="" class="btn-add">+</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="healthinsurance"></div>
					<div role="tabpanel" class="tab-pane" id="nontraditional"></div>
				</div>
			</div>
		</div>
@endsection 
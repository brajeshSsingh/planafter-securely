@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li class="active">Assets</li>
			</ol>
			<ul class="top-action-btns">
				<li class="btn-mail"><a href="#" title=""></a></li>
				<li class="btn-print"><a href="#" title=""></a></li>
				<li class="btn-download"><a href="#" title=""></a></li>
			</ul>
			<div class="tab">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#viewall" aria-controls="viewall" role="tab" data-toggle="tab">View All</a></li>
					<li role="presentation"><a href="#carsartworkinvestments" aria-controls="carsartworkinvestments" role="tab" data-toggle="tab">Cars, Artwork, Investments</a></li>
					<li role="presentation"><a href="#realestate" aria-controls="realestate" role="tab" data-toggle="tab">Real Estate</a></li>
					<li role="presentation"><a href="#jewelrypursesetc" aria-controls="jewelrypursesetc" role="tab" data-toggle="tab">Jewelry, Purses, etc</a></li>
					<li role="presentation"><a href="{{ url('/assets/assets_details_car')}}">Assets Details Car</a></li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="viewall">
						<div class="row row-services">
							<div class="col-md-3">
								<div class="box-services services-yellow">
									<div class="services-header">
										<h6>Cars</h6>
										<h3>Rolls Royce</h3>
									</div>
									<div class="services-content">
										<div class="services-content-row">
											<div class="services-column">
												<div class="car-icon"> <img src="{{ url('dashboard/img/icon-cars.png') }}" alt="" title="" class="img-user"/> </div>
											</div>
											<div class="services-column text-right">
												<ul class="list-number">
													<li>
														<h6>Model Number</h6>
														<h4>2017- VSD212</h4>
													</li>
													<li>
														<h6>Color</h6>
														<div class="color-pickbox color-pickbox-small pull-right"> <span class="color-black color-black"></span> </div>
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
								<div class="box-services services-darkpurple">
									<div class="services-header">
										<h6>Real Estate</h6>
										<h3>Cooper Square</h3>
									</div>
									<div class="services-content">
										<div class="services-content-row">
											<div class="services-column"> <img src="{{ url('dashboard/img/icon-cooper.png') }}" alt="" title=""/> </div>
											<div class="services-column text-right">
												<ul class="list-number">
													<li>
														<h6>Type of Property</h6>
														<h4>Resident</h4>
													</li>
													<li>
														<h6>Purchase Price</h6>
														<h4 class="f20">$924,377</h4>
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
								<div class="box-services services-pink">
									<div class="services-header">
										<h6>Real Estate</h6>
										<h3>Quantum Digital</h3>
									</div>
									<div class="services-content">
										<div class="services-content-row">
											<div class="services-column"> <img src="{{ url('dashboard/img/icon-digial.png') }}" alt="" title=""/> </div>
											<div class="services-column text-right">
												<ul class="list-number">
													<li>
														<h6>Type of Property</h6>
														<h4>Commercial</h4>
													</li>
													<li>
														<h6>Purchase Price</h6>
														<h4 class="f20">$924,377</h4>
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
								<div class="box-services services-darkgreen">
									<div class="services-header">
										<h6>Artwork</h6>
										<h3>The Scream</h3>
									</div>
									<div class="services-content">
										<div class="services-content-row">
											<div class="services-column">
												<div class="car-icon"> <img src="{{ url('dashboard/img/icon-scream.png') }}" alt="" title="" class="img-user"/> </div>
											</div>
											<div class="services-column text-right">
												<ul class="list-number">
													<li>
														<h6>Artist</h6>
														<h4>Edvard Munch</h4>
													</li>
													<li>
														<h6>Year</h6>
														<h4>1983</h4>
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
						</div>
						<div class="row row-services">
							<div class="col-md-3">
								<div class="box-services services-green">
									<div class="services-header">
										<h6>Jewelry</h6>
										<h3>Diamond Ring</h3>
									</div>
									<div class="services-content">
										<div class="services-content-row">
											<div class="services-column"> <img src="{{ url('dashboard/img/icon-ring.png') }}" alt="" title=""/> </div>
											<div class="services-column text-right">
												<ul class="list-number">
													<li>
														<h6>Metal Type</h6>
														<h4>White Gold</h4>
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
										<h3>Add a<span>New Asset</span></h3>
										<p><a href="#" title="" class="btn-add">+</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="carsartworkinvestments"></div>
					<div role="tabpanel" class="tab-pane" id="realestate">
						<div class="row row-services">
							<div class="col-md-3">
								<div class="box-services services-darkpurple">
									<div class="services-header">
										<h6>Real Estate</h6>
										<h3>Cooper Square</h3>
									</div>
									<div class="services-content">
										<div class="services-content-row">
											<div class="services-column"> <img src="{{ url('dashboard/img/icon-cooper.png') }}" alt="" title=""/> </div>
											<div class="services-column text-right">
												<ul class="list-number">
													<li>
														<h6>Type of Property</h6>
														<h4>Resident</h4>
													</li>
													<li>
														<h6>Purchase Price</h6>
														<h4 class="f20">$924,377</h4>
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
								<div class="box-services services-pink">
									<div class="services-header">
										<h6>Real Estate</h6>
										<h3>Quantum Digital</h3>
									</div>
									<div class="services-content">
										<div class="services-content-row">
											<div class="services-column"> <img src="{{ url('dashboard/img/icon-digial.png') }}" alt="" title=""/> </div>
											<div class="services-column text-right">
												<ul class="list-number">
													<li>
														<h6>Type of Property</h6>
														<h4>Commercial</h4>
													</li>
													<li>
														<h6>Purchase Price</h6>
														<h4 class="f20">$924,377</h4>
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
										<h3>Add New<span>Real Estate</span></h3>
										<p><a href="#" title="" class="btn-add">+</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="jewelrypursesetc"></div>
				</div>
			</div>
		</div>
@endsection 
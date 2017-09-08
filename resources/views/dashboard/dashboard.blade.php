@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
			<h2>Hi John, Welcome back.</h2>
			<div class="row row-services">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="box-services services-orange">
								<div class="services-header">
									<h6>Updated Jan 21, 2017</h6>
									<h3>Financial Accounts</h3>
								</div>
								<div class="services-content">
									<div class="services-content-row">
										<div class="services-column"> <img src="{{ url('dashboard/img/icon-financial-accounts.png') }}" alt="" title=""/> </div>
										<div class="services-column text-right">
											<ul class="list-number">
												<li>
													<h2>02</h2>
													<h5>Bank Accounts</h5>
												</li>
												<li>
													<h2>01</h2>
													<h5>Credit Card</h5>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="services-footer text-center"> <a href="#" title="" class="btn-refresh">Refresh</a> </div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box-services services-purple">
								<div class="services-header">
									<h6>Updated Jan 21, 2017</h6>
									<h3>Insurance</h3>
								</div>
								<div class="services-content">
									<div class="services-content-row">
										<div class="services-column"> <img src="{{ url('dashboard/img/icon-insurance-purple.png') }}" alt="" title=""/> </div>
										<div class="services-column text-right">
											<ul class="list-number">
												<li>
													<h2>01</h2>
													<h5>Life Insurance</h5>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="services-footer text-center"> <a href="#" title="" class="btn-refresh">Refresh</a> </div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="box-services services-yellow">
								<div class="services-header">
									<h6>Updated Jan 21, 2017</h6>
									<h3>Digital Life</h3>
								</div>
								<div class="services-content">
									<div class="services-content-row">
										<div class="services-column services-column-full text-center">
											<ul class="list-socialMedia">
												<li> <a href="#" title="instagram"> <img src="{{ url('dashboard/img/icon-instagram.png') }}" alt="" title=""/> Instagram </a> </li>
												<li> <a href="#" title="twitter"> <img src="{{ url('dashboard/img/icon-twitter.png') }}" alt="" title=""/> Twitter </a> </li>
												<li> <a href="#" title="facebook"> <img src="{{ url('dashboard/img/icon-facebook.png') }}" alt="" title=""/> Facebook </a> </li>
												<li> <a href="#" title="linkedin"> <img src="{{ url('dashboard/img/icon-linkedin.png') }}" alt="" title=""/> Linkedin </a> </li>
											</ul>
										</div>
									</div>
								</div>
								<div class="services-footer text-center"> <a href="#" title="" class="btn-refresh">Refresh</a> </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">
							<div class="box-services services-green">
								<div class="services-header">
									<h6>Updated Jan 21, 2017</h6>
									<h3>Assets</h3>
								</div>
								<div class="services-content services-assets">
									<div class="services-content-row">
										<div class="services-column services-column-full text-center">
											<p><img src="{{ url('dashboard/img/icon-assets-1.png') }}" alt="" title=""/></p>
											<ul class="list-number">
												<li>
													<h2>02</h2>
													<h5>Cars</h5>
												</li>
												<li>
													<h2>03</h2>
													<h5>Real Estate</h5>
												</li>
												<li>
													<h2>12</h2>
													<h5>Jewelry</h5>
												</li>
											</ul>
											<p class="no-space"><img src="{{ url('dashboard/img/icon-assets-2.png') }}" alt="" title=""/></p>
										</div>
									</div>
								</div>
								<div class="services-footer text-center"> <a href="#" title="" class="btn-refresh">Refresh</a> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection            
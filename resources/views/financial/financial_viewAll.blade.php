@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li class="active">Financial Accounts</li>
			</ol>
			<ul class="top-action-btns">
				<li class="btn-mail"><a href="#" title=""></a></li>
				<li class="btn-print"><a href="#" title=""></a></li>
				<li class="btn-download"><a href="#" title=""></a></li>
			</ul>
			<div class="tab">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#viewall" aria-controls="viewall" role="tab" data-toggle="tab">View All</a></li>
					<li role="presentation"><a href="#bankaccounts" aria-controls="bankaccounts" role="tab" data-toggle="tab">Bank Accounts</a></li>
					<li role="presentation"><a href="#creditcards" aria-controls="creditcards" role="tab" data-toggle="tab">Credit Cards</a></li>
					<li role="presentation"><a href="#investmentaccount" aria-controls="investmentaccount" role="tab" data-toggle="tab">Investment Account</a></li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="viewall">
						<div class="row row-services">
							<div class="col-md-3">
								<div class="box-services services-orange">
									<div class="services-header">
										<h6>Bank Account</h6>
										<h3>Saving Account (...8546)</h3>
									</div>
									<div class="services-content">
										<div class="services-content-row financial-content-row">
											<div class="services-column">
												<div class="services-column-inner">
													<div class="frow">
														<div><img src="img/icon-bank-of-america.png" alt="" title=""/></div>
														<div>
															<h6>Bank of America</h6>
														</div>
													</div>
												</div>
											</div>
											<div class="services-column">
												<div class="services-column-inner">
													<ul class="list-number text-right">
														<li>
															<h6>Current Balance</h6>
															<h4 class="f24 no-space">$76,889.00</h4>
														</li>
													</ul>
												</div>
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
										<h6>Bank Account</h6>
										<h3>Saving Account (...4556)</h3>
									</div>
									<div class="services-content">
										<div class="services-content-row financial-content-row">
											<div class="services-column">
												<div class="services-column-inner">
													<div class="frow">
														<div><img src="img/icon-wells-fargo.png" alt="" title=""/></div>
														<div>
															<h6>Wells Fargo</h6>
														</div>
													</div>
												</div>
											</div>
											<div class="services-column">
												<div class="services-column-inner">
													<ul class="list-number text-right">
														<li>
															<h6>Current Balance</h6>
															<h4 class="f24 no-space">$76,889.00</h4>
														</li>
													</ul>
												</div>
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
										<h6>Credit Card</h6>
										<h3>Amex (...8879)</h3>
									</div>
									<div class="services-content">
										<div class="services-content-row financial-content-row">
											<div class="services-column">
												<div class="services-column-inner">
													<div class="frow">
														<div><img src="img/icon-american-express.png" alt="" title=""/></div>
														<div>
															<h6>American Express</h6>
														</div>
													</div>
												</div>
											</div>
											<div class="services-column">
												<div class="services-column-inner">
													<ul class="list-number text-right">
														<li>
															<h6>Current Balance</h6>
															<h4 class="f24 no-space">$23,663.00</h4>
														</li>
													</ul>
												</div>
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
										<h3>Add New<span>Bank Account</span></h3>
										<p><a href="#" title="" class="btn-add">+</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="bankaccounts">
						<div class="row row-services">
							<div class="col-md-3">
								<div class="box-services services-orange">
									<div class="services-header">
										<h6>Bank Account</h6>
										<h3>Saving Account (...8546)</h3>
									</div>
									<div class="services-content">
										<div class="services-content-row financial-content-row">
											<div class="services-column">
												<div class="services-column-inner">
													<div class="frow">
														<div><img src="img/icon-bank-of-america.png" alt="" title=""/></div>
														<div>
															<h6>Bank of America</h6>
														</div>
													</div>
												</div>
											</div>
											<div class="services-column">
												<div class="services-column-inner">
													<ul class="list-number text-right">
														<li>
															<h6>Current Balance</h6>
															<h4 class="f24 no-space">$76,889.00</h4>
														</li>
													</ul>
												</div>
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
										<h6>Bank Account</h6>
										<h3>Saving Account (...4556)</h3>
									</div>
									<div class="services-content">
										<div class="services-content-row financial-content-row">
											<div class="services-column">
												<div class="services-column-inner">
													<div class="frow">
														<div><img src="img/icon-wells-fargo.png" alt="" title=""/></div>
														<div>
															<h6>Wells Fargo</h6>
														</div>
													</div>
												</div>
											</div>
											<div class="services-column">
												<div class="services-column-inner">
													<ul class="list-number text-right">
														<li>
															<h6>Current Balance</h6>
															<h4 class="f24 no-space">$76,889.00</h4>
														</li>
													</ul>
												</div>
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
										<h3>Add New<span>Bank Account</span></h3>
										<p><a href="#" title="" class="btn-add">+</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="creditcards"></div>
					<div role="tabpanel" class="tab-pane" id="investmentaccount"></div>
				</div>
			</div>
		</div>
@endsection 
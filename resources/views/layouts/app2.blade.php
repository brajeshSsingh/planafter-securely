<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="{{ config('app.locale') }}">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="icon" type="image/png" href="favicon.png">
		<title>Plan Securely</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" href="{!! asset('dashboard/bower_components/font-awesome-4.7.0/css/font-awesome.min.css') !!}">
		<link rel="stylesheet" href="{!! asset('dashboard/bower_components/bootstrap-select-master/dist/css/bootstrap-select.min.css') !!}">
		<link rel="stylesheet" href="{!! asset('dashboard/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') !!}" />
		<link rel="stylesheet" href="{!! asset('dashboard/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}">
		<link rel="stylesheet" href="{!! asset('dashboard/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') !!}">
		<link rel="stylesheet" href="{!! asset('dashboard/css/main.css') !!}">
		<!-- Scripts -->
		<script>
			window.Laravel = {!! json_encode([
				'csrfToken' => csrf_token(),
			]) !!};
		</script>
	</head>
	<body>
	<div class="page-wrapper" id="app">
		<div class="page-header">
			<div class="page-logo"> <a href="{{ url('user/dashboard') }}" title="Plan Securely"><img src="{{ url('dashboard/img/logo.png') }}" alt="Plan Securely" title="Plan Securely"/></a> </div>
			<div class="btn-menu"><a href="#" title=""></a></div>
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="{{ url('user/dashboard') }}" title="Dashboard" style="@foreach (explode('/', Request::url()) as $page) @if($loop->count >= 6 && $loop->iteration == 6) {{ $page == 'user' ? 'color:#4f72ff' : '' }} @endif @if($loop->count >= 4 && $loop->iteration == 4) {{ $page == 'user' ? 'color:#4f72ff' : '' }} @endif @endforeach">Dashboard</a></li>
						<li><a href="{{ url('user/advisors') }}" title="Advisors">Advisors</a></li>
						<li><a href="{{ url('user/resources') }}" title="Resources">Resources</a></li>
						<li><a href="{{ url('user/help') }}" title="Help">Help</a></li>
					</ul>
				</div>
			</nav>
			<div class="pull-right right-menu">
				<ul class="list-notification">
					<li class="icon-notification dropdown"> <a href="#" title="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="notification-no">3</span> </a>
						<ul class="dropdown-menu dropdown-notification">
							<li>
								<div class="frow">
									<div><img src="{{ url('dashboard/img/img-key.png') }}" alt="" title=""/> </div>
									<div>
										<h6>Your account password has been changed</h6>
										<span class="text-date">Yesterday 10:23 Pm</span> </div>
								</div>
							</li>
							<li>
								<div class="frow">
									<div><img src="{{ url('dashboard/img/img-user-2.png') }}" alt="" title=""/> </div>
									<div>
										<h6>Advisor <span class="text-purpal">Keith Davis</span> made changes in your account <span class="text-purpal">Health &amp; Well Being</span> details</h6>
										<span class="text-date">Jun 18, 10:23 Pm</span> </div>
								</div>
							</li>
							<li>
								<div class="frow">
									<div><img src="{{ url('dashboard/img/img-user-2.png') }}" alt="" title=""/> </div>
									<div>
										<h6>Advisor <span class="text-purpal">Keith Davis</span> made changes in your account <span class="text-purpal">Estate Planning </span> details</h6>
										<span class="text-date">Jun 18, 9:15 Pm</span> </div>
								</div>
							</li>
						</ul>
					</li>
					<li class="icon-chat chat-dropdown dropdown"> <a href="#" title="Chat" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
						<div class="dropdown-menu">
							<div class="chat-leftColumn">
								<div class="chat-header">
									<h3>Keith Davis</h3>
								</div>
								<div class="chat-content">
									<ul class="list-chat">
										<li class="chat-support">
											<div class="chat-inner-content">
												<p>Hi Keith,</p>
												<p>How things going?</p>
												<span class="chat-time">10:01am</span> </div>
										</li>
										<li class="chat-user">
											<div class="chat-inner-content">
												<p>Hello John,</p>
												<p>Yes, I'm going through your account now. Give me some time and I will catch you back here soon.</p>
												<span class="chat-time">10:02am</span> </div>
										</li>
										<li class="chat-support">
											<div class="chat-inner-content">
												<p>Okei, Great. Thank you!!</p>
												<span class="chat-time">10:01am</span> </div>
										</li>
										<li class="chat-user">
											<div class="chat-inner-content">
												<p>Thanks John</p>
												<span class="chat-time">10:02am</span> </div>
										</li>
									</ul>
								</div>
								<div class="chat-footer">
									<div class="form-group">
										<input type="text" class="form-control">
										<button class="btn-send"></button>
									</div>
								</div>
							</div>
							<div class="chat-rightColumn">
								<ul class="list-status">
									<li>
										<div class="user-stauts"> <a href="#" > <span class="box-status online"></span> <img src="{{ ('dashboard/img/img-user-2.png') }}" alt="" title=""/> </a> </div>
									</li>
									<li><a href="{{ url('user/dashboard') }}" title="" class="btn-add">+</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li class="icon-more dropdown"> <a href="#" title="More" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
						<ul class="dropdown-menu dropdown-more">
							<li><a href="{{ url('user/add_reporting') }}" title="Reporting Feature">Reporting Feature</a></li>
						</ul>
					</li>
				</ul>
				<div class="dropdown-user"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <img src="{{ url('dashboard/img/img-user.png') }}" alt="" title=""/>
					<h6>John Heitinga</h6>
					<i class="fa fa-angle-down" aria-hidden="true"></i> </a>
					<ul class="dropdown-menu">
						<li><a href="{{ url('profile/setting') }}">John Heitinga <span class="text-mail">username@email.com</span></a></li>
						<li role="separator" class="divider"></li>
						<li><a href="{{ url('user/my_account') }}" title="My Account">My Account</a></li>
						<li><a href="{{ url('user/setting') }}" title="Settings">Settings</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="{{ url('/user/logout') }}" title="Sign out" class="text-red">Sign out</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row-column">
			<div class="leftColumn">
				<div class="main-navigation">
					<div class="visible-xs">
						<ul class="nav navbar-nav">
							<li class="@foreach (explode('/', Request::url()) as $page) @if($loop->count >= 6 && $loop->iteration == 6) {{ $page == 'user' ? 'active' : '' }} @endif @if($loop->count >= 4 && $loop->iteration == 4) {{ $page == 'user' ? 'active' : '' }} @endif @endforeach"><a href="{{ url('user/dashboard') }}" title="Dashboard">Dashboard</a></li>
							<li><a href="{{ url('user/advisors') }}" title="Advisors">Advisors</a></li>
							<li><a href="{{ url('user/resources') }}" title="Resources">Resources</a></li>
							<li><a href="{{ url('user/help') }}" title="Help">Help</a></li>
						</ul>
					</div>
					<ul class="menu-leftColumn">
						<li class="icon-financial @foreach (explode('/', Request::url()) as $page) @if($loop->count >= 6 && $loop->iteration == 6) {{ $page == 'financial' ? 'active' : '' }} @endif @if($loop->count >= 4 && $loop->iteration == 4) {{ $page == 'financial' ? 'active' : '' }} @endif @endforeach"><a href="{{ url('/financial') }}" title="Financial Accounts<">Financial Accounts</a></li>
						
						<li class="icon-assets @foreach (explode('/', Request::url()) as $page) @if($loop->count >= 6 && $loop->iteration == 6) {{ $page == 'assets' ? 'active' : '' }} @endif @if($loop->count >= 4 && $loop->iteration == 4) {{ $page == 'assets' ? 'active' : '' }} @endif @endforeach"><a href="{{ url('/assets') }}" title="Assets">Assets</a></li>
						
						<li class="icon-loans @foreach (explode('/', Request::url()) as $page) @if($loop->count >= 6 && $loop->iteration == 6) {{ $page == 'loans' ? 'active' : '' }} @endif @if($loop->count >= 4 && $loop->iteration == 4) {{ $page == 'loans' ? 'active' : '' }} @endif @endforeach"><a href="{{ url('/loans') }}" title="Loans">Loans</a></li>
						
						<li class="icon-insurance @foreach (explode('/', Request::url()) as $page) @if($loop->count >= 6 && $loop->iteration == 6) {{ $page == 'insurance' ? 'active' : '' }} @endif @if($loop->count >= 4 && $loop->iteration == 4) {{ $page == 'insurance' ? 'active' : '' }} @endif @endforeach"><a href="{{ url('/insurance') }}" title="Insurance">Insurance</a></li>
						
						<li class="icon-digital @foreach (explode('/', Request::url()) as $page) @if($loop->count >= 6 && $loop->iteration == 6) {{ $page == 'digitallife' ? 'active' : '' }} @endif @if($loop->count >= 4 && $loop->iteration == 4) {{ $page == 'digitallife' ? 'active' : '' }} @endif @endforeach"><a href="{{ url('/digitallife') }}" title="Digital Life">Digital Life</a></li>
						
						<li class="icon-health @foreach (explode('/', Request::url()) as $page) @if($loop->count >= 6 && $loop->iteration == 6) {{ $page == 'healthwellbeing' ? 'active' : '' }} @endif @if($loop->count >= 4 && $loop->iteration == 4) {{ $page == 'healthwellbeing' ? 'active' : '' }} @endif @endforeach"><a href="{{ url('/healthwellbeing') }}" title="Health &amp; Well Being">Health &amp; Well Being </a></li>
						
						<li class="icon-dependents @foreach (explode('/', Request::url()) as $page) @if($loop->count >= 6 && $loop->iteration == 6) {{ $page == 'dependents' ? 'active' : '' }} @endif @if($loop->count >= 4 && $loop->iteration == 4) {{ $page == 'dependents' ? 'active' : '' }} @endif @endforeach"><a href="{{ url('/dependents') }}" title="Dependents">Dependents</a></li>
						
						<li class="icon-estate @foreach (explode('/', Request::url()) as $page) @if($loop->count >= 6 && $loop->iteration == 6) {{ $page == 'estateplanning' ? 'active' : '' }} @endif @if($loop->count >= 4 && $loop->iteration == 4) {{ $page == 'estateplanning' ? 'active' : '' }} @endif @endforeach"><a href="{{ url('/estateplanning') }}" title="Estate Planning">Estate Planning</a></li>
						
						<li class="icon-legacy @foreach (explode('/', Request::url()) as $page) @if($loop->count >= 6 && $loop->iteration == 6) {{ $page == 'legacyplan' ? 'active' : '' }} @endif @if($loop->count >= 4 && $loop->iteration == 4) {{ $page == 'legacyplan' ? 'active' : '' }} @endif @endforeach"><a href="{{ url('/legacyplan') }}" title="Legacy Plan">Legacy Plan</a></li>
						
						<li class="icon-eldercare @foreach (explode('/', Request::url()) as $page) @if($loop->count >= 6 && $loop->iteration == 6) {{ $page == 'eldercare' ? 'active' : '' }} @endif @if($loop->count >= 4 && $loop->iteration == 4) {{ $page == 'eldercare' ? 'active' : '' }} @endif @endforeach"><a href="{{ url('/eldercare') }}" title="Eldercare">Eldercare</a></li>
						
						<li class="icon-taxes @foreach (explode('/', Request::url()) as $page) @if($loop->count >= 6 && $loop->iteration == 6) {{ $page == 'taxescredit' ? 'active' : '' }} @endif @if($loop->count >= 4 && $loop->iteration == 4) {{ $page == 'taxescredit' ? 'active' : '' }} @endif @endforeach"><a href="{{ url('/taxescredit') }}" title="Taxes &amp; Credit">Taxes &amp; Credit</a></li>
						
						<li class="icon-charity @foreach (explode('/', Request::url()) as $page) @if($loop->count >= 6 && $loop->iteration == 6) {{ $page == 'charitygiving' ? 'active' : '' }} @endif @if($loop->count >= 4 && $loop->iteration == 4) {{ $page == 'charitygiving' ? 'active' : '' }} @endif @endforeach"><a href="{{ url('/charitygiving') }}" title="Charity &amp; Giving">Charity &amp; Giving</a></li>
					</ul>
				</div>
			</div>	

			<section id="main-content">
			
				@yield('content')
		
			</section>

					<div class="page-footer">
						<p>&copy; PlanSecurely 2017</p>
					</div>
				</div>
			</div>
		</div>
		<script src="{!! asset('dashboard/bower_components/jquery/dist/jquery.min.js') !!}"></script> 
		<script src="{!! asset('dashboard/bower_components/eonasdan-bootstrap-datetimepicker/build/js/moment.min.js') !!}"></script>
		<script src="{!! asset('dashboard/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script> 
		<script src="{!! asset('dashboard/bower_components/bootstrap-select-master/dist/js/bootstrap-select.min.js') !!}"></script> 
		<script type="text/javascript" src="{!! asset('dashboard/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') !!}"></script> 
		<script src="{!! asset('dashboard/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') !!}"></script> 
		<script src="{!! asset('dashboard/js/main.js') !!}"></script> 
		<script type="text/javascript">	
		  $(function(){	
				$('#datetimepicker2').datetimepicker({
						format: 'YYYY/MM/DD', 
						allowInputToggle: true
					});
			});
		</script>
	</body>
</html>
	

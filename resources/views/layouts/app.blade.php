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
		<link rel="stylesheet" href="{!! asset('questionnaire/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}">
		<link rel="stylesheet" href="{!! asset('questionnaire/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') !!}" />
		<link rel="stylesheet" href="{!! asset('questionnaire/bower_components/font-awesome-4.7.0/css/font-awesome.min.css') !!}">
		<link rel="stylesheet" href="{!! asset('questionnaire/bower_components/bootstrap-select-master/dist/css/bootstrap-select.min.css') !!}">
		<link rel="stylesheet" href="{!! asset('questionnaire/css/main.css') !!}">
		<!-- Scripts -->
		<script>
			window.Laravel = {!! json_encode([
				'csrfToken' => csrf_token(),
			]) !!};
		</script>
	</head>
	<body>
		<div class="page-wrapper" id="app">
			<div class="page-header border-remove">
				<div class="container">
					<div class="page-logo"> <a href="{{ url('/') }}" title="Plan Securely"><img src="{{ url('questionnaire/img/logo.png') }}" alt="Plan Securely" title="Plan Securely"/></a> </div>
				</div>
			</div>
			<!--header end-->
			<!--main content start-->
			<section id="main-content">
			
				@yield('content')
		
			</section>

			<div class="page-footer">
					<div class="container">
						<ul class="footer-list">
							<li><a href="#" title="Question?">Question?</a></li>
							<li><a href="#" title="Support Centre">Support Centre</a></li>
							<li><a href="tel:8888889999" title="888-888-9999">888-888-9999</a></li>
							<li><a href="mailto:support@plansecurely.com" title="support@plansecurely.com">support@plansecurely.com</a></li>
						</ul>
					</div>
				</div>
			</div>
		<script src="{!! asset('questionnaire/bower_components/jquery/dist/jquery.min.js') !!}"></script> 
		<script src="{!! asset('questionnaire/bower_components/eonasdan-bootstrap-datetimepicker/build/js/moment.min.js') !!}"></script> 
		<script src="{!! asset('questionnaire/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script> 
		<script src="{!! asset('questionnaire/bower_components/bootstrap-select-master/dist/js/bootstrap-select.min.js') !!}"></script>
		<script type="text/javascript" src="{!! asset('questionnaire/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') !!}"></script>
		<script src="{!! asset('questionnaire/js/main.js') !!}"></script>
		<script type="text/javascript">	
		   $(document).ready(function () {
				$('#datetimepicker1').datetimepicker({
					format: 'YYYY/MM/DD', 
					allowInputToggle: true
				});
			});
		</script>
	</body>
</html>
	

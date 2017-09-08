@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li><a href="{{ url('/charitygiving') }}">Charity &amp; Giving </a></li>
				<li class="active">Charity &amp; Giving Details</li>
			</ol>
			<ul class="top-action-btns">
				<li class="btn-print"><a href="#" title=""></a></li>
				<li class="btn-edit"><a href="#" title=""></a></li>
				<li class="btn-delete"><a href="#" title=""></a></li>
			</ul>
			<h2>Charity &amp; Giving Details</h2>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
					<div class="form-group">
						<p class="text-light no-space">Do you regularly give to a charitable organization or volunteer? <span class="text-block">If so whats is the organisation.</span></p>
						<h3 class="f20">NO</h3>
					</div>
				</div>
			</div>
		</div>
@endsection 
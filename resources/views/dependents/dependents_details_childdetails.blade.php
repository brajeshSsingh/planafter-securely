@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li><a href="{{ url('/dependents') }}">Dependents</a></li>
				<li class="active">Child Details</li>
			</ol>
			<ul class="top-action-btns">
				<li class="btn-print"><a href="#" title=""></a></li>
				<li class="btn-edit"><a href="#" title=""></a></li>
				<li class="btn-delete"><a href="#" title=""></a></li>
			</ul>
			<h2>Dependents Child Details</h2>
			<div class="form-details">
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>First name</label>
							<h3>Christian</h3>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>Last name</label>
							<h3>August</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>DOB</label>
							<h3>2008/06/22</h3>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>Place of birth</label>
							<h3>Texas</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>Attachments</label>
						</div>
						<ul class="list-attachments">
							<li>
								<div class="box-attachments"> <a href="#" title=""> <img src="{{ url('dashboard/img/icon-pdf.png') }}" alt="" title=""/> Download </a> </div>
							</li>
							<li>
								<div class="box-attachments"> <a href="#" title=""> <img src="{{ url('dashboard/img/icon-jpg.png') }}" alt="" title=""/> Download </a> </div>
							</li>
						</ul>
					</div>
					<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
						<div class="form-group">
							<label>Social security number</label>
							<h3>CA5544</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection 
@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<ol class="breadcrumb">
				<li><a href="{{ url('/user') }}">Home</a></li>
				<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
				<li><a href="{{ url('/taxescredit') }}">Taxes</a></li>
				<li class="active">Tax Returns</li>
			</ol>
			<ul class="top-action-btns">
				<li class="btn-print"><a href="#" title=""></a></li>
				<li class="btn-edit"><a href="#" title=""></a></li>
				<li class="btn-delete"><a href="#" title=""></a></li>
			</ul>
			<h2>Tax Returns</h2>
			<div class="row">
				<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
					<div class="form-group">
						<div class="dropdown-property">
							<label>How do you prepare for taxes?</label>
							<h3>Tax Prepare/CPA</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
					<div class="form-group">
						<label>Attachments - Copies of most recent tax returns</label>
					</div>
					<ul class="list-attachments">
						<li>
							<div class="box-attachments"> <a href="#" title=""> <img src="{{ url('dashboard/img/icon-pdf.png') }}" alt="" title=""> Download </a> </div>
						</li>
						<li>
							<div class="box-attachments"> <a href="#" title=""> <img src="{{ url('dashboard/img/icon-pdf.png') }}" alt="" title=""> Download </a> </div>
						</li>
					</ul>
				</div>
			</div>
		</div>
@endsection
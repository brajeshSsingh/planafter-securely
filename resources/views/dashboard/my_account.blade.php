@extends('layouts.app2')

@section('content')
	<div class="rightColumn">
		<div class="box-content">
			<div class="form-details profile-page">
				<div class="client-detail">
					<div class="client-image"> <img src="{{ url('dashboard/img/client-image.png') }}" title="client-photo"/> </div>
					<div class="client-name">
						<h2>John Heitinga</h2>
						<h4>Hostan, Texas</h4>
					</div>
					<div class="profile-edit-btn">
						<button class="btn" type="button">Edit</button>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
						<div class="form-group">
							<label for="name">Name</label>
							<h3>John Heiitinga</h3>
						</div>
					</div>
					<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
						<div class="form-group">
							<label for="email">Email</label>
							<h3>username@email.com</h3>
						</div>
					</div>
					<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
						<div class="form-group">
							<label for="pwd">Password</label>
							<h3>●●●●●●●●</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
						<div class="form-group">
							<label for="contact">Phone</label>
							<h3>(251) 546-9442</h3>
						</div>
					</div>
					<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
						<div class="form-group">
							<label for="dob">DOB</label>
							<h3>02/23/1976</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
						<div class="form-group">
							<label for="add">Address</label>
							<h3 class="add-line-height">71 Pilgrim Avenue<br/>
								Huston, TX 20815</h3>
						</div>
					</div>
					<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
						<div class="form-group">
							<label for="gender">Gender</label>
							<h3>Male</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection 
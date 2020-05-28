@section('title','Edit User')
@extends('admin.layouts.app')
@section('toiletuser.profile')

	<section>
		<div class="content-header">
	<div class="container-fluid pt-2">
		<div class="col-xl-auto order-xl-1">
			<div class="card">
				<div class="card-header">
					<div class="row align-items-center">
						<div class="col-lg-auto">
							<h3 class="mb-0">Personal Details of <b>{{ $name }}</b></h3>
						</div>
						<div class="col d-flex justify-content-end" title="User id is a fixed attribute, thus can't be changed">
							<h4 class="mb-0">User ID-<b>{{ $user->id }}</b></h4>
						</div>
					</div>
				</div>
				<div class="card-body">
					<h6 class="heading-small text-muted mb-4">Login information</h6>
					<form action="{{ route('a.toiletusers.update',$user->id) }}" method="POST">
						@method('PUT') @csrf
						<div class="pl-lg-4">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label" for="name">Name</label>
										<input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{$user->name}}"><!--  Name -->
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label" for="email">Email address</label>
										<input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{$user->email}}"><!-- Email -->
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg">
									<div class="form-group">
										<label class="form-control-label" for="password">Password Hash</label>
										<input type="text" id="password" name="password" class="form-control" placeholder="Hash value" value="{{$user->password}}">
										<span class="text-muted">This is not the actual password, this is a hash value of registered password</span>
									</div>
								</div>
							</div>
						</div>
						<hr class="my-2" />
						<!-- Address -->
						<h6 class="heading-small text-muted mb-4">Contact information</h6>
						<div class="pl-lg-4">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="form-control-label" for="mobileno">Contact no</label>
										<input type="text" id="mobileno" name="mobileno" class="form-control" placeholder="Contact" value="{{$user->mobileno}}"><!-- Owner Contact No. -->
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="form-control-label" for="gender">Gender</label>
										<select class="custom-select" id="gender" name="gender">
											<option value="1" {{ $user->gender=='1' ? 'selected':'' }}>Male</option>
											<option value="0" {{ $user->gender=='0' ? 'selected':'' }}>Female</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="form-control-label" for="age">Age</label>
										<input id="age" class="form-control" name="age"  placeholder="Age" value="{{$user->age}}" type="text"><!-- Owner Address -->
									</div>
								</div>
							</div>
							<button type="submit" id="updatebtn" name="updatebtn" class="btn btn-primary">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>

	</section>
@endsection

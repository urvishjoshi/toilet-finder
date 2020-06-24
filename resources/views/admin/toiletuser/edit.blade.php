@section('title','Edit User')
@extends('admin.layouts.app')
@section('toiletuser.profile')

<section>
	<div class="container pt-4">
		<div class="container col-md-auto">
			<div class="row">
				<div class="col-md-1 d-flex align-items-start flex-column">
						<a href="{{ url()->previous() }}" class="fas fa-arrow-left pt-3 pl-2" style="font-size: 30px;text-decoration:none; "></a>
				</div>
				<div class="col-md text-center">
					<h2>Profile of <b>{{ $name }}</b></h2>
				</div>
				<div class="col-md-1"></div>
			</div>
			<hr width=50%>
			{{-- <div class="panel panel-default">
				<div class="panel-heading">Search the Data</div>
				<div class="panel-body">
					<input type="text" name="search" id="search" class="form-control" placeholder="Enter name">
				</div>
			</div> --}}

			<div class="card">
				<div class="card-header">
					<div class="row align-items-center">
						<div class="col-auto">
							<h3 class="mb-0">Personal Details of <b>{{ $name }}</b></h3>
						</div>
						<div class="col d-flex justify-content-end" title="Toiletowner id is a fixed attribute, thus can't be changed">
							<h4 class="mb-0">User ID-<b>{{$user->id }}</b></h4>
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
											<input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{$user->name}}">
											@error('name')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="form-control-label" for="email">Email address</label>
											<input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{$user->email}}">
											@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg mt-2">
										<div class="form-group">
											<label class="form-control-label" for="password">New Password</label>
											<input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="New password" value="">
											@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
									<div class="col-lg mt-2">
										<div class="form-group">
											<label class="form-control-label" for="password_confirmation">Password confirmation</label>
											<input type="text" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Re-type password" value="">
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
											<input type="text" id="mobileno" name="mobileno" class="form-control @error('mobileno') is-invalid @enderror" placeholder="Contact" value="{{$user->mobileno}}">
											@error('mobileno')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
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
											<input id="age" class="form-control @error('age') is-invalid @enderror" name="age"  placeholder="Age" value="{{$user->age}}" type="text">
											@error('age')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
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

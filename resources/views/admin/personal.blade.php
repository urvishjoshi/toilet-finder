@section('title','Profile')
@extends('admin.layouts.app')

@section('home')
    <section>
    <!-- Content Header (Page header) -->
	<div class="content-header">
	<div class="container-fluid pt-2">
		<div class="col-xl-auto order-xl-1">
			<div class="card">
				<div class="card-header">
					<div class="row align-items-center">
						<div class="col-8">
							<h3 class="mb-0">Personal Details</h3>
						</div>
					</div>
				</div>
				<div class="card-body">
						<h6 class="heading-small text-muted pl-3 mb-3">Profile Picture<span class="mx-3"></span> Admin information</h6>
						<div class="">
							<div class="row">
								<div class="px-4">
									<form method="POST" action="{{ route('a.personal.store') }}" enctype="multipart/form-data" id="imgform"> @csrf @method('POST')
										<div id="profileDiv" style="height: 100px;width: 100px;border: 1px dashed lightgrey;">

											<img src="{{ asset('profileimages/admin/'.$admin01[0]['profile']) }}" alt="No image" class="profileimg" width="100" height="100">
											<div class="hoverabletext">
												<a href="#" class="imgtext fas fa-camera"></a>
											</div><br>
										</div>
										<div class="d-flex justify-content-center">
											<button class="text-primary btn btn-sm pointer" name="profileBtn" id="uploadImg" value="1">Upload</button>
										</div>
										<div id="uploadText" class="font-14 text-center"></div>
										@error('profile')
											<span class="text-danger font-14" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
										<input type="file" name="profile" id="file" hidden>
									</form>
								</div>
								<div class="col-lg">
									<form action="{{ route('a.personal.update',Auth::user()->id) }}" method="post"> @method('PUT') @csrf
									<div class="form-group">
										<label class="form-control-label" for="name">Your name</label>
										<input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{$admin01[0]['name']}}"><!-- Owner Name -->
									</div>
								</div>
								<div class="col-lg">
									<div class="form-group">
										<label class="form-control-label" for="email">Email address</label>
										<input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{$admin01[0]['email']}}"><!-- Owner Email -->
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg mt-2 ml-3">
									<div class="form-group">
										<label class="form-control-label" for="password">Password Hash</label>
										<input type="text" id="password" name="password" class="form-control" placeholder="Hash value" value="{{$admin01[0]['password']}}">
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
										<label class="form-control-label" for="contactno">Contact no</label>
										<input type="text" id="contactno" name="contactno" class="form-control" placeholder="Contact" value="{{$admin01[0]['mobileno']}}"><!-- Owner Contact No. -->
									</div>
								</div>
								{{-- <div class="col-md-8">
									<div class="form-group">
										<label class="form-control-label" for="address">Address</label>
										<input id="address" class="form-control" name="address"  placeholder="Home Address" value="{{$admin01[0]['address']}}" type="text"><!-- Owner Address -->
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-control-label" for="city">City</label>
										<input type="text" id="city" name="city" class="form-control" placeholder="City"  value=""><!-- Owner city -->
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-control-label" for="country">Country</label>
										<input type="text" id="country" name="country" class="form-control" placeholder="Country" value=""><!-- Owner countary -->
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-control-label" for="postal-code">Postal code</label>
										<input type="number" id="postalcode" name="postalcode" class="form-control" placeholder="6 digit code"><!-- Owner Postal code -->
									</div> --}}
								{{-- </div> --}}
							</div>
						<button type="submit" id="submitbtn" name="submitbtn" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
    </section>
@section('jquery')
    <script>
    	$(function() {
    		$('.imgtext').click(function(event) {
    			$('#file').trigger('click');
    		});

	    	$('#file').change(function() {
	    		var file = $('#file')[0].files[0].name;
	    		$('#uploadText').text(file);
	    	});
    	});
    </script>
@endsection
@endsection

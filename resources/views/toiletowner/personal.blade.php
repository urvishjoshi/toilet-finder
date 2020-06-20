@section('title','Profile')
@extends('toiletowner.layouts.app')

@section('personal')
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
							<h6 class="heading-small text-muted pl-3 mb-3">Profile Picture<span class="mx-3"></span> User information</h6>
							<div class="">
								<div class="row">
									<div class="px-4">
										<form method="POST" action="{{ route('personal.store') }}" enctype="multipart/form-data" id="imgform"> @csrf @method('POST')
											<div id="profileDiv" style="height: 100px;width: 100px;border: 1px dashed lightgrey;">

												<img src="{{ asset('storage/profileimages/'.$info[0]['profile']) }}" alt="No image" class="profileimg" width="100" height="100">
												<div class="hoverabletext">
													<a href="#" class="imgtext fas fa-camera"></a>
												</div><br>
											</div>
											<div class="d-flex justify-content-center">
												<button class="text-primary btn btn-sm pointer mt-2" id="uploadImg">Upload</button>
											</div>
											<div id="uploadText" class="font-14 text-center text-success"></div>
											@error('profile')
												<span class="text-danger font-14" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
											<input type="file" name="profile" id="file" hidden>
										</form>
									</div>
									<div class="col-lg">
										<form action="{{ route('personal.update',Auth::user()->id) }}" method="post"> @method('PUT') @csrf
										<div class="form-group">
											<label class="form-control-label" for="name">Your name</label>
											<input type="text" id="ownername" name="ownername" class="form-control @error('ownername') is-invalid @enderror" placeholder="Name" value="{{$info[0]['name']}}">
											@error('ownername')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
									<div class="col-lg">
										<div class="form-group">
											<label class="form-control-label" for="email">Email address</label>
											<input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{$info[0]['email']}}">
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
											<label class="form-control-label" for="contactno">Contact no</label>
											<input type="text" id="contactno" name="contactno" class="form-control @error('contactno') is-invalid @enderror" placeholder="Contact" value="{{$info[0]['mobileno']}}">
											@error('contactno')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>
									
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
	    		$('#uploadImg').removeClass('text-primary').addClass('btn-primary');

	    	});

	    		// $('#imgform').submit(function(event) {
	    		// 	event.preventDefault();

	    		// 	$.ajax({
	    		// 		url: '{{ route('personal.store') }}',
	    		// 		data: {
	    		// 			'data': new FormData(this),
	    		// 			'_token': $('input[name=_token]').val(),
	    		// 			'_method': '{{method_field('POST')}}',
	    		// 		},
	    		// 		dataType: 'JSON',
	    		// 		cache: false,
	    		// 		contentType: false,
	    		// 		processData: false,
	    		// 		success:function(data) {
			    // 			console.log(data)

	    		// 		}
	    		// 	});
	    			
	    		// });
    	});
    </script>
@endsection
@endsection

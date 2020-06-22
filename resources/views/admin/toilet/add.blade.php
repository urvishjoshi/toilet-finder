@section('title','Add - Toilet')
@section('link')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
@endsection
@extends('admin.layouts.app')
@section('toilet.index')
<?php $key=\App\Model\Admin::first('mapkey'); ?>
<section>
	<div class="content-header pt-0">
		<div class="container-fluid px-0">
			<div class="container justify-content-center pt-3" id="requestTable">
				<div class="card">
					<div class="card-header bg-primary">
						<form action="{{ route('a.toilets.store') }}" method="post" class="mb-0">
						@method('POST') @csrf
						<div class="row align-content-center">
							<div class="col-auto d-flex">
								<h3 class="mb-0">Add toilet to
								</h3>
							</div>
							<div class="col-auto">
								<select name="owner_id" class="js-example-basic-single form-control" required>
									<option value="">select</option>
									@foreach ($owners as $owner)
									<option value="{{ $owner->id }}">{{$owner->id.' - '.$owner->email }}</option>
									@endforeach
								</select>
							</div>
						</div>				
					</div>
					<div class="container justify-content-center p-0" id="requestTable">
							<div class="modal-body row">
								<div class="col-6">
									<h6 class="heading-small text-muted mb-2">Toilet information</h6>

									<div class="lg-4">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
													<label class="form-control-label" for="toiletname">Toilet name</label>
													<input type="text" id="toiletname" name="toiletname" class="form-control" placeholder="Toilet name" required>
													@error('toiletname')
													<span class="text-danger font-14" role="alert">
														<strong>{{ $message }}</strong>
													</span>
													@enderror
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label class="form-control-label" for="toiletstatus">Toilet status</label>
													<select class="custom-select" id="toiletstatus" name="toiletstatus">
														<option disabled>Status</option>
														<option value="1" class="text-success">Active</option>
														<option value="0" class="text-danger">Not active</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="lg-4">
										<div class="row">
											<div class="form-group col-md-3 px-1">
												<label class="form-control-label d-flex" for="toiletprice">Price in KD</label>
												<input id="toiletprice" name="toiletprice" class="form-control px-1" placeholder="KD" value="" type="number" min="0" step="0.001" required>
												@error('toiletprice')
												<span class="text-danger font-14" role="alert">
													<strong>{{ $message }}</strong>
												</span>
												@enderror
											</div>
											<div class="col-md px-1">
												<div class="form-group">
													<label class="form-control-label" for="toilettype">Toilet type</label>
													<select class="custom-select" id="toilettype" name="toilettype">
														<option disabled>toilet for</option>
														<option value="2" selected>Male & Female</option>
														<option value="1">Male only</option>
														<option value="0">Female only</option>
													</select>
												</div>
											</div>
											<div class="col-md px-1">
												<div class="form-group">
													<label class="form-control-label" for="complexname">Complex name</label>
													<input id="complexname" name="complexname" class="form-control" placeholder="Toilet Complex" value="" type="text" required>
													@error('complexname')
													<span class="text-danger font-14" role="alert">
														<strong>{{ $message }}</strong>
													</span>
													@enderror
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group col-lg-12">
												<label class="form-control-label" for="address">Street Address</label>
												<input type="text" id="address" name="address" class="form-control" placeholder="Street address of your toilet" required>
												@error('address')
												<span class="text-danger font-14" role="alert">
													<strong>{{ $message }}</strong>
												</span>
												@enderror
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<div class="form-group">
													<label for="country">Country</label>
													<select name="country" class="form-control" id="country" required>
														<option value="">select</option>
														@foreach ($countries as $country)
														<option value="{{ $country->id }}">{{ $country->country }}</option>
														@endforeach
													</select>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="form-group">
													<label for="state">Governance</label>
													<select name="state" class="form-control" id="state" required>
														<option value="">-select-</option>
													</select>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="form-group">
													<label for="city">City</label>
													<select name="city" class="form-control" id="city" required>
														<option value="">-select-</option>
													</select>
												</div>
											</div>
											<span class="text-secondary font-14 pl-2 align-self-end">*All fields are mandatory to fill</span>
										</div>
									</div>
								</div> {{-- modal-body-row --}}
								<div class="col-6" >
									<div class="alert bg-primary text-dark alert-dismissible fade show" role="alert" style="position: fixed;z-index: 99;max-width: 50%;float: right;opacity: 0.6">
										Click anywhere on the map to put a marker for your toilet
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div id="map" style="width:100%;height:400px;"></div>

									<input type="hidden" name="newLat" id="newLat" value="">
									<input type="hidden" name="newLng" id="newLng" value="">

									<script src="https://maps.googleapis.com/maps/api/js?key={{$key->mapkey}}&callback=myMap"></script>

								</div>
							</div>
							<div class="modal-footer bg-light">
								<a href="{{ url()->previous() }}" class="btn btn-secondary" style="color: white!important;">Back</a>
								<button type="submit" id="btn-addtoilet" name="btn-addtoilet" class="btn btn-primary">Add Toilet</button>
							</div>
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

$(document).ready(function(){
	// In your Javascript (external .js resource or <script> tag)
    // $('.js-example-basic-single').select2();

	$("#country").on('change',function(){
		$.ajax({
			method:"GET",
			url:"{{ route('a.toilets.show',1) }}",
			data: {
			   'country_id': $(this).val(),
				'_token': $('input[name=_token]').val(),
				'_method': '{{method_field('GET')}}',
			},
			dataType:'html',
			success:function(data){
				if(data<1)
					$("#state").html('<option value="">-No Governance found-</option>');
				else
					$("#state").html(data);
				$("#city").html('<option value="">-select-</option>');
			}
		});
	});

	$("#state").on('change',function(){
		$.ajax({
			method:"GET",
			url:"{{ route('a.toilets.show',1) }}",
			data: {
			   'state_id': $(this).val(),
				'_token': $('input[name=_token]').val(),
				'_method': '{{method_field('GET')}}',
			},
			dataType:'html',
			success:function(data){
				if(data<1)
					$("#city").html('<option value="">-No city found-</option>');
				else
					$("#city").html(data);
			}
		});
	});
});
</script>
@endsection
@endsection
<script>
		var marker;
	var infowindow;

	function myMap() {
		var mapProp= {
			center:new google.maps.LatLng(29.3117,47.4818),
			zoom:8,
			gestureHandling: 'greedy'
		};
		var map = new google.maps.Map(document.getElementById("map"),mapProp);
		google.maps.event.addListener(map, 'click', function(event) {
			placeMarker(map, event.latLng);
			document.getElementById("newLat").value = event.latLng.lat();
			document.getElementById("newLng").value = event.latLng.lng();
		});
	}

	function placeMarker(map, location) {
		if (!marker || !marker.setPosition) {
			marker = new google.maps.Marker({
				position: location,
				map: map,
				animation: google.maps.Animation.DROP
			});
		} else {
			marker.setPosition(location);
		}
		if (!!infowindow && !!infowindow.close) {
			infowindow.close();
		}
		infowindow = new google.maps.InfoWindow();
		infowindow.setContent('Set this location as a toilet spot')
		infowindow.open(map,marker);
	}
</script>
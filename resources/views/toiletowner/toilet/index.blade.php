@section('title','Toilet')
@extends('toiletowner.layouts.app')
@section('toilet.index')
<?php $key=\App\Model\Admin::first('mapkey'); ?>

@if($thisOwner[0]['status']=='0')
	<script>
		$(function() {  //disables all inputs
			$("div *").attr("disabled", "disabled").off('click');
			$("div *").attr("title", "Your account is not active yet, you can't create new toilets");
		})
	</script>
	<div class="container-fluid row justify-content-center pt-4">
		<div class="alert bg-warning text-center font-20">
			You can't create new toilets, Please <a href="{{ route('feedbacks.index') }}" >contact</a> admin for more details.
		</div>
	</div>

<section>
	<div class="content-header pb-0 pt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="row align-items-center">
						<div class="col-8">
							<h3 class="mb-0" class="tooltip-test">Your Toilets</h3>
						</div>
						<div class="col-4 text-right">
						  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewToilet">
							  Add new Toilet
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
@else
<section>
	<div class="content-header pb-0 pt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="row align-items-center">
						<div class="col-8">
							<h3 class="mb-0" class="tooltip-test">Your Toilets</h3>
						</div>
						<div class="col-4 text-right">
						  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewToilet">
							  Add new Toilet
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<div class="content-header pt-0">
		<div class="container-fluid">
		<div class="container justify-content-center pt-3" id="requestTable">
			<table class="table table-hover">
				<thead>
				<tr class="thead-light">
					<th center>Id</th>
					<th>Toilet name</th>
					<th>Complex</th>
					<th>Address</th>
					<th>Status</th>
					<th>Price</th>
					<th>Created on</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
					@if( count($toilets) == 0 )
						<tr><td colspan="8"><center><h2>No Toilets created</h2><hr></center></td></tr>
					@else
						@foreach($toilets as $toilet)
							<tr>
								<th scope="row">{{ $toilet->id }}</th>
								<td>{{ $toilet->toilet_name }}</td>
								<td>{{ $toilet->complex_name }}</td>
								<td>{{ $toilet->address }}</td>
								<td>
									@if($toilet->status==1) <f class="text-success">Active</f> @else <f class="text-danger">Not Active</f> @endif
								</td>
								<td><b>${{ $toilet->price }}</b></td>
								<td>{{ $toilet->created_at->format('d/m/Y').' at '.$toilet->created_at->format('g:i A') }}</td>
								<td>
									<form action="{{ route('toilets.destroy',$toilet->id) }}" method="POST">
									@method('DELETE') @csrf
									<a href="{{ route('toilets.show',$toilet->id) }}" class="btn btn-success" name="btn">Edit</a>&nbsp;&nbsp;
										<button type="submit" class="btn btn-danger" name="btn">Delete</button>
									</form>
								</td>
							</tr>
						@endforeach
					@endif
				</tbody>
			</table>
			</div>
			</div>	
	</div>

	</section>

	<!-- Modal -->
	<div class="modal fade bd-example-modal-xl mt-3" id="addNewToilet" tabindex="-1" role="dialog" aria-labelledby="addNewToiletLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header bg-light">
					<h5 class="modal-title">Create new Toilet</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="{{ route('toilets.store') }}" method="post" class="mb-0">
					@method('POST') @csrf
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
									<div class="form-group col-md-2">
										<label class="form-control-label" for="toiletprice">Price in <b>KD</b></label>
										<input id="toiletprice" name="toiletprice" class="form-control px-1" placeholder="KD" value="" type="number" min="0" step="0.001" required>
										@error('toiletprice')
										<span class="text-danger font-14" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-md-4">
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
									<div class="col-md-6">
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
						<div class="modal-footer bg-light">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" id="btn-addtoilet" name="btn-addtoilet" class="btn btn-primary">Add Toilet</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<script>

$(document).ready(function(){
	$("#country").on('change',function(){
		$.ajax({
			method:"GET",
			url:"{{ route('toilets.show',1) }}",
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
			url:"{{ route('toilets.show',1) }}",
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
@endif
@endsection
<script>
		var marker;
	var infowindow;

	function myMap() {
		var mapProp= {
			center:new google.maps.LatLng(51.508742,-0.120850),
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
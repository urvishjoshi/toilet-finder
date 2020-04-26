@section('title','Toilet')
@extends('toiletowner.layouts.app')

@section('toilet.index')
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
					<th scope="col" center>Id</th>
					<th scope="col">Toilet name</th>
					<th scope="col">Complex</th>
					<th scope="col">Address</th>
					<th scope="col">Status</th>
					<th scope="col">Price</th>
					<th scope="col">Created on</th>
					<th scope="col">Action</th>
				</tr>
				</thead>
				<tbody>
					@if( count($toilets) == 0 )
						<tr><td colspan="6"><center><h2>No Toilets created</h2><hr></center></td></tr>
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
								<td>{{ $toilet->created_at }}</td>
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
	<div class="modal fade bd-example-modal-xl" id="addNewToilet" tabindex="-1" role="dialog" aria-labelledby="addNewToiletLabel" aria-hidden="true">
	  <div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
		    <div class="modal-header bg-light">
				<h5 class="modal-title">Create new Toilet</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
				</button>
		    </div>
		    <form action="{{ route('toilets.create') }}" method="post">
		    @method('GET') @csrf
		    	<div class="modal-body row">
				<div class="col-6">
					<h6 class="heading-small text-muted mb-2">Toilet information</h6>
					<div class="lg-4">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-control-label" for="toiletname">Toilet name</label>
									<input type="text" id="toiletname" class="form-control" placeholder="Toilet name" value="" required>
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
							<div class="col-md-4">
								<div class="form-group">
									<label class="form-control-label" for="toiletype">Toilet type</label>
									<select class="custom-select" id="toiletype" name="toiletype">
										<option disabled>toilet for</option>
										<option value="2" selected>Male & Female</option>
										<option value="1">Male only</option>
										<option value="0">Female only</option>
									</select>
								</div>
							</div>
							<div class="col-md-8">
								<div class="form-group">
									<label class="form-control-label" for="toiletaddress">Address</label>
									<input id="toiletaddress" name="toiletaddress" class="form-control" placeholder="Toilet Address" value="" type="text" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4">
								<div class="form-group">
									<label class="form-control-label" for="city">City</label>
									<input type="text" id="city" class="form-control" placeholder="City" value="">
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label class="form-control-label" for="country">Country</label>
									<input type="text" id="country" class="form-control" placeholder="Country" value="">
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label class="form-control-label" for="postal-code">Postal code</label>
									<input type="number" id="postal-code" class="form-control" placeholder="6 digit code">
								</div>
							</div>
						</div>
					</div>
				</div> {{-- modal-body-row --}}
					<div class="col-6" >
						<div id="map" style="width:100%;height:400px;"></div>


						<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuM60AoMrwB7dnMEOL7bge_3bM4DJtdn8&callback=myMap"></script>
					</div>
						
    			</div>
				<div class="modal-footer bg-light">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" id="btn-personal" name="btn-personal" class="btn btn-primary">Add Toilet</button>
				</div>
			</form>
		</div>
	  </div>
	</div>
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
						        infowindow = new google.maps.InfoWindow({
						            content: 'Set this location as a toilet spot'
						        });
						        infowindow.open(map,marker);
						    }


						</script>
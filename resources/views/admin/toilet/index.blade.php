@section('title','Toilets')
@extends('admin.layouts.app')
@section('toilet.index')
<?php $key=\App\Model\Admin::first('mapkey'); ?>

<section>
	<!-- Content Header (Page header) -->
	<div class="content pt-4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md text-center">
					<h2>All Toilets</h2>
				</div><!-- /.col -->
			</div><!-- /.row -->
			<HR width=20%>
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="container justify-content-center" id="requestTable">
				<div class="card">
					<div class="card-header border-0 p-0">
						<div class="container justify-content-center p-0" id="requestTable">
							<table class="table align-items-center table-hover table-flush text-center mb-0">
								<thead>
									<tr class="thead-light">
										<th width="1%">Id</th>
										<th width="1%">Owner id</th>
										<th>Toilet name</th>
										<th width="1%">Price</th>
										<th>Complex</th>
										<th>Address</th>
										<th>Toilet type</th>
										<th>Status</th>
										<th width="12%">Created on</th>
										<th width="5%">Action</th>
									</tr>
								</thead>
								<tbody>
									@if( count($toilets) == 0 )
									<tr><td colspan="10"><center><h2>No Toilets registered</h2></center></td></tr>
									@else
									@foreach($toilets as $toilet)
									<tr>
										<th scope="row">{{ $toilet->id }}</th>
										<td title="{{ $toilet->owner['email'] }}">
											{{ $toilet->owner['id'] }}
										</td>
										<td>{{ $toilet->toilet_name }}</td>
										<td><b>KD{{ $toilet->price }}</b></td>
										<td>{{ $toilet->complex_name }}</td>
										<td>{{ $toilet->address.$toilet->getFullAddress() }}</td>
										<td>{{ $toilet->type==1 ? 'Male' : 'Female'}}</td>

										<td>
											@if($toilet->status==1) <f class="text-success">Active</f> @else <f class="text-warning">Not Active</f> @endif
										</td>
										<td>{{ $toilet->created_at->format('d/m/Y').' at '.$toilet->created_at->format('g:i A') }}</td>
										<td>
											{{-- <div > --}}
											<form action="{{ route('a.toilets.destroy',$toilet->id) }}" method="POST"class="d-flex">
												
											<a class="btn btn-sm btn-primary text-white" id="mapButton" data-toggle="modal"  data-target=".bd-example-modal-lg" onclick="myMap({{ $toilet->toilet_lng }},{{ $toilet->toilet_lng }})">Map</a>
											<a href="{{ route('a.toilets.show',$toilet->id) }}" class="btn btn-sm btn-secondary mx-2" name="edit">Edit</a>
												@csrf @method('DELETE')
												<button type="submit" class="btn btn-sm btn-danger" name="delete">Delete</button>
											</form>
											{{-- </div> --}}
										</td>
									</tr>
									@endforeach
									@endif
								</tbody>
							</table>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</section>

	<div class="modal fade bd-example-modal-lg mt-4 ml-5 ml-5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content p-1">
			<div id="map" style="width:100%;height:500px;">
			</div>
			<script src="https://maps.googleapis.com/maps/api/js?key={{$key->mapkey}}&callback=myMap"></script>
	    </div>
	  </div>
	</div>
@endsection
<script>
    function myMap(currentLat,currentLng) {
    	var myLatLng = {
    	 	lat: currentLat, 
    	 	lng: currentLng
    	};
        var mapProp= {
			center: myLatLng,
			zoom:15,
			gestureHandling: 'greedy'
		};
		var map = new google.maps.Map(document.getElementById("map"),mapProp);

		placeMarker(map, myLatLng);  //place a stable marker in map
    }

    function placeMarker(map, location) {
    	var marker;
    	var infowindow;
        if (!marker || !marker.setPosition) {
            marker = new google.maps.Marker({
                position: location,
                map: map,
                animation: google.maps.Animation.DROP
            });
        }
        marker.setPosition(location);
        if (infowindow && infowindow.close) {
            infowindow.close();
        }
        infowindow = new google.maps.InfoWindow({
            content: 'This location is setted as a toilet spot'
        });
        infowindow.open(map,marker);
    }
</script>
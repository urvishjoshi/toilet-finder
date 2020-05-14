@section('title','Toilets')
@extends('admin.layouts.app')
@section('toilet.show')

<section>
    	<!-- Content Header (Page header) -->
    	<div class="content pt-4">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-1 d-flex align-items-start flex-column">
						<a href="{{ url()->previous() }}" class="fas fa-arrow-left pt-3 pl-2" style="font-size: 30px;text-decoration:none; "></a>
					</div>
					<div class="col-md text-center">
    					<h2>Toilets of <b>{{ $name }}</b></h2>
    				</div><!-- /.col -->
    			</div><!-- /.row -->
				<HR width=20%>

    		</div><!-- /.container-fluid -->
    	</div>
    	<!-- /.content-header -->
		<div class="content-header">
		<div class="container-fluid">
		<div class="container justify-content-center" id="requestTable">
			<table class="table table-hover">
				<thead>
				<tr class="thead-light">
					<th width="1%">Id</th>
					<th width="1%">Owner id</th>
					<th>Toilet name</th>
					<th width="1%">Price</th>
					<th>Complex</th>
					<th>Address</th>
					<th>Status</th>
					<th>Created on</th>
					<th>Map</th>
				</tr>
				</thead>
				<tbody>
					@if( count($toilets) == 0 )
						<tr><td colspan="9"><center><h2>No Toilets registered</h2><hr></center></td></tr>
					@else
						@foreach($toilets as $toilet)
						    <tr>
								<th scope="row">{{ $toilet->id }}</th>
								<td title="{{ $toilet->owner['email'] }}">
									{{ $toilet->owner['id'] }}
								</td>
								<td>{{ $toilet->toilet_name }}</td>
								<td><b>${{ $toilet->price }}</b></td>
								<td>{{ $toilet->complex_name }}</td>
								<td>{{ $toilet->address.$toilet->getFullAddress() }}</td>
								<td>
									@if($toilet->status==1) <f class="text-success">Active</f> @else <f class="text-warning">Not Active</f> @endif
								</td>
								<td>{{ $toilet->created_at->format('d/m/Y').' at '.$toilet->created_at->format('g:i A') }}</td>
								<td>
									<button class="btn btn-success" id="mapButton" data-toggle="modal"  data-target=".bd-example-modal-lg" onclick="myMap({{ $toilet->toilet_lng }},{{ $toilet->toilet_lng }})">Map</button>&nbsp;&nbsp;
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
<div class="modal fade bd-example-modal-lg mt-4 ml-5 ml-5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content p-1">
			<div id="map" style="width:100%;height:500px;">
			</div>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGBvEqVEGH6-O3GAzwlH1aon9m0iVslTo&callback=myMap"></script>
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
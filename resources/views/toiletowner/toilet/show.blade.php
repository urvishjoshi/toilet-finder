@section('title','Toilet')
@extends('toiletowner.layouts.app')

@section('toilet.show')
	<section class="content">
		<div class="container pt-3">
				<div class="container col-md-auto">
				<div class="row">
					<div class="col-md-1">
							<a href="{{ url()->previous() }}" class="fas fa-arrow-left pt-3 pl-2" style="font-size: 30px;text-decoration:none; "></a>
					</div>
					<div class="col-md text-center mr-4">
						<h2>Edit toilet<b></b></h2>
						<hr width=25%>
					</div>
				</div>
    		</div><!-- /.container-fluid -->
    	</div>
		    <form action="" method="post">
		    	<div class="modal-body row bg-white">
				<div class="col-6">
					<h6 class="heading-small text-muted mb-2">Toilet information</h6>
					<div class="lg-4">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-control-label" for="toiletname">Toilet name</label>
									<input type="text" id="toiletname" class="form-control" placeholder="Toilet name" value="{{ $toilet[0]->toilet_name }}" required>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-control-label" for="toiletstatus">Toilet status</label>
									<select class="custom-select" id="toiletstatus" name="toiletstatus">
										<option disabled>Status</option>
										<option value="1" class="text-success" {{ $toilet[0]->status==1 ? 'selected' : '' }}>Active</option>
										<option value="0" class="text-danger" {{ $toilet[0]->status==0 ? 'selected' : '' }}>Not active</option>
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
										<option value="" {{ $toilet[0]->type==2 ? 'selected' : '' }}>Male & Female</option>
										<option value="0" {{ $toilet[0]->type==1 ? 'selected' : '' }}>Male only</option>
										<option value="0" {{ $toilet[0]->type==0 ? 'selected' : '' }}>Female only</option>
									</select>
								</div>
							</div>
							<div class="col-md-8">
								<div class="form-group">
									<label class="form-control-label" for="toiletaddress">Address</label>
									<input id="toiletaddress" name="toiletaddress" class="form-control" placeholder="Toilet Address" value="{{ $toilet[0]->address }}" type="text" required>
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
					<div class="col-6 pr-0" >
						<div id="map" style="width:100%;height:400px;"></div>


						<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuM60AoMrwB7dnMEOL7bge_3bM4DJtdn8&callback=myMap"></script>
					</div>
						
    			</div>
				<div class="modal-footer bg-light">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="submit" id="btn-personal" name="btn-personal" class="btn btn-primary">Update Toilet</button>
				</div>
			</form>
	</section>
@endsection
<script>
    var marker;
    var infowindow;
    var myLatLng = {
     	lat: 21.640575 , 
     	lng: 69.605965
    };
    function myMap() {
        var mapProp= {
			center: myLatLng,
			zoom:15,
			gestureHandling: 'greedy'
		};
		var map = new google.maps.Map(document.getElementById("map"),mapProp);

		placeMarker(map, myLatLng);
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
        }
        marker.setPosition(location);
        if (infowindow && infowindow.close) {
            infowindow.close();
        }
        infowindow = new google.maps.InfoWindow({
            content: 'Set this location as a toilet spot'
        });
        infowindow.open(map,marker);
    }


</script>
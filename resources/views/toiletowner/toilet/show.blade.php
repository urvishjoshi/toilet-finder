@section('title','Toilet')
@extends('toiletowner.layouts.app')
<?php $key=\App\Model\Admin::first('mapkey'); ?>

@section('toilet.show')
	<section class="content">
		<div class="container pt-3">
				<div class="container col-md-auto">
				<div class="row">
					<div class="col-md-1">
						<a href="{{ url('toiletowner/toilets') }}" class="fas fa-arrow-left pt-3 pl-2" style="font-size: 30px;text-decoration:none; "></a>
					</div>
					<div class="col-md text-center mr-4">
						<h2>Edit toilet<b></b></h2>
						<hr width=25%>
					</div>
				</div>
    		</div><!-- /.container-fluid -->
    	</div>
		    <form action="{{ route('toilets.update', $toilet[0]->id) }}" method="post">
		    	@method('PUT') @csrf
		    	<div class="modal-body row bg-white">
				<div class="col-6">
					<h6 class="heading-small text-muted mb-2">Toilet information</h6>
					<div class="lg-4">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-control-label" for="toiletname">Toilet name</label>
									<input type="text" id="toiletname" name="toiletname" class="form-control" placeholder="Toilet name" value="{{ $toilet[0]->toilet_name }}">
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
										<option value="1" class="text-success" {{ $toilet[0]->status==1 ? 'selected' : '' }}>Active</option>
										<option value="0" class="text-danger" {{ $toilet[0]->status==0 ? 'selected' : '' }}>Not active</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="lg-4">
						<div class="row">
							<div class="form-group col-md-2">
								<label class="form-control-label" for="toiletprice">Price in <b>$</b></label>
								<input id="toiletprice" name="toiletprice" class="form-control" placeholder="$" value="{{ $toilet[0]->price }}" type="number">
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
										<option value="2" {{ $toilet[0]->type==2 ? 'selected' : '' }}>Male & Female</option>
										<option value="1" {{ $toilet[0]->type==1 ? 'selected' : '' }}>Male only</option>
										<option value="0" {{ $toilet[0]->type==0 ? 'selected' : '' }}>Female only</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-control-label" for="complexname">Complex name</label>
									<input id="complexname" name="complexname" class="form-control" placeholder="Toilet Address" value="{{ $toilet[0]->complex_name }}" type="text">
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
								<input type="text" id="address" name="address" class="form-control" placeholder="Street address of your toilet" value="{{ $toilet[0]->address }}">
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
				 						{{-- 
										@foreach ($countries as $country)
										<option value="{{ $country->id }}">{{ $country->country }}</option>
										@endforeach --}}
										@foreach ($datas->countries as $country)
										    <option value="{{ $country['id'] }}"
										    @if ($country['id'] == $toilet[0]->country_id)
										        selected="selected"
										    @endif
										    >{{  $country['country'] }}</option>
										@endforeach
			 						</select>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label for="state">Governance</label>
 									<select name="state" class="form-control" id="state" required>
 										@foreach ($datas->states as $state)
										    <option value="{{ $state['id'] }}"
										    @if ($state['id'] == $toilet[0]->state_id)
										        selected="selected"
										    @endif
										    >{{  $state['state'] }}</option>
										@endforeach
 									</select>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label for="city">City</label>
									<select name="city" class="form-control" id="city" required>
										@foreach ($datas->cities as $city)
										    <option value="{{ $city['id'] }}"
										    @if ($city['id'] == $toilet[0]->city_id)
										        selected="selected"
										    @endif
										    >{{  $city['city'] }}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
					</div>
				</div> {{-- modal-body-row --}}
					<div class="col-6 pr-0" >
						<div id="map" style="width:100%;height:400px;">
						</div>
						<input type="hidden" name="newLat" id="newLat" value="{{ $toilet[0]->toilet_lat }}">
						<input type="hidden" name="newLng" id="newLng" value="{{ $toilet[0]->toilet_lng }}">
						<script src="https://maps.googleapis.com/maps/api/js?key={{$key->mapkey}}&callback=myMap"></script>
					</div>
    			</div>
				<div class="modal-footer bg-light">
					<a href="{{ url()->previous() }}" class="btn btn-secondary" style="color: white!important;">Cancel</a>
					<button type="submit" id="btn-update" name="btn-update" class="btn btn-primary">Update Toilet</button>
				</div>
			</form>
	</section>
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
					$("#state").html('<option>-No Governance found-</option>');
				else
					$("#state").html(data);
				$("#city").html('<option>-select-</option>');
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
					$("#city").html('<option>-No city found-</option>');
				else
					$("#city").html(data);
			}
		});
	});
});
</script>
@endsection

<script>

    var marker;
    var infowindow;
    var myLatLng = {
     	lat: {{ $toilet[0]->toilet_lat==null ? '51.508742' : $toilet[0]->toilet_lat }} , 
     	lng: {{ $toilet[0]->toilet_lng==null ? '-0.120850' : $toilet[0]->toilet_lng }}
    };
    function myMap() {
        var mapProp= {
			center: myLatLng,
			zoom:15,
			gestureHandling: 'greedy'
		};
		var map = new google.maps.Map(document.getElementById("map"),mapProp);

		{{$toilet[0]->toilet_lat==null ? '' : 'placeMarker(map, myLatLng);'}}
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
        }
        marker.setPosition(location);
        if (infowindow && infowindow.close) {
            infowindow.close();
        }
        infowindow = new google.maps.InfoWindow({
            content: 'Set this location as a toilet spot '
        });
        infowindow.open(map,marker);
    }


</script>
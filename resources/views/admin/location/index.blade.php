@section('title','Toilet Locations')
@extends('admin.layouts.app')
@section('location')

<section>
	<div class="content pt-2">
		<div class="container">
			<div class="row">
				<div class="col-md text-center">
					<h2>Add Location</h2>
				</div><!-- /.col -->
			</div><!-- /.row -->
			<HR width=50%>
		</div><!-- /.container-fluid -->
    </div>

	<div class="content-header">
		<div class="container">
 			@method('GET') @csrf
				<div class="d-flex justify-content-between">
 			<h6 class="heading-small text-muted mb-2">Add Country</h6>
					<a href="{{ route('a.locations.edit','all') }}" class="btn btn-primary mx-2">Edit locations</a>
				</div>
 			<form action="{{ route('a.locations.store') }}" method="POST">
 				@method('POST') @csrf
 				<div class="row">
					<div class="col-lg-4">
						<div class="form-group">
							<label for="addCountry">Country</label>
							<input type="text" name="addCountry" id="addCountry" class="form-control" placeholder="Add Country">
						</div>
					</div>
					<div class="col-lg-2">
						<div class="form-group">
							<label for="addCountry"></label>
							<button type="submit" class="btn btn-success d-flex align-items-end mt-2" name="countryBtn" value="1">Add Country</button>
						</div>
					</div>
					<div class="col-lg d-flex justify-content-end">
						<div class="form-group">
							<label for="addCountry"></label>
							<button type="button" class="btn btn-danger d-flex align-items-end mt-2" data-toggle="modal" data-target="#exampleModal" id="delCountryBtn">
								Delete Country
							</button>
						</div>
					</div>
				</div>
 			</form>
			<hr>
			<form action="{{ route('a.locations.store') }}" method="POST">
 				@method('POST') @csrf
				<h6 class="heading-small text-muted mb-2">Add Governance</h6>
 				<div class="row">
					<div class="col-lg-3">
						<div class="form-group">
							<label for="countryId">Country</label>
							<select name="countryId" class="form-control" id="countryId">
								@foreach ($countries as $country)
									<option value="{{ $country->id }}">{{ $country->country }}</option>
								@endforeach
	 						</select>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group">
							<label for="addState">Governance</label>
							<input type="text" name="addState" id="addState" class="form-control" placeholder="Add Governance">
						</div>
					</div>
					<div class="col-lg-2">
						<div class="form-group">
							<label for="city"></label>
							<button type="submit" class="btn btn-success d-flex align-items-end mt-2">Add Governance</button>
						</div>
					</div>
					<div class="col-lg d-flex justify-content-end">
						<div class="form-group">
							<label for="addCountry"></label>
							<button type="button" class="btn btn-danger d-flex align-items-end mt-2" data-toggle="modal" data-target="#exampleModal" id="delStateBtn">
								Delete Governance
							</button>
						</div>
					</div>
				</div>
			</form>

				<hr>

			<form action="{{ route('a.locations.store') }}" method="POST">
 				@method('POST') @csrf
				<h6 class="heading-small text-muted mb-2">Add city</h6>
 				<div class="row">
					<div class="col-lg-3">
						<div class="form-group">
							<label for="countryId">Country</label>
							<select name="countryId" class="form-control" id="country">
		 						<option>select</option>
								@foreach ($countries as $country)
									<option value="{{ $country->id }}">{{ $country->country }}</option>
								@endforeach
	 						</select>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label for="state">Governance</label>
							<select name="stateId" class="form-control" id="state">
	 						<option value="">-select governance-</option>
							</select>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label for="addCity">City</label>
							<input type="text" name="addCity" id="addCity" class="form-control" placeholder="Add city">
						</div>
					</div>
					<div class="col-lg">
						<div class="form-group">
							<label for="city"></label>
							<button type="submit" class="btn btn-success d-flex align-items-end mt-2">Add City</button>
						</div>
					</div>
					<div class="col-lg d-flex justify-content-end">
						<div class="form-group">
							<label for="addCountry"></label>
							<button type="button" class="btn btn-danger d-flex align-items-end mt-2" data-toggle="modal" data-target="#exampleModal" id="delCityBtn">
								Delete City
							</button>
						</div>
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action="{{ route('a.locations.destroy',1) }}" method="POST" id="form">
				@method("DELETE") @csrf
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Delete</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="delCountryDiv">
					<div class="">
						<div class="col-lg">
							<div class="form-group">
								<label for="countryId">Select Country</label>
								<select name="countryId" class="form-control" id="countryId">
									@foreach ($countries as $country)
										<option value="{{ $country->id }}">{{ $country->country }}</option>
									@endforeach
		 						</select>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-body" id="delStateDiv">
					<div class="">
						<div class="col-lg">
							<div class="form-group">
								<label for="country">Country</label>
								<select name="country" class="form-control" id="countrydelstate" required>
									<option value="">select</option>
									@foreach ($countries as $country)
									<option value="{{ $country->id }}">{{ $country->country }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-lg">
							<div class="form-group">
								<label for="state">Governance</label>
								<select name="stateId" class="form-control" id="statedelstate" required>
									<option value="">-select-</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-body" id="delCityDiv">
					<div class="">
						<div class="col-lg">
							<div class="form-group">
								<label for="country">Country</label>
								<select name="country" class="form-control" id="countrydelcity" required>
									<option value="">select</option>
									@foreach ($countries as $country)
									<option value="{{ $country->id }}">{{ $country->country }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-lg">
							<div class="form-group">
								<label for="state">Governance</label>
								<select name="state" class="form-control" id="statedelcity" required>
									<option value="">-select-</option>
								</select>
							</div>
						</div>
						<div class="col-lg">
							<div class="form-group">
								<label for="city">City</label>
								<select name="cityId" class="form-control" id="citydelcity" required>
									<option value="">-select-</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-danger" name="delete" id="deletebtn">Delete</button>
				</div>
				<input type="hidden" id="formid" name="formid" value="">
			</form>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){

	$('#delCountryDiv').hide();
	$('#delStateDiv').hide();
	$('#delCityDiv').hide();
	
	$('#delCountryBtn').click(function(event) {
		$('#delCountryDiv').show();
		$('#delStateDiv').hide();
		$('#delCityDiv').hide();
		
		$('#formid').val(1);
	});
	$('#delStateBtn').click(function(event) {
		$('#delStateDiv').show();
		$('#delCountryDiv').hide();
		$('#delCityDiv').hide();
		$('#formid').val(2);
	});
	$('#delCityBtn').click(function(event) {
		$('#delCityDiv').show();
		$('#delCountryDiv').hide();
		$('#delStateDiv').hide();
		$('#formid').val(3);
	});
	$('#deletebtn').click(function(event) {
		$('#form').submit();
	});

	$("#country").on('change',function(){
		$.ajax({
			method:"POST",
			url:"{{ route('a.locations.show',1) }}",
			data: {
               'country_id': $(this).val(),
                '_token': $('input[name=_token]').val(),
                '_method': $('input[name=_method]').val(),
            },
			dataType:'html',
			success:function(data){
				if(data<1)
					$("#state").html('<option>-No Governance found-</option>');
				else
					$("#state").html(data);
			}
		});
	});

	$("#state").on('change',function(){
		$.ajax({
			method:"POST",
			url:"{{ route('a.locations.show',1) }}",
			data: {
               'state_id': $(this).val(),
                '_token': $('input[name=_token]').val(),
                '_method': $('input[name=_method]').val(),
            },
			dataType:'html',
			success:function(data){
				// $("#city").html(data);
			}
		});
	});
	//////////////////////////////////////////
	$("#countrydelstate").on('change',function(){
		$.ajax({
			method:"GET",
			url:"{{ route('a.locations.show',1) }}",
			data: {
			   'country_id': $(this).val(),
				'_token': $('input[name=_token]').val(),
				'_method': '{{method_field('GET')}}',
			},
			dataType:'html',
			success:function(data){
				if(data<1)
					$("#statedelstate").html('<option value="">-No Governance found-</option>');
				else
					$("#statedelstate").html(data);
				$("#citydelstate").html('<option value="">-select-</option>');
			}
		});
	});

	$("#countrydelcity").on('change',function(){
		$.ajax({
			method:"GET",
			url:"{{ route('a.locations.show',1) }}",
			data: {
			   'country_id': $(this).val(),
				'_token': $('input[name=_token]').val(),
				'_method': '{{method_field('GET')}}',
			},
			dataType:'html',
			success:function(data){
				if(data<1)
					$("#statedelcity").html('<option value="">-No Governance found-</option>');
				else
					$("#statedelcity").html(data);
				$("#citydelcity").html('<option value="">-select-</option>');
			}
		});
	});
	$("#statedelcity").on('change',function(){
		$.ajax({
			method:"GET",
			url:"{{ route('a.locations.show',1) }}",
			data: {
			   'state_id': $(this).val(),
				'_token': $('input[name=_token]').val(),
				'_method': '{{method_field('GET')}}',
			},
			dataType:'html',
			success:function(data){
				if(data<1)
					$("#citydelcity").html('<option value="">-No city found-</option>');
				else
					$("#citydelcity").html(data);
			}
		});
	});
});
</script>
@endsection


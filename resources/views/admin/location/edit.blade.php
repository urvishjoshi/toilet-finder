@section('title','Toilet Locations')
@extends('admin.layouts.app')
@section('location')

<section>
	<div class="content pt-4">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-1 d-flex align-items-start flex-column">
						<a href="{{ url('admin/locations') }}" class="fas fa-arrow-left pt-3 pl-2" style="font-size: 30px;text-decoration:none; "></a>
					</div>
					<div class="col-md text-center">
    					<h2>Edit locations</h2>
    				</div><!-- /.col -->
    				<div class="col-md-1"></div>
    			</div><!-- /.row -->
				<HR width=30%>

    		</div><!-- /.container-fluid -->
    	</div>

	<div class="content-header">
		<div class="container">
 			@method('GET') @csrf
 			<h6 class="heading-small text-muted mb-2">Edit Country</h6>
 			<form action="{{ route('a.locations.update',1) }}" method="POST">
 				@method('PUT') @csrf
 				<div class="row">
					<div class="col-lg-4">
							<div class="form-group">
								<label for="countryId">Select Country</label>
								<select name="countryId" class="form-control" id="countryId" required>
									<option value="">select</option>
									@foreach ($countries as $country)
										<option value="{{ $country->id }}">{{ $country->country }}</option>
									@endforeach
		 						</select>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label for="editCountry">New Country name</label>
								<input type="text" name="editCountry" id="editCountry" class="form-control" placeholder="Edit Country" value="" required>
							</div>
						</div>
					<div class="col-lg-2">
						<div class="form-group">
							<label for="addCountry"></label>
							<button type="submit" class="btn btn-success d-flex align-items-end mt-2" name="countryEditBtn" value="1">Edit Country</button>
						</div>
					</div>
				</div>
 			</form>
			<hr>
			<form action="{{ route('a.locations.update',1) }}" method="POST">
 				@method('PUT') @csrf
				<h6 class="heading-small text-muted mb-2">Edit Governance</h6>
 				<div class="row">
					<div class="col-lg-3">
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
						<div class="col-lg-3">
							<div class="form-group">
								<label for="state">Governance</label>
								<select name="stateId" class="form-control" id="statedelstate" required>
									<option value="">-select-</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="form-group">
								<label for="editState">New Governance name</label>
								<input type="text" name="editState" id="editState" class="form-control" placeholder="Edit Governance" value="" required>
							</div>
						</div>
					<div class="col-lg-2">
						<div class="form-group">
							<label for="city"></label>
							<button type="submit" class="btn btn-success d-flex align-items-end mt-2" name="stateEditBtn" value="1">Edit Governance</button>
						</div>
					</div>
				</div>
			</form>

				<hr>

			<form action="{{ route('a.locations.update',1) }}" method="POST">
 				@method('PUT') @csrf
				<h6 class="heading-small text-muted mb-2">Edit city</h6>
 				<div class="row">
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
						<div class="col-lg">
							<div class="form-group">
								<label for="editCity">New City name</label>
								<input type="text" name="editCity" id="editCity" class="form-control" placeholder="Edit City" value="" required>
							</div>
						</div>
					<div class="">
						<div class="form-group">
							<label for="city"></label>
							<button type="submit" class="btn btn-success d-flex align-items-end mx-2 mt-2" name="cityEditBtn" value="1">Edit City</button>
						</div>
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>
</section>
{{-- <div >
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
						
					</div>
				</div>
				<div class="modal-body" id="delStateDiv">
					<div class="">
						
					</div>
				</div>
				<div class="modal-body" id="delCityDiv">
					<div class="">
						
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary mx-2" name="edit" id="editbtn">Edit</button>
					<button type="submit" class="btn btn-danger" name="delete" id="deletebtn">Delete</button>
				</div>
				<input type="hidden" id="formid" name="formid" value="">
			</form>
		</div>
	</div>
</div> --}}

<script>
$(document).ready(function(){

	$(document).on('change','#countryId',function(e){
		$("#editCountry").attr('value', $(this).find('option:selected').text());
	});
	$(document).on('change','#statedelstate',function(e){
		$("#editState").attr('value', $(this).find('option:selected').text());
	});
	$(document).on('change','#citydelcity',function(e){
		$("#editCity").attr('value', $(this).find('option:selected').text());
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


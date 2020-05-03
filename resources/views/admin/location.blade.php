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
 			<h6 class="heading-small text-muted mb-2">Add Country</h6>
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
							<button type="submit" class="btn btn-primary d-flex align-items-end mt-2" name="countryBtn" value="1">Add Country</button>
						</div>
					</div>
				</div>
 			</form>

				<hr>
			<form action="{{ route('a.locations.store') }}" method="POST">
 				@method('POST') @csrf
				<h6 class="heading-small text-muted mb-2">Add State</h6>
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
							<label for="addState">State</label>
							<input type="text" name="addState" id="addState" class="form-control" placeholder="Add State">
						</div>
					</div>
					<div class="col-lg-2">
						<div class="form-group">
							<label for="city"></label>
							<button type="submit" class="btn btn-primary d-flex align-items-end mt-2">Add State</button>
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
							<label for="state">State</label>
							<select name="stateId" class="form-control" id="state">
	 						{{-- <option>-NO CITY FOUND-</option> --}}
							</select>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group">
							<label for="addCity">City</label>
							<input type="text" name="addCity" id="addCity" class="form-control" placeholder="Add city">
						</div>
					</div>
					<div class="col-lg-2">
						<div class="form-group">
							<label for="city"></label>
							<button type="submit" class="btn btn-primary d-flex align-items-end mt-2">Add City</button>
						</div>
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>
</section>
<script>
$(document).ready(function(){
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
					$("#state").html('<option>-No state found-</option>');
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
});
</script>
@endsection


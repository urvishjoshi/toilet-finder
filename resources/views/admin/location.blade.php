@section('title','Toilet Locations')
@extends('admin.layouts.app')
@section('location')

<section>
	<div class="content pt-4">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md text-center">
    					<h2>Add Location</h2>
    				</div><!-- /.col -->

    			</div><!-- /.row -->
    			<HR width=50%>
			</div><!-- /.container-fluid -->
    </div>

	<div class="content-header">
		<div class="container-fluid">
 			@method('GET') @csrf
 				<div class="form-group">
 					<label for="country">Select Country</label>
 					<select name="country" class="form-control" id="country">
 						<option>select</option>
						@foreach ($countries as $country)
							<option value="{{ $country->id }}">{{ $country->country }}</option>
						@endforeach
 					</select>
 				</div>
 				<div class="form-group">
 					<label for="state">Select State</label>
 					<select name="state" class="form-control" id="state"></select>
 				</div>
 				<div class="form-group">
 					<label for="city">Select City</label>
 					<select name="city" class="form-control" id="city"></select>
 				</div>
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
				$("#city").html(data);
			}
		});
	});
});
</script>
@endsection


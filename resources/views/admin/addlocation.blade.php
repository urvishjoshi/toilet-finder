@section('title','addlocation')
@extends('admin.layouts.app')
@section('addlocation')

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
 			
 				<div class="form-group">
 					<label for="Country">Select Country</label>
 					<select name="Country" class="form-control" id="Country">
 						<option>--select--</option><!--Coding for display country from countries-->
 						<?php
						foreach ($countries as $countries) {
							echo countries->country;
						}
						?>
 					</select>
 				</div>

 				<div class="form-group">
 					<label for="State">Select State</label>
 					<select name="State" class="form-control" id="State">
 						<option>--select--</option>
 						
 					</select>
 				</div>

 				<div class="form-group">
 					<label for="City">Select City</label>
 					<select name="City" class="form-control" id="City">
 						<option>--select--</option>
 						
 					</select>
 				</div>
			</div>
		</div>
	</div>
</section>
<script>
	$(document).ready(function(){
		$("#Country").on('change',function(){
			var countryId=$(this).val();
			$.ajax({
				method:"POST",
				url:"ajax.php",
				data:{id:countryId},
				dataType:"php",//may be somthing or
				sucess:function(data){
					$("#state").php(data);//may be something or
				}
			});
		});
	});
</script>
@endsection


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
 			<div class="row">
 				<select id="item1">
 					<option disabled="disabled" selected="selected">--select--</option>
				    <option value="0">India</option>
				    <option value="1">US</option>
				    <option value="2">UK</option>
				</select>

				<select id="item2">
				    <option value="">-- select one -- </option>
				</select>

				<select id="item3">
				<option> -- select another one --</option>
				</select>

			</div>
		</div>
	</div>		

</section>
<script>
	$(document).ready(function() {


    $("#item1, #item2").change(function() {
        var value = $(this).val();
        $("#item2").html(options[value]);
        
        var value1 =$("#item2").val();
        $("#item3").html(options1[value]);
    });


    var options = [
       "<option value='test'>IN state-1</option><option value='test2'>IN state-2</option>",


    "<option value='test'>US state-1</option><option value='test2'>US state-2</option>",


    "<option value='test'>UK state-1</option><option value='test2'>UK state-2</option>"
    ];


var options1 = [

	"<option value='test'>IN-state -1 city 1</option><option value='test3'>IN-state -2 city 1</option>",

	"<option value='test'>US -state -1 city-1</option><option value='test3'>US -state -1 city-2</option>",

	"<option value='test'>UK -state -1 city-1</option><option value='test3'>UK -state -1 city-2</option>"];
});

</script>
@endsection


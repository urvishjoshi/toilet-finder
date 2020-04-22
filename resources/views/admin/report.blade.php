@section('title','Reports')
@extends('admin.layouts.app')
@section('report')
<section>
	<div class="container pt-4">
			<div class="container col-auto">
				<div>

					<form action="home.php" method="post" id="form" class="row justify-content-center">

					<div class="col-md-auto" id="dayDiv">
						<input type="date" id="date" name="date">
					</div>
					<div class="col-md-auto" id="monthDiv">
						<select class="custom-select" id="selectMonth" name="selectMonth">
							<option disabled>Select month</option>
								<option value="1">
									January
								</option>
								
						</select>
					</div>
					<div class="col-md-auto" id="displayDiv">
						<select class="custom-select" id="selectDisplay" name="selectDisplay">
							<option disabled>Display by</option>
								<option value="0">
								Player
								</option>
								<option value="1">
								Day
								</option>
								<option value="2">
								Month
								</option>
						</select>
					</div>
					<div class="col-md-auto" id="playerDiv">
						<select class="custom-select" id="selectPlayer" name="selectPlayer">
							<option disabled>Select user</option>
							
						</select>
					</div>
					<div class="col-md-auto">
						<button class="btn btn-primary" value="getRecord" name="getRecord" type="submit">Get Record</button>
					</div>
					</form>

				</div>
			</div>
		</div>
</section>
@endsection
<script>
	$(function(){

		var selectedVal = $('#selectDisplay option:selected').val();
		if (selectedVal==1) {
			$('#playerDiv').css('display','none');
		}

		$('#selectDisplay').change(function(){
			var selectedVal = $('#selectDisplay option:selected').val();

			switch(selectedVal) {
				case '0':  			//for display only by Player
					$('#playerDiv').css('display','block');
					$('#dayDiv').css('display','none');
					$('#monthDiv').css('display','none');
					break;
				case '1':  			//for display only by Day
					$('#dayDiv').css('display','block');
					$('#monthDiv').css('display','none');
					$('#playerDiv').css('display','none');
					break;
				case '2':  			//for display only by Month
					$('#playerDiv').css('display','block');
					$('#monthDiv').css('display','block');
					$('#dayDiv').css('display','none');
					break;
			}
		})
	});
</script>

@section('title','Reports')
@extends('admin.layouts.app')
@section('report')
<section>
	<div class="container pt-3">
		<div class="container col-auto pb-0">
			<div class="row pb-0">
				<div class="col-md pb-0 text-center">
					<h2 class=" mb-0">Toilet Reports</h2>
				</div>
			</div>
			<HR width=40%>
		</div>
	</div>
	<div class="content-header mt-0 pt-1">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<form action="{{ route('a.reports.show',1) }}" method="post" id="form" class="row justify-content-center">
						@method('GET') @csrf
						<div class="col-md-auto">
							<select class="custom-select" id="selectRange" name="selectRange">
								<option disabled="">Select range</option>
								<option value="7">7 days</option>
								<option value="31">30 days</option>
								<option value="6">6 months</option>
								<option value="12">1 year</option>
								<option value="1">All</option>
							</select>
						</div>
						<div class="col-md-auto">
							<button class="btn btn-primary" value="getReport" name="getReport" type="submit">Get Reports</button>
						</div>
					</form>
				</div>
				<div class="col-md-1 align-self-end justify-content-end" id="pdfLink" hidden>
					<a href target="_blank" class="ml-2">Print <i class="fas fa-file-pdf"></i></a>
				</div>
			</div>
			<div class="container-fluid justify-content-center mt-3" id="tableContainer">
			</div>
		</div>
	</div>
</section>
<script>
$(document).ready(function(){
	$("#form").on('submit',function(){
		event.preventDefault();
		var value = $('#selectRange :selected').val();
		$.ajax({
			method:"POST",
			url:"{{ route('a.reports.show',1) }}",
			data: {
               'selectRange': value,
                '_token': $('input[name=_token]').val(),
                '_method': $('input[name=_method]').val(),
            },
			dataType:'html',
			success:function(data){
				$('#pdfLink').attr('hidden',false);
				$('a').attr('href','?pdf='+value);
				$("#tableContainer").html(data);
			}
		});
	});
});
</script>
@endsection

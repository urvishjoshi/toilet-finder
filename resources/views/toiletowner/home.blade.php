@section('title','Dashboard')
@extends('toiletowner.layouts.app')
@section('home')
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-9">
					<h1 class="m-0 text-dark">Dashboard</h1>
				</div><!-- /.col -->
				<div class="custom-control custom-switch ml-5">
					<input type="checkbox" class="custom-control-input" name="autoalloc" id="autoalloc" value="{{$autoalloc[0]['auto_allocate']==0 ? '0' : '1'}}" {{$autoalloc[0]['auto_allocate']==1 ? 'checked' : ''}}>
					@method('POST') @csrf
          
					<label class="custom-control-label" style="font-size: 18px;" for="autoalloc">Auto allocate toilets</label>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class=" col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-success border border-light" style="height: 150px;">

						<div class="inner pl-3">
							<h3>{{ $data['usages'] }}</h3>

							<h4 class="">Toilet usages</h4>
						</div>
						<div class="icon">
						   <i class="fas fa-users"></i>
						</div>
				</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6 ml-4">
					<!-- small box -->
					<div class="small-box bg-warning border border-light" style="height: 150px;">
						<div class="inner pl-3">
							<span style="font-size: 35px;"><b>{{ $data['active'] }}</b>/</span>{{ $data['toilets'] }}
							<h4>Active Toilets</h4><!--Kishan changed User Registrations-->
						</div>
						<div class="icon">
                			<i class="material-icons" style="color:##006652;">flash_on</i>
						</div>
						
					</div>
				</div>
				<!-- ./col -->
			</div>
			<!-- /.row -->

			
          <!-- /.col -->
      	</div><!-- Row 2nd end -->

		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
<script>

$(document).ready(function() {
    $('#autoalloc').change(function() {
        if($('#autoalloc').val()=='0')
        	$("#requestlink").hide();
        else
            $("#requestlink").show();
        $.ajax({
            url: '{{ route('dashboard.store') }}',
            data: {
                   'autoalloc': $('#autoalloc').val(),
                    '_token': $('input[name=_token]').val(),
                    '_method': $('input[name=_method]').val(),
                  },
            type: 'POST',
            dataType: 'json',
            success: function (response) {

                $('#autoalloc').attr('value', response.status);

            }
        });
    });
});
</script>
@endsection
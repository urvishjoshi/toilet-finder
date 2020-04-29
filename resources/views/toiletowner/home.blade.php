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
				<div class="custom-control custom-switch">
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

			  <h3 class="mt-4 mb-4">Social Widgets</h3>

        		<div class="row d-flex justify-content-center">
        			<div class="col-md-7">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info ">
                <h3 class="widget-user-username">Toilet owner Name</h3>
                <h5 class="widget-user-desc">Abc Def</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">5</h5>
                      <span class="description-text">Toilets</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">10</h5>
                      <span class="description-text">Users</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">Rattings</h5>
                      <span class="description-text">In star</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->
      	</div><!-- Row 2nd end -->

		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
<script>

$(document).ready(function() {
    $('#autoalloc').change(function() {
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
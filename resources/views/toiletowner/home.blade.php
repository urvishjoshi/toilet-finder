@section('title','Dashboard')
@extends('toiletowner.layouts.app')
@section('home')
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Dashboard</h1>
				</div><!-- /.col -->
			 <!--Kishan changed  (Removed column for breadcrumb)-->

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
							<h3>53</h3>

							<h4 class="">Toilet user</h4>
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
						<div class="inner">
							<span style="font-size: 35px;font-weight: bold;">3/</span>5				
							<h4>Active Toilet</h4><!--Kishan changed User Registrations-->
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
@endsection

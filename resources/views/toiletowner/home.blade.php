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
					<div class="small-box bg-success" style="height: 150px;">

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
					<div class="small-box bg-warning" style="height: 150px;">
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
			
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
@endsection

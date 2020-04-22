@section('title','Dashboard')
@extends('admin.layouts.app')
@section('home')
  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
            <!--Kishan changed breadcrumb from right side to this-->
             

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
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning border border-light">
              <div class="inner">
                <h3 >150</h3>

                <h4>Toilet Owner</h4><!--Kishan changed  New Orders -->
              </div>
              <div class="icon">
                <i class="fas fa-user-tie"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-lightblue border border-light">
              <div class="inner">
                <h3>53</h3>

                <h4>Toilet User</h4><!--Kishan changed Bounce Rate-->
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-teal border border-light">
              <div class="inner">
                <h3>44</h3>

                <h4>Active Toilet</h4><!--Kishan changed User Registrations-->
              </div>
              <div class="icon">
                <i class="material-icons" style="color:##006652;">flash_on</i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-maroon border border-light">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
    
        </div>
        <!-- /.row -->
       
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->



</div>



    </div>
  </div>
  </section>
  <!-- /.content -->
@endsection

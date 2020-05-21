@section('title','Dashboard')
@extends('admin.layouts.app')
@section('home')
<?php $owners=\App\Model\ToiletOwner::all()->count(); ?>
<?php $users=\App\User::all()->count(); ?>
<?php $toilets=\App\Model\ToiletInfo::where('status','=','1')->count(); ?>
<?php $sales=\App\Model\ToiletUsageInfo::all()->count(); ?>
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
          <!-- <div class="custom-control custom-switch ml-4">

          <input type="checkbox" class="custom-control-input" name="autoalloc" id="autoalloc" value={{-- "{{$autoalloc[0]['auto_allocate']==0 ? '0' : '1'}}" {{$autoalloc[0]['auto_allocate']==1 ? 'checked' : ''}} --}}>
          @method('POST') @csrf
          
          <label class="custom-control-label" style="font-size: 18px;" for="autoalloc">Auto approve requests</label>
        </div> -->


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
            <div class="h-100 small-box bg-warning border border-light">
              <div class="inner">
                <h3 >{{$owners}}</h3>

                <h4>Toilet Owners</h4>

              </div>
              <div class="icon">
                <i class="fas fa-user-tie"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="h-100 small-box bg-lightblue border border-light">
              <div class="inner">
                <h3>{{$users}}</h3>

                <h4>Toilet Users</h4>

              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <!--<a href="#" class="h-100 small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>-->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="h-100 small-box bg-teal border border-light">
              <div class="inner">
                <h3>{{$toilets}}</h3>

                <h4>Active Toilets</h4>

              </div>
              <div class="icon">
                <i class="material-icons" style="color:##006652;">flash_on</i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="h-100 small-box bg-maroon border border-light">
              <div class=" inner">
                <h3>{{$sales}}</h3>

                <h4>Sales</h4>
              </div>
              <div class="icon">
                <i class="fa fa-line-chart" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
    
        </div>
        <!-- /.row -->
       
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->


  </section>
  <!-- /.content -->
@endsection

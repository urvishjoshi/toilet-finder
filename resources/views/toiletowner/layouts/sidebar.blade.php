 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('toiletowner/dashboard') }}" class="brand-link"><!--Kishan changed Link-->
      <img src="{{ asset('favicon.png') }}" alt="Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light"> <b> 7as 7as</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('personal.index') }}" class="d-block {{ (request()->is('toiletowner/personal')) ? 'active' : '' }}">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item" id="requestlink" style="display: {{ $thisOwner[0]['auto_allocate']=='1' ? 'none' : 'block' }};">
            <a href="{{ route('requests.index') }}" class="nav-link {{ (request()->is('toiletowner/requests')) ? 'active' : '' }}"><!--Kishan changed link-->
            <i class="fas fa-user-edit pl-2"></i>&nbsp;
            <p>Requests</p><!--Kishan changed Menu-->
            <span class="badge badge-info right font-14 py-1">{{ count($allRequests) }}</span>
            </a>
          </li> 
          <li class="nav-item">
                <a href="{{ route('toilets.index') }}" class="nav-link {{ (request()->is('toiletowner/toilets')) ? 'active' : '' }}"><!--Kishan changed link-->
                  <i class="fas fa-restroom pl-1"></i>
                  <p class="pl-2">Your Toilets</p><!--Kishan changed Menu-->
                </a>
          </li>
          <li class="nav-item">
             <a href="{{ route('toiletusers.index') }}" class="nav-link {{ (request()->is('toiletowner/toiletusers')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>Your Toilet Users</p>
              </a>
          </li>
          <li class="nav-item"><!--Kishan changed link-->
            <a href="{{ route('sales.index') }}" class="nav-link {{ (request()->is('toiletowner/sales')) ? 'active' : '' }}">
            <i class="fa fa-usd nav-icon" style="font-size: 20px"></i>
              <p>Toilet Sales</p>
            </a>
          </li> 
          <li class="nav-item has-treeview">
            <a href="{{ route('ratings.index') }}" class="nav-link {{ (request()->is('toiletowner/ratings')) ? 'active' : '' }}">
              <i class="nav-icon fa fa-star "></i>
               <p>Your Ratings</p>
            </a>
          </li>  
          
          <li class="nav-item"><!--Kishan changed link-->
            <a href="{{ route('feedbacks.index') }}" class="nav-link {{ (request()->is('toiletowner/feedbacks')) ? 'active' : '' }}">
              <i class="fas fa-envelope" style="padding-left: 5px;"></i>
              <p class="pl-2">Feedback</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

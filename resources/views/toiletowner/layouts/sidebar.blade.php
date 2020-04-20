 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link"><!--Kishan changed Link-->
      <img src="{{ asset('favicon.png') }}" alt="Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light"><b>Toilet</b> Finder</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('toiletowner/dashboard') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
                <a href="{{ route('personal.index') }}" class="nav-link {{ (request()->is('toiletowner/personal')) ? 'active' : '' }}"><!--Kishan changed link-->
                  <i class="far fa-circle nav-icon"></i>
                  <p>Personal info</p><!--Kishan changed Menu-->
                </a>
          </li>
          <li class="nav-item">
                <a href="{{ route('toilets.index') }}" class="nav-link {{ (request()->is('toiletowner/toilets')) ? 'active' : '' }}"><!--Kishan changed link-->
                  <i class="far fa-circle nav-icon"></i>
                  <p>Your Toilets</p><!--Kishan changed Menu-->
                </a>
          </li>
          <li class="nav-item">
             <a href="{{ route('toiletusers.index') }}" class="nav-link {{ (request()->is('toiletowner/toiletusers')) ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Your Toilet Users</p>
              </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('ratings.index') }}" class="nav-link {{ (request()->is('toiletowner/ratings')) ? 'active' : '' }}">
              <i class="nav-icon fa fa-star "></i>
               <p>
                Your Ratings
              </p>
            </a>
          </li>  
          
          <li class="nav-item"><!--Kishan changed link-->
            <a href="{{ route('feedbacks.index') }}" class="nav-link {{ (request()->is('toiletowner/feedbacks')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Feedback</p>
            </a>
          </li>
            
      
         
              

          
          <!--Kishan changed LOG IN AND ANOTHER TAB
          Register,forgot etc..
          -->
        
          
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="{{ route('a.dashboard.index') }}" class="brand-link"><!--Kishan changed Link-->
	  <img src="{{ asset('favicon.png') }}" alt="Logo" class="brand-image img-circle elevation-3">
	  <span class="brand-text font-weight-light"> <b> 7as 7as</b></span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
	  <!-- Sidebar user panel (optional) -->
	  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
		<div class="image">
		  <img src="{{ asset('profileimages/admin/'.$admin01[0]['profile']) }}" class="img-circle elevation-2" alt="User Image">
		</div>
		<div class="info">
		  <a href="{{ route('a.personal.index') }}" class="d-block">{{ Auth::user()->name }}</a>
		</div>
	  </div>

	  <!-- Sidebar Menu -->
	  <nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

			<li class="nav-item">
			  <a href="{{ route('a.requests.index') }}" class="nav-link {{ (request()->is('admin/requests*')) ? 'active' : '' }}"><!--Kishan changed link-->
				<i class="fas fa-user-edit pl-2"></i>&nbsp;
				<p>Requests</p><!--Kishan changed Menu-->
				<span class="badge badge-info right font-14 py-1">{{ count($allRequests) }}</span>
			  </a>
			</li>  

			<li class="nav-item">
			  <a href="{{ route('a.locations.index') }}" class="nav-link {{ (request()->is('admin/locations*')) ? 'active' : '' }}"><!--Kishan changed link-->
				<i class="fas fa-map-marker-alt pl-2"></i>&nbsp;&nbsp;&nbsp;
				<p>Toilet Locations</p><!--Kishan changed Menu-->
			  </a>
			</li>  

			<li class="nav-item"> <!-- Kishan changed removed menu-open class -->
			  <a href="{{ route('a.toiletowners.index') }}" class="nav-link {{ (request()->is('admin/toiletowners*')) ? 'active' : '' }}">
				<i class="nav-icon  fas fa-user-tie"></i>
				<p>Toilet Owners</p>
			  </a>
			</li>
			<li class="nav-item">
			  <a href="{{ route('a.toiletusers.index') }}" class="nav-link {{ (request()->is('admin/toiletusers*')) ? 'active' : '' }}">
				<i class="nav-icon fas fa-users"></i>
				<p>Toilet Users</p>
			  </a>
			</li>
			<li class="nav-item"><!--Kishan changed link-->
			  <a href="{{ route('a.toilets.index') }}" class="nav-link {{ (request()->is('admin/toilets*')) ? 'active' : '' }}">
				<i class="fas fa-restroom pl-1 pr-1"></i>
				  <p>Toilets All</p>
			  </a>
			</li> 
			<li class="nav-item"><!--Kishan changed link-->
			  <a href="{{ route('a.sales.index') }}" class="nav-link {{ (request()->is('admin/sales*')) ? 'active' : '' }}">
				<i class="fa fa-usd nav-icon" style="font-size: 20px"></i>
				  <p>Toilet Sales</p>
			  </a>
			</li> 
			<li class="nav-item">
				  <a href="{{ route('a.ratings.index') }}" class="nav-link {{ (request()->is('admin/ratings*')) ? 'active' : '' }}">
					<i class="fa fa-star nav-icon"></i>
					<p>Toilet Ratings</p>
				  </a>
			</li>
			
			<li class="nav-item">
			  <a href="{{ route('a.reports.index') }}" class="nav-link {{ (request()->is('admin/reports*')) ? 'active' : '' }}">
				<i class="nav-icon fas fa-chart-pie"></i>
				<p>
				 Toilet Reports
				</p>
			  </a>
			</li>     
			<li class="nav-item">
			  <a href="{{ route('a.feedbacks.index') }}" class="nav-link {{ (request()->is('admin/feedbacks*')) ? 'active' : '' }}">
				<i class="fas fa-envelope" style="padding-left: 5px;"></i>
				<p class="pl-2">Feedbacks</p>
			  </a>
			</li><hr>  
		
		</ul>
	  </nav>
	  <!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
  </aside>

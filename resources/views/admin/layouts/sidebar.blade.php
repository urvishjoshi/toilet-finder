 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="{{ route('a.dash') }}" class="brand-link"><!--Kishan changed Link-->
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
		  <a href="" class="d-block">{{ Auth::user()->name }}</a>
		</div>
	  </div>

	  <!-- Sidebar Menu -->
	  <nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				  <!-- Add icons to the links using the .nav-icon class
				  with font-awesome or any other icon font library -->


			<li class="nav-item">
			  <a href="{{ route('a.requests.index') }}" class="nav-link {{ (request()->is('admin/requests')) ? 'active' : '' }}"><!--Kishan changed link-->
				<i class="fas fa-user-edit pl-2"></i>&nbsp;
				<p>Requests</p><!--Kishan changed Menu-->
				<span class="badge badge-info right font-14 py-auto">{{ count($allRequests) }}</span>
			  </a>
			</li>  
			<li class="nav-item"> <!-- Kishan changed removed menu-open class -->
			  <a href="{{ route('a.toiletowners.index') }}" class="nav-link {{ (request()->is('admin/toiletowners')) ? 'active' : '' }}"> <!-- Kishan changed active class -->
				<i class="nav-icon  fas fa-user-tie"></i>
				<p>
				  Toilet Owners
				 <!-- <i class="right fas fa-angle-left"></i>--><!-- Kishan changed removed dropdown icon -->
				</p>
			  </a>
			</li>
			<li class="nav-item"><!--Kishan changed link-->
			  <a href="{{ route('a.sales.index') }}" class="nav-link {{ (request()->is('admin/sales')) ? 'active' : '' }}">
				<i class="fa fa-usd nav-icon" style="font-size: 20px"></i>
				  <p>Toilet Sales</p>
			  </a>
			</li> 
			<li class="nav-item">
				  <a href="{{ route('a.ratings.index') }}" class="nav-link {{ (request()->is('admin/ratings')) ? 'active' : '' }}">
					<i class="fa fa-star nav-icon"></i>
					<p>Toilet Ratings</p>
				  </a>
			</li>
			
			<li class="nav-item">
			  <a href="{{ route('a.toiletusers.index') }}" class="nav-link {{ (request()->is('admin/toiletusers')) ? 'active' : '' }}">
				<i class="nav-icon fas fa-users"></i>
				<p>
				  Toilet Users
				  <!-- kishan changed<i class="fas fa-angle-left right"></i> -->
				  <!-- Kishan changed <span class="badge badge-info right">6</span>-->
				</p>
			  </a>
			</li>
			<li class="nav-item">
			  <a href="{{ route('a.reports.index') }}" class="nav-link {{ (request()->is('admin/reports')) ? 'active' : '' }}">
				<i class="nav-icon fas fa-chart-pie"></i>
				<p>
				 Toilet Reports
				  <!-- kishan changed<i class="right fas fa-angle-left"></i>-->
				</p>
			  </a>
			</li>     
			{{-- <li class="nav-item">
			  <a href="{{ route('a.permissions.index') }}" class="nav-link {{ (request()->is('admin/permissions')) ? 'active' : '' }}">
				<i class="nav-icon fas fa-edit"></i>
				<p>
				  Permissions      <!--Kishan changed Menu-->
				  <!-- Kishan changed <i class="fas fa-angle-left right"></i>-->
				</p>
			  </a>
			</li><hr>   --}}
		
		</ul>
	  </nav>
	  <!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
  </aside>

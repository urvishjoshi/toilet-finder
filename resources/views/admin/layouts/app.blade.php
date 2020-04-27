<!DOCTYPE html>
<html lang="en">
<head>
	@section('session','Admin')
	@include('layouts.head')
	
	<?php $allRequests=\App\Model\ToiletOwner::where('status','=','0')->get(); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini layout-fixed">
	<div class="wrapper">
		@include('admin.layouts.header')
		@include('admin.layouts.sidebar')

		<div class="content-wrapper">
			@yield('home')
			@yield('request.index')
				@yield('request.show')

				@yield('toiletowner.index')
				@yield('toiletowner.show')

				@yield('toiletuser.index')
				@yield('toiletuser.show')

				@yield('toilet.index')
				@yield('toilet.show')

				@yield('rating.index')
				@yield('rating.show')
			@yield('sale')		
			@yield('permission')
			@yield('report')
			@yield('search')		
		</div>

		@include('layouts.footer')
	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	@section('session','Admin')
	@include('layouts.head')
	<style> th,td{text-align: center;} .font-14{ font-size: 14px!important; } .font-20{ font-size: 24px!important; } 
	.style{float:right;margin: 0px -5px -10px 0px;padding: 2.6px 5px!important;z-index: 1;}</style>
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
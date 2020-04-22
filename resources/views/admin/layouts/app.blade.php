<!DOCTYPE html>
<html lang="en">
<head>
	@section('session','Admin')
	@include('layouts.head')
</head>
<body class="hold-transition skin-blue sidebar-mini layout-fixed">
	<div class="wrapper">
		@include('admin.layouts.header')
		@include('admin.layouts.sidebar')

		<div class="content-wrapper">
			@yield('home')
			@yield('permission')
			@yield('rating')
			@yield('report')
			@yield('request')
			@yield('sale')		
			@yield('toiletowner')
			@yield('toiletuser')
			@yield('toiletownersinfo')
		</div>

		@include('layouts.footer')
	</div>
</body>
</html>
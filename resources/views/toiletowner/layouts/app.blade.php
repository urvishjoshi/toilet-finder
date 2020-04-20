<!DOCTYPE html>
<html lang="en">
<head>
	@section('session','Toiletowner')
	@include('layouts.head') 
</head>
<body class="hold-transition skin-blue sidebar-mini layout-fixed">
	<div class="wrapper">
		@include('toiletowner.layouts.header')
		@include('toiletowner.layouts.sidebar')

		<div class="content-wrapper">
			@yield('home')
			@yield('toilet')
			@yield('toiletuser')
			@yield('personal')
			@yield('rating')
		</div>

		@include('layouts.footer')
	</div>
</body>
</html>
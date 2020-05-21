<!DOCTYPE html>
<html lang="en">
<head>
	@section('session','Admin')
	@include('layouts.head')
	
	<?php $allRequests=\App\Model\ToiletOwner::where('status','=','0')->get(); ?>
<<<<<<< HEAD
=======
	
>>>>>>> 7b9e507... adf
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
<<<<<<< HEAD
=======
				@yield('toiletuser.profile')
>>>>>>> 7b9e507... adf

				@yield('toilet.index')
				@yield('toilet.show')

				@yield('rating.index')
				@yield('rating.show')
			@yield('sale')
			@yield('permission')
			@yield('report')
			@yield('feedback')
			@yield('location')
<<<<<<< HEAD

			@if(Session::has('a.toast'))
				<div id="toast" class="mx-auto container row justify-content-center">
					<div class="alert bg-dark text-white" id="toast-body">
						{{ Session::get('a.toast') }}
=======
			@yield('setting')

			@if(Session::has('toast'))
				<div id="toast" class="mx-auto container row justify-content-center">
					<div class="alert bg-dark text-white" id="toast-body">
						{{ Session::get('toast') }}
>>>>>>> 7b9e507... adf
					</div>
				</div>
				<script>setTimeout(function() { $('#toast').fadeOut('slow'); }, 3500);</script>
			@endif
			
		</div>
		@include('layouts.footer')
	</div>
</body>
</html>
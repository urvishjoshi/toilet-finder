<!DOCTYPE html>
<html lang="en">
<head>
	@section('session','Toiletowner')
	@include('layouts.head') 
	<?php $allRequests=\App\Model\ToiletUsageInfo::where('status','=','0')->where('owner_id',Auth::user()->id)->get(); 
	$thisOwner=\App\Model\ToiletOwner::where('id',Auth::user()->id)->get(); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini layout-fixed">
	<div class="wrapper">
		@include('toiletowner.layouts.header')
		@include('toiletowner.layouts.sidebar')

		<div class="content-wrapper">
			@yield('home')
				@yield('request')

				@yield('toilet.index')
				@yield('toilet.show')

				@yield('toiletuser.index')
				@yield('toiletuser.show')
			@yield('personal')
			@yield('rating')
			@yield('sale')
			@yield('feedback')
		</div>

		@include('layouts.footer')
	</div>
</body>
</html>
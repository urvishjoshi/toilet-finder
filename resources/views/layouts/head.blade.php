  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title') | @yield('session') Toilet Finder @yield('session')</title>
  <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon" class="img-circle" />
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('https:code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Google icons-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- fontawesome icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Custom css Define in public/css/folder (Feel free to use the class of this css)-->
  <link rel="stylesheet" type="text/css" href="{{ asset ('css/style.css')}}">

  <!--custom style for active class color in sidebars) -->
  <style>
    .active{
      background-color: #6c757d!important;
    }
  </style>





  <!-- css -->
  @section('admincss')<!---Admin=>layouts=>app.blade  -> -->
    <style type="text/css">
   
    </style>
  @endsection

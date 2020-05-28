<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>@yield('title') | @yield('session') Toilet Finder</title>
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
<link rel="stylesheet" href="https:code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!-- Google icons-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- fontawesome icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- kishan add jquery cdn-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--custom style for active class color in sidebars) -->
<style>
    #toast-body{position:fixed;top:80%;z-index: 9999;opacity: 0.9}
    .active{
        background-color: #6c757d!important;
    }
    .pointer{cursor: pointer;}
    th,td{text-align: center;} 
    .font-14{ font-size: 14px!important; } 
    .font-20{ font-size: 24px!important; } 
    .style{float:right;margin: 0px -5px -10px 0px;padding: 2.6px 5px!important;z-index: 1;}

    /*profile-img*/
    #profileDiv {
        position: relative;
        /*background-color:black;*/
    }
    .profileimg {
        opacity: 1;
        transition: .5s ease;
        backface-visibility: hidden;
    }
    .hoverabletext {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }
    #profileDiv:hover .profileimg {
        /*background-color:black!important;*/
        opacity: 0.5;
    }
    #profileDiv:hover .hoverabletext {
        opacity: 1;

    }
    .imgtext {
        color: black;
        font-size: 200%;
        /*background-color:white;*/
    }
</style>




<!-- css -->
@section('admincss')<!---Admin=>layouts=>app.blade  -> -->
<style type="text/css">

</style>
@endsection

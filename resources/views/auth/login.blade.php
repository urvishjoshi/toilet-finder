@section('title','Login')
@extends('layouts.app')

@section('content')
<div class="login-box mx-auto">
  <div class="login-logo">
    <a href="#"><b>{{ isset($url) ? ucwords($url) : ""}} </b>Login</a><!--Kishan changed Link-->
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
     
      <p class="login-box-msg">Sign in to start your session</p> 

      @isset($url)
      <form method="POST" action='{{ url("$url/login") }}' aria-label="{{ __('Login') }}">
      @else
      <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
      @endisset
          @csrf
        <div class="form-group mb-3">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" autocomplete="email" autofocus>

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          {{-- <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div> --}}
        </div>
        <div class="form-group mb-3">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" autocomplete="current-password">

          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          {{-- <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div> --}}
        </div>
        <div class="row">
          {{-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> --}}
          <!-- /.col -->
          <div class="mx-auto col-3">
            <button type="submit" class="btn @if($url=='admin') btn-dark @else btn-primary @endif "> Login </button>

          </div>
          <!-- /.col -->
        </div>
      </form>

      {{-- <div class="social-auth-links text-center mb-3">
        @if($url=='toiletowner')<p>- OR -</p>@endif
      
      </div> --}}
      <!-- /.social-auth-links -->
      <div class="col-10 ml-5"><!--Kishan changed (add column for adjust link) -->
        <p class="mb-1 ml-4">
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            @endif
        </p>
        {{-- <p class="mb-0 ml-2">
          <a href="register.html" class="text-center">Register a new membership</a>
        </p> --}}
        </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
@if(Session::has('reg.msg'))
    <div id="toast" class="mx-auto container row justify-content-center">
        <div class="alert bg-dark text-white" id="toast-body">
            {{ Session::get('reg.msg') }}
        </div>
    </div>
    <script>setTimeout(function() { $('#toast').fadeOut('slow'); }, 3500);</script>
@endif
@endsection

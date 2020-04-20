  <!-- Navbar -->
  @section('session','Toiletowner')
    <nav class="main-header navbar navbar-expand navbar-black navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    {{-- <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}
    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            @if(isset($url))
                @if($url != 'admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url("$url/login") }}">{{ __('Login') }}</a>
                </li>
                @endif
                @if (Route::has('register') && $url != 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url("$url/register") }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("login") }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{ route("register") }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ url("toiletowner/logout") }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </div>
            </li>
        @endguest
    </ul>
  </nav>
  <!-- /.navbar -->
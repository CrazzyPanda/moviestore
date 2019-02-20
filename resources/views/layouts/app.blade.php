<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('storage/css/mystyle.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-laravel" id="top">
        <div class="navbar-brand">
          <img src="{{ URL::asset('storage/icons/LogoMakr_6pJHDs.png') }}" width="100" height="55" alt="OMS Logo">
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
            @if (Auth::user() == null || Auth::user()->hasRole('customer'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" role="button"
                  aria-haspopup="true" aria-expanded="false">Categories</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @foreach (App\Genre::all() as $genre)
                  <a class="dropdown-item" href="{{ route('genres.show', $genre) }}">{{ $genre->name}}</a>
                  @endforeach
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('basket.view') }}">{{ __('Shopping Basket') }}</a>
            </li>
            @endif
            @if (Auth::user() != null && Auth::user()->hasRole('admin'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.home') }}">{{ __('Home') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.orders.index') }}">{{ __('Orders') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.movies.index') }}">{{ __('Movies') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.users.index') }}">{{ __('Users') }}</a>
            </li>
            @endif
          </ul>

          <!-- Right Side Of Navbar -->
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              @if (Auth::user() == null || Auth::user()->hasRole('customer'))
              <li class="nav-item">
                  <form class="form-inline my-2 my-lg-0" action="{{ route('search')}}" method="POST" role="search">
                      @csrf
                      <input class="form-control form-control-sm mr-3"
                             type="text"
                             placeholder="Search"
                             aria-label="Search"
                             name="terms"/>
                      <button class="btn btn-outline-primary btn-sm my-2 my-sm-0" type="submit">Search</button>
                  </form>
              </li>
              @endif
            @if (Auth::user() != null && Auth::user()->hasRole('customer'))
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                  aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('customer.profile.show') }}">My Profile</a>
                <a class="dropdown-item" href="{{ route('customer.orders.index') }}">My Orders</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">{{ __('Logout') }}
                </a>
              </div>
            </li>
            @elseif (Auth::user() != null && Auth::user()->hasRole('admin'))
            <li class="nav-item">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">{{ __('Logout') }}
                </a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
          </ul>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </div>
    </nav>

    <main class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flash-message">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-' . $msg))
                                <p class="alert alert-auto alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </main>

    <div class="footer">
      <ul>
        <li>
          <a class="footer-link" href="{{ route('home') }}">{{ __('Home') }}</a>
        </li>
        <li class="nav-item">
            <a class="footer-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        <li class="nav-item">
            <a class="footer-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        <li><a class="footer-link" href="#">About Us</a></li>
      </ul>
      <ul>
        <li><a class="footer-link" href="#">Help</a></li>
        <li><a class="footer-link" href="#">Privacy Policy</a></li>
        <li><a class="footer-link" href="#">Cookies</a></li>
        <li><a class="footer-link" href="#">Terms & Conditions</a></li>
      </ul>
      <ul>
        <li><p>Follow Us:</p></li>
        <li><a class="footer-link" href="#">Facebook</a></li>
        <li><a class="footer-link" href="#">Instagram</a></li>
        <li><a class="footer-link" href="#">Twitter</a></li>
      </ul>

      <p>Created my free logo at <a href="https://my.logomakr.com/">LogoMakr.com</a></p>
      <p>Copyright &copy; 2018 OMS.com. All Rights Reserved.</p>
    </div>
  </div>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>

  @yield('script')
  <script type="text/javascript">
    $(".alert-auto").delay(4000).slideUp(200, function() {
        $(this).alert('close');
    });
  </script>
</body>
</html>

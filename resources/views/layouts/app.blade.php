<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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
          <img src="{{ URL::asset('storage/css/LogoMakr_6pJHDs.png') }}" width="100" height="55" alt="OMS Logo">
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
          <ul class="navbar-nav ml-auto">
            @if (Auth::user() != null && Auth::user()->hasRole('customer'))
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control form-control-sm mr-3" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-primary btn-sm my-2 my-sm-0" type="submit">Search</button>
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link"></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                  aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
              <div class="dropdown-menu">
                <a class="dropdown-item nav-link" href="{{ route('customer.profiles.index') }}">View Profile</a>
                <a class="dropdown-item nav-link" href="{{ route('customer.orders.index') }}">View Order History</a>
                <a class="dropdown-item nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">{{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @elseif (Auth::user() != null && Auth::user()->hasRole('admin'))
                <a class="dropdown-item nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">{{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
            </li>
            @else
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control form-control-sm mr-3" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-primary btn-sm my-2 my-sm-0" type="submit">Search</button>
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
          </ul>
        </div>
    </nav>

    <main class="py-4">
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
</body>
</html>

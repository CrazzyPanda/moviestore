<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Homepage</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- CSS -->
        <link href="{{ URL::asset('css/mystyle.css') }}" rel="stylesheet" type="text/css">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>

    <body>
      <div class="container">
        <div class="row">
          <div class="col">
            <ul class="nav justify-content-end">
              @if (Route::has('login'))
                @auth
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">My Account</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">View Profile</a>
                      <a class="dropdown-item" href="#">View Order History</a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
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
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  <li class="nav-item">
                      @if (Route::has('register'))
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      @endif
                  </li>
                @endauth
              @endif
            </ul>
          </div>
        </div>

        <div class="row">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                  aria-haspopup="true" aria-expanded="false">Categories</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Animation</a>
                <a class="dropdown-item" href="#">Comedy</a>
                <a class="dropdown-item" href="#">Drama</a>
                <a class="dropdown-item" href="#">Fantasy</a>
                <a class="dropdown-item" href="#">Sci-Fi</a>
                <a class="dropdown-item" href="#">Thriller</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">My Basket</a>
            </li>

          </ul>
        </div>

          @auth
            @if (Auth::user()->hasRole('customer'))
            <!-- Recommended For You -->
            <div class="row">
              <div class="col"><h5>Recommended For You</h5></div>
            </div>

            <div id="recommendedCarousel" class="carousel slide carousel-multi-item" data-interval="false">
              <div class="carousel-inner" role="listbox">

                  @foreach (Auth::user()->customer->recommended() as $movie)
                      @if ($loop->index % 3 == 0)
                      <div class="carousel-item {{ ($loop->index == 0) ? "active" : "" }}">
                        <div class="row">
                      @endif
                      <div class="col-4 {{ ($loop->index % 3 == 0) ? "" : "d-inline-block" }}">
                        <div class="card">
                          <img src="{{ asset('storage/images/fantastic-beast.jpg') }}" alt="{{ $movie->name }}" class="card-img-top" style="height: 190px;">
                          <p>{{ $movie->name }}</p>
                        </div>
                      </div>
                      @if ($loop->index % 3 == 2)
                          </div>
                      </div>
                      @endif
                  @endforeach
              </div>

              <!-- Controls -->
              <a class="carousel-control-prev" href="#recommendedCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#recommendedCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!-- /Controls -->
            </div>
            <!-- /Recommended For You -->
            @endif
          @endauth
            <!-- Top Selling -->
            <div class="row">
              <div class="col"><h5>Top Selling</h5></div>
            </div>

            <div id="topSellingCarousel" class="carousel slide carousel-multi-item" data-interval="false">
              <div class="carousel-inner" role="listbox">

                   @foreach (App\Movie::topSelling() as $movie)
                       @if ($loop->index % 3 == 0)
                       <div class="carousel-item {{ ($loop->index == 0) ? "active" : "" }}">
                         <div class="row">
                       @endif
                       <div class="col-4 {{ ($loop->index % 3 == 0) ? "" : "d-inline-block" }}">
                         <div class="card">
                           <img src="{{ asset('storage/images/fantastic-beast.jpg') }}" alt="{{ $movie->name }}" class="card-img-top" style="height: 190px;">
                           <p>{{ $movie->name }}</p>
                         </div>
                       </div>
                       @if ($loop->index % 3 == 2)
                           </div>
                       </div>
                       @endif
                   @endforeach
              </div>

              <!-- Controls -->
              <a class="carousel-control-prev" href="#topSellingCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#topSellingCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!-- /Controls -->
            </div>
            <!-- /Top Selling -->

            @foreach (App\Genre::all() as $genre)
            <div class="row">
              <div class="col"><h5>{{ $genre->name }}</h5></div>
            </div>

            <div id="carousel-{{ $genre->id }}" class="carousel slide carousel-multi-item" data-interval="false">
              <div class="carousel-inner" role="listbox">
                @foreach ($genre->movies as $movie)
                    @if ($loop->index % 3 == 0)
                    <div class="carousel-item {{ ($loop->index == 0) ? "active" : "" }}">
                      <div class="row">
                    @endif
                    <div class="col-4 {{ ($loop->index % 3 == 0) ? "" : "d-inline-block" }}">
                      <div class="card">
                        <img src="{{ asset('storage/images/fantastic-beast.jpg') }}" alt="{{ $movie->name }}" class="card-img-top" style="height: 190px;">
                        <p>{{ $movie->name }}</p>
                      </div>
                    </div>
                    @if ($loop->index % 3 == 2 || $loop->last)
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>


           <!-- Controls -->
           <a class="carousel-control-prev" href="#carousel-{{ $genre->id }}" role="button" data-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
           </a>
           <a class="carousel-control-next" href="#carousel-{{ $genre->id }}" role="button" data-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
           </a>
           <!-- /Controls -->
         </div>
            @endforeach
            
      </div>
      <!-- /End Of Container -->


        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>

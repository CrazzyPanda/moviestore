@extends('layouts.app')

@section('content')
<div class="container">
  @if (Auth::user() == null)
  <div id="bannerCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      @foreach (App\Movie::topSelling() as $movie)
      <div class="carousel-item {{ ($loop->index == 0) ? "active" : "" }} ">
        <img class="d-block w-100"  src="{{ asset('storage/' . $movie->image->path) }}" alt="{{ $movie->name }}">
      </div>
      @endforeach
    </div>
  </div>
  @endif


    @auth
      @if (Auth::user()->hasRole('customer'))
        <!-- Recommended For You -->
        <div class="row"><h5>Recommended For You</h5></div>
        <div class="row">
          <div id="recommendedCarousel" class="carousel slide carousel-multi-item" data-interval="false">
            <div class="carousel-inner" role="listbox">
            @foreach (Auth::user()->customer->recommended() as $movie)
                @if ($loop->index % 3 == 0)
                <div class="carousel-item {{ ($loop->index == 0) ? "active" : "" }}">
                  <div class="row">
                    @endif
                    @component('components.movies.card', [
                        'movie' => $movie,
                        'numItems' => 3,
                        'first' => $loop->index % 3 == 0
                    ])
                    @endcomponent
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
          <!-- /End of carousel -->
        </div>
        <!-- /Recommended For You -->
      @endif
    @endauth

        <!-- Top Selling -->
        <div class="row"><h5>Top Selling</h5></div>
        <div class="row">
          <div id="topSellingCarousel" class="carousel slide carousel-multi-item" data-interval="false">
            <div class="carousel-inner" role="listbox">
              @foreach (App\Movie::topSelling() as $movie)
                @if ($loop->index % 3 == 0)
                 <div class="carousel-item {{ ($loop->index == 0) ? "active" : "" }}">
                   <div class="row">
                 @endif
                 @component('components.movies.card', [
                     'movie' => $movie,
                     'numItems' => 3,
                     'first' => $loop->index % 3 == 0
                 ])
                 @endcomponent
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
        </div>

        @foreach (App\Genre::all() as $genre)
        <div class="row" data-spy="scroll" data-target="#navbar-example2"><h5 id="{{ $genre->name }}">{{ $genre->name }}</h5></div>
        <div class="row">
          <div id="carousel-{{ $genre->id }}" class="carousel slide carousel-multi-item" data-interval="false">
            <div class="carousel-inner" role="listbox">
              @foreach ($genre->movies as $movie)
                @if ($loop->index % 6 == 0)
                <div class="carousel-item {{ ($loop->index == 0) ? "active" : "" }}">
                  <div class="row">
                @endif
                @component('components.movies.card', [
                    'movie' => $movie,
                    'numItems' => 6,
                    'first' => $loop->index % 6 == 0
                ])
                @endcomponent
                @if ($loop->index % 6 == 5 || $loop->last)
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
        </div>
      @endforeach

</div>
<!-- /End Of Container -->
@endsection

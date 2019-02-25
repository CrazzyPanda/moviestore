@extends('layouts.app')

@section('content')
  <div class="container">
      @if (Auth::user() == null)
          <div class="row">
              <div id="bannerCarousel" class="carousel slide carousel-fade col" data-ride="carousel">
                  <div class="carousel-inner">
                      @foreach (App\Movie::topSelling() as $movie)
                          <div class="carousel-item {{ ($loop->index == 0) ? "active" : "" }}">
                              <img class="d-block w-100" src="">
                          </div>
                      @endforeach
                  </div>
              </div>
          </div>
      @endif
      <br>
    <!-- Recommended For You -->
      @auth
          @if (Auth::user() != null && Auth::user()->hasRole('customer'))
              <!-- @if (Auth::user()->customer->orders == null) -->
                <div class="row"><h5 class="title">Recommended For You</h5></div>
              <!-- @endif -->
              @component('components.movies.carousel', [
                  'idName' => 'recommendedCarousel',
                  'carouselItems' => Auth::user()->customer->recommended(),
                  'numItems' => 4,
                  'height' => '300px;',
                  'width' => '280px;'
              ])
              @endcomponent
          @endif
      @endauth
    <!-- /Recommended For You -->
    <!-- Top Selling -->
    <div class="row"><h5 class="title">Top Selling</h5></div>
    @component('components.movies.carousel', [
        'idName' => 'topSellingCarousel',
        'carouselItems' => App\Movie::topSelling(),
        'numItems' => 4,
        'height' => '300px;',
        'width' => '280px;'
    ])
    @endcomponent
    <!-- /Top Selling -->
    <!-- New Releases -->
    <div class="row"><h5 class="title">New Releases</h5></div>
    @component('components.movies.carousel', [
        'idName' => 'newReleaseCarousel',
        'carouselItems' => App\Movie::newRelease(),
        'numItems' => 4,
        'height' => '300px;',
        'width' => '280px;'
    ])
    @endcomponent
    <!-- /New Releases -->
    <!-- List of Genres -->
    @foreach (App\Genre::all() as $genre)
    <hr>
      <div class="row">
        <h5 class="title" id="{{ $genre->name }}">{{ $genre->name }}</h5>
      </div>
      @component('components.movies.carousel', [
          'idName' => 'carousel-'. $genre->name,
          'carouselItems' => $genre->movies,
          'numItems' => 6,
          'height' => '230px;',
          'width' => '180px;'
      ])
      @endcomponent
    @endforeach
    <!-- /List of Genres -->


  </div>
  <div class="backToTop">
    <button type="button" class="btn"><a href="#top">&#8593;</a></button>
  </div>
  <!-- /End Of Container -->
@endsection

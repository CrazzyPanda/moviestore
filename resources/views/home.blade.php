@extends('layouts.app')

@section('content')
  <div class="container">
    @if (Auth::user() == null)
    <div class="row">
      <div id="bannerCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          @foreach (App\Movie::topSelling() as $movie)
          <div class="carousel-item {{ ($loop->index == 0) ? "active" : "" }} ">
            <img class="d-block w-100" src="">
          </div>
          @endforeach
        </div>
      </div>
    </div>
    @endif
    <br>

    @auth
      @if (Auth::user()->hasRole('customer'))
        <!-- Recommended For You -->
        <div class="row"><h5 class="title">Recommended For You</h5></div>
        @component('components.movies.carousel', [
            'idName' => 'recommendedCarousel',
            'carouselItems' => Auth::user()->customer->recommended(),
            'numItems' => 4,
            'height' => '260px;'
        ])
        @endcomponent
        <!-- /Recommended For You -->
      @endif
    @endauth

    <!-- Top Selling -->
    <div class="row"><h5 class="title">Top Selling</h5></div>
    @component('components.movies.carousel', [
        'idName' => 'topSellingCarousel',
        'carouselItems' => App\Movie::topSelling(),
        'numItems' => 4,
        'height' => '260px;'
    ])
    @endcomponent
    <!-- /Top Selling -->

    <!-- New Releases -->
    <div class="row"><h5 class="title">New Releases</h5></div>
    @component('components.movies.carousel', [
        'idName' => 'newReleaseCarousel',
        'carouselItems' => App\Movie::newRelease(),
        'numItems' => 4,
        'height' => '260px;'
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
          'height' => '190px;'
      ])
      @endcomponent
    @endforeach
    <!-- /List of Genres -->

    <div>
      <button type="button" class="btn"><a href="#top">&#8593;</a></button>
    </div>
  </div>
  <!-- /End Of Container -->
@endsection

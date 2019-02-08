@extends('layouts.app')

@section('content')

  <div class="container">
    @if (Auth::user() == null)
    <div class="row">
      <div id="bannerCarousel" class="carousel slide carousel-fade col-12" data-ride="carousel">
        <div class="carousel-inner">
          @foreach (App\Movie::topSelling() as $movie)
          <div class="carousel-item {{ ($loop->index == 0) ? "active" : "" }} ">
            <img class="d-block w-100"  style="height: 500px; object-fit: cover" src="{{ asset('storage/' . $movie->image->path) }}" alt="{{ $movie->name }}">
          </div>
          @endforeach
        </div>
      </div>
    </div>
    @endif

    @auth
      @if (Auth::user()->hasRole('customer'))
        <!-- Recommended For You -->
        <div class="row"><h5 class="title col-12">Recommended For You</h5></div>
        @component('components.movies.topCarousel', [
            'idName' => 'recommendedCarousel',
            'carouselItems' => Auth::user()->customer->recommended(),
            'numItems' => 3
        ])
        @endcomponent
        <!-- /Recommended For You -->
      @endif
    @endauth

    <!-- Top Selling -->
    <div class="row"><h5 class="title col-12">Top Selling</h5></div>
    @component('components.movies.topCarousel', [
        'idName' => 'topSellingCarousel',
        'carouselItems' => App\Movie::topSelling(),
        'numItems' => 3
    ])
    @endcomponent
    <!-- /Top Selling -->

    <!-- List of Genres -->
    @foreach (App\Genre::all() as $genre)
      <div class="row" data-spy="scroll" data-target="#navbar"><h5 class ="title col-12" id="{{ $genre->name }}">{{ $genre->name }}</h5></div>
      @component('components.movies.carousel', [
          'idName' => 'carousel-'. $genre->name,
          'carouselItems' => $genre->movies,
          'numItems' => 6
      ])
      @endcomponent
    @endforeach
    <!-- /List of Genres -->

  </div>
  <!-- /End Of Container -->
@endsection

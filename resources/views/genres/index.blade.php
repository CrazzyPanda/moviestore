@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3 class="title">{{ $genre->name }}</h3>
    </div>
      @if ($movies->isEmpty())
      <div class="row">
        <p>There are no movies for this category. </p>
      </div>
      @else
        @component('components.movies.carousel', [
            'idName' => 'topSellingCarousel',
            'carouselItems' => $movies,
            'numItems' => 6,
            'height' => '260px;'
        ])
        @endcomponent
      @endif
</div>
@endsection

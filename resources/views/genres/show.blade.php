@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="row">
                <h3 class="title">{{ $genre->name }}</h3>
            </div>
            @component('components.movies.carousel', [
                'idName' => 'topSellingCarousel',
                'carouselItems' => $movies,
                'numItems' => 6,
                'height' => '260px;'
            ])
            @endcomponent

    </div>
</div>
@endsection

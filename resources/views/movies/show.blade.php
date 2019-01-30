@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                    </div>


                    <div class="col-md-6">
                        <div><h3>{{ $movie->name }}</h3></div>
                        <div><i>{{ $movie->genre->name }}</i></div>
                        <div><p>{{ $movie->summary }}</p></div>
                        <div><p>€{{ $movie->price }}</p></div>
                        <div>
                            @if (Auth::user() == null || Auth::user()->hasRole('customer'))
                                <form action="{{ route('basket.add')}}" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="movie_id" value="{{ $movie->id }}">
                                    <button type="submit">Add to basket</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
                <hr/>

                <div class="row">
                    <div class="col-md-12">
                        <div><h5>Product Details</h5></div>
                    <hr/>
                        <p>Main Cast: {{ $movie->mainCast }}</p>
                        <p>Directors: {{ $movie->directors }}</p>
                        <p>Producers: {{ $movie->producers }}</p>
                        <p>Writers: {{ $movie->writers }}</p>
                        <p>Run Time: {{ $movie->runTime }}</p>
                        <p>Release Date: {{ $movie->releaseDate }}</p>
                        <p>Region: {{ $movie->region }}</p>
                        <p>Language: {{ $movie->language }}</p>
                        <p>Type: {{ $movie->type }}</p>
                    </div>
                </div>
                <hr/>

                <div class="row">
                    <div class="col-md-12">
                        <div><h5>Reviews</h5></div>
                    <hr/>
                        <!-- <p>{{ $review->customer->user->name }}</p> -->
                        <div class='row'>
                            <div class='col-md-3'>
                                <b>{{ $review->title }}</b>
                                <small>{{ $review->date }}</small>
                            </div>
                            <div class='col-md-9'>
                                <p>{{ $review->starRating }}</p>
                            </div>
                        </div>
                        <p></p>
                        <p>{{ $review->text }}</p>
                    </div>
                </div>

        </div>
    </div>
</div>
@endsection

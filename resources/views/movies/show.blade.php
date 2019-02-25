@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('storage/' . $movie->image->path) }}" alt="{{ $movie->name }}" style="height: 400px;">
            </div>
        </div>
        <div class="col-md-8">
            <div><h3 class="title">{{ $movie->name }}</h3></div>
            <div><p class="genre">{{ $movie->genre->name }}</i></div>
            <div><p>{{ $movie->summary }}</p></div>
            <div><p>€{{ $movie->price }}</p></div>
            <div>
                @if (Auth::user() == null || Auth::user()->hasRole('customer'))
                    <form action="{{ route('basket.add') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="movie_id" value="{{ $movie->id }}">
                        <button class="btn btn-outline-primary" type="submit">Add to basket</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div><h5 class="title">Product Details</h5></div>
            <p><span class="movieLabel">Main Cast: </span>{{ $movie->mainCast }}</p>
            <p><span class="movieLabel">Directors: </span>{{ $movie->directors }}</p>
            <p><span class="movieLabel">Producers: </span>{{ $movie->producers }}</p>
            <p><span class="movieLabel">Writers: </span>{{ $movie->writers }}</p>
            <p><span class="movieLabel">Run Time: </span>{{ $movie->runTime }}</p>
            <p><span class="movieLabel">Release Date: </span>{{ $movie->releaseDate }}</p>
            <p><span class="movieLabel">Region: </span>{{ $movie->region }}</p>
            <p><span class="movieLabel">Language: </span>{{ $movie->language }}</p>
            <p><span class="movieLabel">Type: </span>{{ $movie->type }}</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
          <h5 class="title">Reviews</h5>
            @if ($movie->reviews->isEmpty())
              <p>There are no reviews for this movie.</p>
            @endif
            @if (Auth::user() != null && Auth::user()->hasRole('customer'))
              <div>
                  <a class="btn btn-outline-primary" href="{{ route('movies.reviews.create', $movie->id) }}">Write a review</a>
              </div>
            @endif
            <br>
            @foreach ($reviews as $review)
              <table class="table table-bordered">
                  <thead>
                      <tr>
                        <th>
                          <div class="row">
                              <div class="col-md-9">
                                  <i class="material-icons">perm_identity</i>
                                  <span class="reviewUserName">{{ $review->customer->user->name }}</span>
                              </div>
                              @if (Auth::user() != null && Auth::user()->hasRole('customer') && $review->customer_id == Auth::user()->customer->id )
                                  <div class="col-md-3">
                                      <a class="btn btn-outline-warning btn-sm" href="{{ route('movies.reviews.edit', [$movie->id, $review->id]) }}">Edit</a>
                                      <a class="btn btn-outline-danger btn-sm" href="{{ route('movies.reviews.delete', [$movie->id, $review->id]) }}">Delete</a>
                                  </div>
                              @endif
                          </div>
                        </th>
                      </tr>
                  </thead>
                  <tbody>
                    <td>
                        <p class="reviewHeader">
                          <span class="reviewTitle">{{ $review->title }}</span>
                          <span class="reviewRating">{{ $review->starRating }}/5 stars</span>
                        </p>
                        <p>{{ $review->date }}</p>
                        <p>{{ $review->text }}</p>
                    </td>
                  </tbody>
              </table>
            @endforeach
        </div>
    </div>
</div>
@endsection

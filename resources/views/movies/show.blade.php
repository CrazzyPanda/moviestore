@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <img class="d-block w-100"  src="{{ asset('storage/' . $movie->image->path) }}" alt="{{ $movie->name }}">
                    </div>

    <!-- Modal -->
    <div class="modal fade" id="addMsg" tabindex="-1" role="dialog" aria-labelledby="addMsgLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addMsgLabel">Thank You!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            {{ $movie->name }} was added to basket
          </div>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="{{ asset('storage/' . $movie->image->path) }}" alt="{{ $movie->name }}" style="height: 400px;">
          </div>
        </div>

        <div class="col-8">
            <div><h3 class="title">{{ $movie->name }}</h3></div>
            <div><p class="genre">{{ $movie->genre->name }}</i></div>
            <div><p>{{ $movie->summary }}</p></div>
            <div><p>€{{ $movie->price }}</p></div>
            <div>
                @if (Auth::user() == null || Auth::user()->hasRole('customer'))
                    <form action="{{ route('basket.add')}}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="movie_id" value="{{ $movie->id }}">
                        <button type="submit" data-toggle="modal" data-target="#addMsg">Add to basket</button>
                    </form>
                @endif
            </div>
        </div>
      </div>
      <hr/>

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
            <!-- <p>Type: {{ $movie->type }}</p> -->
        </div>
    </div>
    <hr/>

    <div class="row">
        <div class="col-md-12">
            <div><h5 class="title">Reviews</h5></div>

            <!-- <p>{{ $review->customer->user->name }}</p> -->
            <div class='row'>
                <div class='col-md-3'>
                    <p>{{ $review->title }}</p>
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
@endsection

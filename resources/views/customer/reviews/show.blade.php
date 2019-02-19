@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="row">
                <div class="col">
                    <h3 class="title">Movie Details</h3>
                </div>

                <div class="col">
                    <a class="btn btn-outline-primary" href="{{ route('admin.movies.edit', $movie) }}">Edit Movie</a>
                    <a class="btn btn-outline-primary" href="{{ route('admin.reviews.index', $movie) }}">Reviews</a>
                </div>
            </div>
            <br>
            <div class="card">
              <table class="table">
                  <tbody>
                      <tr>
                          <th>Movie ID</th>
                          <td>{{ $movie->id }}</td>
                      </tr>
                      <tr>
                          <th>Name</th>
                          <td>{{ $movie->name }}</td>
                      </tr>
                      <tr>
                          <th>Price</th>
                          <td>€ {{ $movie->price }}</td>
                      </tr>
                      <tr>
                          <th>Summary</th>
                          <td>{{ $movie->summary }}</td>
                      </tr>
                      <tr>
                          <th>Genre</th>
                          <td>{{ $movie->genre->name }}</td>
                      </tr>
                      <tr>
                          <th>Main Cast</th>
                          <td>{{ $movie->mainCast }}</td>
                      </tr>
                      <tr>
                          <th>Directors</th>
                          <td>{{ $movie->directors }}</td>
                      </tr>
                      <tr>
                          <th>Producers</th>
                          <td>{{ $movie->producers}}</td>
                      </tr>
                      <tr>
                          <th>Writers</th>
                          <td>{{ $movie->writers }}</td>
                      </tr>
                      <tr>
                          <th>Release Date</th>
                          <td>{{ $movie->releaseDate }}</td>
                      </tr>
                      <tr>
                          <th>Region</th>
                          <td>{{ $movie->region }}</td>
                      </tr>
                      <tr>
                          <th>Run Time</th>
                          <td>{{ $movie->runTime }}</td>
                      </tr>
                      <tr>
                          <th>Type</th>
                          <td>{{ $movie->type }}</td>
                      </tr>
                      <tr>
                          <th>Language</th>
                          <td>{{ $movie->language }}</td>
                      </tr>
                      <tr>
                          <th>Cover</th>
                          <td><img src="{{ asset('storage/' . $movie->image->path) }}" width="150px" /></td>
                      </tr>

                  </tbody>
              </table>
            </div>
        </div>
    </div>
</div>
@endsection

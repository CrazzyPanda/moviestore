@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-10">
                    <h2>Movie Index</h2>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-outline-primary" href="{{ route('admin.movies.create') }}">Add Movie</a>
                </div>
            </div>
            <p></p>
                <div class="card">
                    <table class="table">
                        <thread>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thread>
                        <tbody>

                            @foreach ($movies as $movie)
                            <tr>
                                <td>{{ $movie->id }}</td>
                                <td>{{ $movie->name }}</td>
                                <td>{{ $movie->price }}</td>
                                <td><a class="btn btn-outline-primary" href="{{ route('admin.movies.show', $movie) }}">View Movie</a><td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

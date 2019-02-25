@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <h3 class="title">Movie Index</h3>
            </div>
            <table class="table table-striped table-dark table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($movies as $movie)
                    <tr>
                        <td>{{ $movie->id }}</td>
                        <td>{{ $movie->name }}</td>
                        <td>{{ $movie->price }}</td>
                        <td><a class="btn btn-outline-primary" href="{{ route('movies.show', $movie) }}">View Movie</a></td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

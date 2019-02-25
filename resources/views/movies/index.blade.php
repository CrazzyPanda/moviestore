@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <h3 class="title">Search Results</h3>
                <table class="table table-striped table-dark table-bordered">
                    <tbody>
                        @foreach ($movies as $movie)
                        <tr>
                            <td>{{ $movie->name }}</td>
                            <td>{{ $movie->genre->name }}</td>
                            <td>€ {{ $movie->price }}</td>
                            <td><a class="btn btn-outline-primary" href="{{ route('movies.show', $movie) }}">View Movie</a><td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

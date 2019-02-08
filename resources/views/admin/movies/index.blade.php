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
                <!-- <div class="card"> -->
                    <table class="table table-striped table-dark table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($movies as $movie)
                            <tr>
                                <td>{{ $movie->id }}</td>
                                <td>{{ $movie->name }}</td>
                                <td>€ {{ $movie->price }}</td>
                                <td><a class="btn btn-outline-primary" href="{{ route('admin.movies.show', $movie) }}">View</a></td>
                                <td><a class="btn btn-outline-primary" href="{{ route('admin.movies.edit', $movie) }}">Edit</a></td>
                                <td><form action="{{ route('admin.movies.destroy', $movie)}}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="btn btn-outline-primary">Delete</button></td>
                                </form>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>
@endsection

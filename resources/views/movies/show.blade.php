@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <img class="d-block w-100"  src="{{ asset('storage/' . $movie->image->path) }}" alt="{{ $movie->name }}">
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
                    <table>
                        <tbody>
                            <tr>
                                <th>Main Cast:</th>
                                <td>{{ $movie->mainCast }}</td>
                            </tr>
                            <tr>
                                <th>Directors:</th>
                                <td>{{ $movie->directors }}</td>
                            </tr>
                            <tr>
                                <th>Producers:</th>
                                <td>{{ $movie->producers }}</td>
                            </tr>
                            <tr>
                                <th>Writers:</th>
                                <td>{{ $movie->writers }}</td>
                            </tr>
                            <tr>
                                <th>Run Time:</th>
                                <td>{{ $movie->runTime }}</td>
                            </tr>
                            <tr>
                                <th>Release Date:</th>
                                <td>{{ $movie->releaseDate }}</td>
                            </tr>
                            <tr>
                                <th>Region:</th>
                                <td>{{ $movie->region }}</td>
                            </tr>
                            <tr>
                                <th>Language:</th>
                                <td>{{ $movie->language }}</td>
                            </tr>
                            <tr>
                                <th>Type:</th>
                                <td>{{ $movie->type }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
                <!-- <hr/> -->

                <div class="row">
                    <div class="col-md-12">
                    <hr/>
                        <div><h5>Reviews</h5></div>
                    <hr/>
                        <!-- <p>{{ $review->customer->user->name }}</p> -->
                        <div class='row'>
                            <div class='col-md-3'>
                                <b>{{ $review->title }}</b></br>
                                <small>{{ $review->date }}</small>
                            </div>
                            <div class='col-md-9'>
                                <p>{{ $review->starRating }}</p>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-8'>
                                <p>{{ $review->text }}</p>
                                <hr/>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>
@endsection

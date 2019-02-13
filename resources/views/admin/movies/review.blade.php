@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div>
                    <h3>Movie Reviews</h3>
                </div>
                <p></p>
                <!-- <div class="card"> -->
                    <table class="table table-striped table-dark table-bordered">
                        <thead>
                            <tr>
                                <th>Customer</th>
                                <th>Title</th>
                                <th>Star Rating</th>
                                <th>Review</th>
                                <th>Date Posted</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($reviews as $review)
                            <tr>
                                <td>{{ $review->customer->user->name }}</td>
                                <td>{{ $review->title }}</td>
                                <td>{{ $review->starRating }}</td>
                                <td>{{ $review->text }}</td>
                                <td>{{ $review->date }}</td>
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

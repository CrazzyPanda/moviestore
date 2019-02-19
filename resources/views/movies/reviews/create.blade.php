@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Write a review for {{ $movie->name }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route("movies.reviews.store", $movie->id) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <table>
                            <tbody>
                              <div class="form-group">
                                <label>Star Rating</label>
                                  <select class="form-control" name="starRating">
                                    <option {{ (old('starRating') == 1) ? "selected" : "" }}>1</option>
                                    <option {{ (old('starRating') == 2) ? "selected" : "" }}>2</option>
                                    <option {{ (old('starRating') == 3) ? "selected" : "" }}>3</option>
                                    <option {{ (old('starRating') == 4) ? "selected" : "" }}>4</option>
                                    <option {{ (old('starRating') == 5) ? "selected" : "" }}>5</option>
                                  </select>
                              </div>

                              <div class="form-group">
                                  <label>Title:</label>
                                  <input class="form-control" type="text" name="title" value="{{ old('title') }}" />
                                  @if ($errors->has('title'))
                                    <div class="error">{{ $errors->first('title') }}</div>
                                  @endif
                              </div>

                              <div class="form-group">
                                  <label>Review:</label>
                                  <textarea class="form-control" type="text" name="text">{{ old('text') }}</textarea>
                                  @if ($errors->has('text'))
                                    <div class="error">{{ $errors->first('text') }}</div>
                                  @endif
                              </div>
                            </tbody>
                        </table>
                        <input class="btn btn-outline-primary" type="submit" value="Submit"/>
                        <a class="btn btn-outline-primary" href="#">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

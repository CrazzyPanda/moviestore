@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Write a review</div>

                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <table>
                            <tbody>
                              <div class="form-group">
                                  <label>Title:</label>
                                  <input class="form-control" type="text" name="title" value="{{ old('title') }}" />
                                      @if ($errors->has('title'))
                                      <div class="error">{{ $errors->first('title') }}</div>
                                      @endif
                              </div>
                              <div class="form-group">
                                  <label>Review:</label>
                                  <textarea class="form-control" type="text" name="text" value="{{ old('text') }}" /></textarea>
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

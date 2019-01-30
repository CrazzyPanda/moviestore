@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Add a Movie</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.movies.store') }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <table>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <tbody>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Name:</label>
                                        <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
                                            @if ($errors->has('name'))
                                            <div class="error">{{ $errors->first('name') }}</div>
                                            @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Price:</label>
                                        <input class="form-control" type="text" name="price" value="{{ old('price') }}" />
                                            @if ($errors->has('price'))
                                            <div class="error">{{ $errors->first('price') }}</div>
                                            @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Summary:</label>
                                        <textarea class="form-control" rows="3" type="text" name="summary" value="{{ old('summary') }}" ></textarea>
                                            @if ($errors->has('summary'))
                                            <div class="error">{{ $errors->first('summary') }}</div>
                                            @endif
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Main Cast:</label>
                                            <input class="form-control" type="text" name="mainCast" value="{{ old('mainCast') }}" />
                                                @if ($errors->has('mainCast'))
                                                <div class="error">{{ $errors->first('mainCast') }}</div>
                                                @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Directors:</label>
                                            <input class="form-control" type="text" name="directors" value="{{ old('directors') }}" />
                                                @if ($errors->has('directors'))
                                                <div class="error">{{ $errors->first('directors') }}</div>
                                                @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Producers:</label>
                                            <input class="form-control" type="text" name="producers" value="{{ old('producers') }}" />
                                                @if ($errors->has('producers'))
                                                <div class="error">{{ $errors->first('producers') }}</div>
                                                @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Writers:</label>
                                            <input class="form-control" type="text" name="writers" value="{{ old('writers') }}" />
                                                @if ($errors->has('writers'))
                                                <div class="error">{{ $errors->first('writers') }}</div>
                                                @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Genre:</label>
                                            <select class="form-control" name="genre_id">
                                                @foreach ($genres as $genre)
                                                <option value="{{ old('genre_id', $genre->id) }}">{{ $genre->name }}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Release Date:</label>
                                            <input class="form-control" type="text" name="releaseDate" value="{{ old('releaseDate') }}" />
                                                @if ($errors->has('releaseDate'))
                                                <div class="error">{{ $errors->first('releaseDate') }}</div>
                                                @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Run Time:</label>
                                            <input class="form-control" type="text" name="runTime" value="{{ old('runTime') }}" />
                                                @if ($errors->has('runTime'))
                                                <div class="error">{{ $errors->first('runTime') }}</div>
                                                @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Type:</label>
                                        <input class="form-control" type="text" name="type" value="{{ old('type') }}" />
                                            @if ($errors->has('type'))
                                            <div class="error">{{ $errors->first('type') }}</div>
                                            @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Language:</label>
                                            <input class="form-control" type="text" name="language" value="{{ old('language') }}" />
                                                @if ($errors->has('language'))
                                                <div class="error">{{ $errors->first('language') }}</div>
                                                @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Region:</label>
                                            <input class="form-control" type="text" name="region" value="{{ old('region') }}" />
                                                @if ($errors->has('region'))
                                                <div class="error">{{ $errors->first('region') }}</div>
                                                @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Cover:</label>
                                        <input class="form-control-file" type="file" name="cover" />
                                        @if ($errors->has('cover'))
                                        <div class="error">{{ $errors->first('cover') }}</div>
                                        @endif
                                </div>
                            </tbody>
                        </table>
                        <input class="btn btn-outline-primary" type="submit" value="Submit"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

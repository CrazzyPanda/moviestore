@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="addressLine1" class="col-md-4 col-form-label text-md-right">{{ __('Address Line 1') }}</label>

                            <div class="col-md-6">
                                <input id="addressLine1" type="text" class="form-control{{ $errors->has('addressLine1') ? ' is-invalid' : '' }}" name="addressLine1" value="{{ old('addressLine1') }}" required>

                                @if ($errors->has('addressLine1'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('addressLine1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="addressLine2" class="col-md-4 col-form-label text-md-right">{{ __('Address Line 2') }}</label>

                            <div class="col-md-6">
                                <input id="addressLine2" type="text" class="form-control{{ $errors->has('addressLine2') ? ' is-invalid' : '' }}" name="addressLine2" value="{{ old('addressLine2') }}" required>

                                @if ($errors->has('addressLine2'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('addressLine2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="town" class="col-md-4 col-form-label text-md-right">{{ __('Town') }}</label>

                            <div class="col-md-6">
                                <input id="town" type="text" class="form-control{{ $errors->has('town') ? ' is-invalid' : '' }}" name="town" value="{{ old('town') }}" required>

                                @if ($errors->has('town'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('town') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="county" class="col-md-4 col-form-label text-md-right">{{ __('County') }}</label>

                            <div class="col-md-6">
                                <input id="county" type="text" class="form-control{{ $errors->has('county') ? ' is-invalid' : '' }}" name="county" value="{{ old('county') }}" required>

                                @if ($errors->has('County'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('county') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nameOnCard" class="col-md-4 col-form-label text-md-right">{{ __('Name on Card') }}</label>

                            <div class="col-md-6">
                                <input id="nameOnCard" type="text" class="form-control{{ $errors->has('nameOnCard') ? ' is-invalid' : '' }}" name="nameOnCard" value="{{ old('nameOnCard') }}" required>

                                @if ($errors->has('nameOnCard'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nameOnCard') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cardNumber" class="col-md-4 col-form-label text-md-right">{{ __('Card Number') }}</label>

                            <div class="col-md-6">
                                <input id="cardNumber" type="text" class="form-control{{ $errors->has('cardNumber') ? ' is-invalid' : '' }}" name="cardNumber" value="{{ old('cardNumber') }}" required>

                                @if ($errors->has('cardNumber'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cardNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="expiryDate" class="col-md-4 col-form-label text-md-right">{{ __('Expiry Date') }}</label>

                            <div class="col-md-6">
                                <input id="expiryDate" type="text" class="form-control{{ $errors->has('expiryDate') ? ' is-invalid' : '' }}" name="expiryDate" value="{{ old('expiryDate') }}" required>

                                @if ($errors->has('expiryDate'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('expiryDate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cvv" class="col-md-4 col-form-label text-md-right">{{ __('CVV') }}</label>

                            <div class="col-md-6">
                                <input id="cvv" type="text" class="form-control{{ $errors->has('cvv') ? ' is-invalid' : '' }}" name="cvv" value="{{ old('cvv') }}" required>

                                @if ($errors->has('cvv'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cvv') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

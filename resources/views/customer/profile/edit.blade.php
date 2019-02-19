@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Edit Profile</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('customer.profile.update') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <table>
                            <tbody>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Name:</label>
                                        <input class="form-control" type="text" name="name" value="{{ old('name', $customer->user->name) }}" />
                                            @if ($errors->has('name'))
                                            <div class="error">{{ $errors->first('name') }}</div>
                                            @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email:</label>
                                        <input class="form-control" type="text" name="email" value="{{ old('price', $customer->user->email) }}" />
                                            @if ($errors->has('email'))
                                            <div class="error">{{ $errors->first('email') }}</div>
                                            @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address Line 1:</label>
                                        <input class="form-control" rows="3" type="text" name="addressLine1" value="{{ old('addressLine1', $customer->addressLine1) }}" />
                                            @if ($errors->has('addressLine1'))
                                            <div class="error">{{ $errors->first('addressLine1') }}</div>
                                            @endif
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Address Line 2:</label>
                                            <input class="form-control" type="text" name="addressLine2" value="{{ old('addressLine2', $customer->addressLine2) }}" />
                                                @if ($errors->has('addressLine2'))
                                                <div class="error">{{ $errors->first('addressLine2') }}</div>
                                                @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Town</label>
                                            <input class="form-control" type="text" name="town" value="{{ old('town', $customer->town) }}" />
                                                @if ($errors->has('town'))
                                                <div class="error">{{ $errors->first('town') }}</div>
                                                @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>County:</label>
                                            <input class="form-control" type="text" name="county" value="{{ old('county', $customer->county) }}" />
                                                @if ($errors->has('county'))
                                                <div class="error">{{ $errors->first('county') }}</div>
                                                @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Name on Card:</label>
                                            <input class="form-control" type="text" name="nameOnCard" value="{{ old('nameOnCard', $customer->nameOnCard) }}" />
                                                @if ($errors->has('nameOnCard'))
                                                <div class="error">{{ $errors->first('nameOnCard') }}</div>
                                                @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Card Number:</label>
                                            <input class="form-control" type="text" name="cardNumber" value="{{ old('cardNumber', $customer->cardNumber) }}" />
                                                @if ($errors->has('cardNumber'))
                                                <div class="error">{{ $errors->first('cardNumber') }}</div>
                                                @endif
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Expiry Date:</label>
                                            <input class="form-control" type="text" name="expiryDate" value="{{ old('expiryDate', $customer->expiryDate) }}" />
                                                @if ($errors->has('expiryDate'))
                                                <div class="error">{{ $errors->first('expiryDate') }}</div>
                                                @endif
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>cvv:</label>
                                        <input class="form-control" type="text" name="cvv" value="{{ old('cvv', $customer->cvv) }}" />
                                            @if ($errors->has('cvv'))
                                            <div class="error">{{ $errors->first('cvv') }}</div>
                                            @endif
                                    </div>
                                </div>

                            </tbody>
                        </table>
                        <input class="btn btn-outline-primary" type="submit" value="Save"/>
                        <a class="btn btn-outline-primary" href="{{ route('customer.profile.show') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

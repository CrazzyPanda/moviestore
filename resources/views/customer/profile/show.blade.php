@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="row">
                <div class="col-9">
                    <h3 class="title">Profile</h3>
                </div>
                <div class="col-3">
                    <a class="btn btn-outline-primary" href="{{ route('customer.profile.edit') }}">Edit Profile</a>
                </div>
            </div>
            <div class="card">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td>{{ $customer->user->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $customer->user->email }}</td>
                        </tr>
                        <tr>
                            <th>Address Line 1</th>
                            <td>{{ $customer->addressLine1 }}</td>
                        </tr>
                        <tr>
                            <th>Address Line 2</th>
                            <td>{{ $customer->addressLine2 }}</td>
                        </tr>
                        <tr>
                            <th>Town</th>
                            <td>{{ $customer->town }}</td>
                        </tr>
                        <tr>
                            <th>County</th>
                            <td>{{ $customer->county }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <div>
                <h3 class="title">Card Details</h3>
            </div>
            <div class="card">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Name on Card</th>
                            <td>{{ $customer->nameOnCard }}</td>
                        </tr>
                        <tr>
                            <th>Card Number</th>
                            <td>{{ $customer->cardNumber }}</td>
                        </tr>
                        <tr>
                            <th>Expiry Date</th>
                            <td>{{ $customer->expiryDate }}</td>
                        </tr>
                        <tr>
                            <th>CVV</th>
                            <td>{{ $customer->cvv }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

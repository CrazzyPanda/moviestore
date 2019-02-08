@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div>
                <h3 class="title">Profile</h3>
            </div>
            </hr>
            <p></p>
            <p></p>
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
                <p></p>
                <div>
                    <h5>Card Details</h5>
                </div>
                <p></p>
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

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <h3 class="title">Profile</h3>
            </div>
            <p></p>
                <div class="card">
                    <table class="table">
                        <thread>
                            <tr>
                                <th>Name</th>
                                <th>Address 1</th>
                                <th>Address 2</th>
                                <th>Town</th>
                                <th>County</th>
                                <th>Name on Card</th>
                                <th>Card Number</th>
                                <th>Expiry Date</th>
                                <th>CVV</th>
                            </tr>
                        </thread>
                        <tbody>
                            <tr>
                                <td>{{ $customer->user->name }}</td>
                                <td>{{ $customer->addressLine1 }}</td>
                                <td>{{ $customer->addressLine2 }}</td>
                                <td>{{ $customer->town }}</td>
                                <td>{{ $customer->county }}</td>
                                <td>{{ $customer->nameOnCard }}</td>
                                <td>{{ $customer->cardNumber }}</td>
                                <td>{{ $customer->expiryDate }}</td>
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

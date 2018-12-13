@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Homepage</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>Recent Orders</h5>
                    <table>
                        <thread>
                            <tr>
                                <th>Order ID</th>
                                <th>Total Price</th>
                                <th>Order Date</th>
                                <th>Customer Email</th>
                            </tr>
                        </thread>
                        <tbody>

                            @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->totalCost() }}</td>
                                <td>{{ $order->date }}</td>
                                <td>{{ $order->customer->user->email }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

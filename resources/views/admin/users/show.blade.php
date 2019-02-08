@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <h3>Orders</h3>
            </div>
            <p></p>
                <div class="card">
                    <table class="table table-striped table-dark table-bordered">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Order Total</th>
                                <th>Date Purchased</th>
                                <th>Customer Email</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($user->customer->orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>€ {{ $order->totalCost() }}</td>
                                <td>{{ $order->date }}</td>
                                <td>{{ $order->customer->user->email }}</td>
                                <td><a class="btn btn-outline-primary" href="{{ route('admin.orders.show', $order) }}">View</a></td>
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

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="card"> -->
                <!-- <div class="card-header">Admin Homepage</div> -->

                <!-- <div class="card-body"> -->

                <div class="row">
                    <div class="col-md-9">
                        <h3 class="title">Recent Orders</h3>
                    </div>
                    <div class="col-md-3">
                        <!--add buttom which routes to the doctor create page -->
                        <a class="btn btn-outline-primary" href="{{ route('admin.orders.index') }}">View All Orders</a>
                    </div>
                </div>
                <p></p>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- <div class="card"> -->
                        <table class="table table-striped table-dark table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Customer Email</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Date Purchased</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->customer->user->email }}</td>
                                    <td>€{{ $order->totalCost() }}</td>
                                    <td>{{ $order->date }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    <!-- </div> -->
                    <p></p>
                    <div class="row">
                        <div class="col-md-9">
                            <h3 class="title">Recent Movies Added</h3>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-outline-primary" href="{{ route('admin.movies.index') }}">View All Movies</a>
                        </div>
                    </div>
                    <p></p>
                    <!-- <div class="card"> -->
                        <table class="table table-striped table-dark table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Movie Name</th>
                                    <th scope="col">Movie Price</th>
                                    <th scope="col">Movie Genre</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($movies as $movie)
                                <tr>
                                    <td>{{ $movie->name }}</td>
                                    <td>€{{ $movie->price }}</td>
                                    <td>{{ $movie->genre->name }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    <!-- </div> -->
                    <p></p>
                    <div class="row">
                        <div class="col-md-9">
                            <h3 class="title">Recent Users Registered</h3>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-outline-primary" href="{{ route('admin.users.index') }}">View All Users</a>
                        </div>
                    </div>
                    <p></p>
                    <!-- <div class="card"> -->
                        <table class="table table-striped table-dark table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">User Name</th>
                                    <th scope="col">User Email</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    <!-- </div> -->


                <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>
</div>
@endsection

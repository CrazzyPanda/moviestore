@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div>
                    <h3 class="title">User Index</h3>
                </div>
                <br>
                  <table class="table table-striped table-dark table-bordered">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>

                          @foreach ($users as $user)
                          <tr>
                              <td>{{ $user->id }}</td>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td><a class="btn btn-outline-primary" href="{{ route('admin.users.show', $user) }}">View Orders</a></td>
                          </tr>
                          @endforeach

                      </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection

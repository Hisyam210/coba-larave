@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Registered users</h1>
    </div>

    <div class="table-responsive col-lg-9">
    <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama User</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($users as $user)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td> {{$user->name}} </td>
            </tr>
             @endforeach
          </tbody>
        </table>
        </div>
@endsection
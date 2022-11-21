@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">EVENT</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-lg-5" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="table-responsive col-lg-5">
        <a href="/dashboard/event/create" class="btn btn-primary mb-3">New Event</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Event</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($event as $even)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td><h6> {{$even->title}} </h6></td>
              <td>
                <a href="/dashboard/event/{{$even->id}}/edit" class="badge bg-warning">
                    <span data-feather="edit" class="align-text-bottom"></span>
                </a>
                <form action="/dashboard/event/{{$even->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span></button>
                  </form>
              </td>
            </tr>
             @endforeach
          </tbody>
        </table>
        </div>
@endsection
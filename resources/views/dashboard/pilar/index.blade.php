@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">PILAR</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-lg-5" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="table-responsive col-lg-8">
        {{-- <a href="/dashboard/akademi/create" class="btn btn-primary mb-3">New Academic</a> --}}
    <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Pilar</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($pilar as $ab)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td><h6> {{$ab->pilar}} </h6></td>
              <td>
                <a href="/dashboard/pilar/{{ $ab->id }}/edit" class="badge bg-warning mb-2">
                    <span data-feather="edit" class="align-text-bottom"></span>
                </a>
                {{-- <form action="/dashboard/pilar/{{$ab->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span></button>
                </form> --}}
              </td>
            </tr>
             @endforeach
          </tbody>
        </table>
        </div>
@endsection
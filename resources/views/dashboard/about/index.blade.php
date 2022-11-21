@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">ABOUT</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-lg-5" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/about/create" class="btn btn-primary mb-3">New</a>
    <table class="table table-striped table-sm mb-5">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">About</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($about->slice(0, 4) as $ab)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td><h6> {{$ab->slug}} </h6></td>
              <td>
                <a href="/dashboard/about/{{ $ab->id }}/edit" class="badge bg-warning mb-2">
                    <span data-feather="edit" class="align-text-bottom"></span>
                </a>
                {{-- <form action="/dashboard/about/{{$ab->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span></button>
                </form> --}}
              </td>
            </tr>
             @endforeach
          </tbody>
    </table>

    @foreach ($about->skip(4) as $item)   
    <div class="card text-center mb-4">
      <div class="card-header">
        About
      </div>
      <div class="card-body">
        <h5 class="card-title">{{$item->slug}}</h5>
        <p class="card-text">{!! $item->content !!}</p>
        <a href="/dashboard/about/{{ $item->id }}/edit" class="btn btn-primary">Update</a>
        {{-- <form action="/dashboard/about/{{$item->id}}" method="post" class="d-inline">
          @method('delete')
          @csrf
          <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span></button>
        </form> --}}
      </div>
    </div>
    @endforeach
    </div>
@endsection
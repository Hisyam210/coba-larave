@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Sidebar</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-lg-5" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

      <div class="col-lg-12 mb-5">
        <a href="/dashboard/side/create" class="btn btn-primary mb-3">New</a>
        <div class="row">
        @foreach ($home->slice(0,4) as $foto)
        <div class="col-sm-6 mb-3">
            <div class="card text-center">
                <img src="{{ asset('storage/' . $foto->image) }}" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="/dashboard/side/{{$foto->id}}/edit" class="btn btn-primary">Edit</a>
              </div>
            </div>
        </div>
        {{-- <div class="card mb-3 col-sm-4" style="width: 18rem;">
            <img src="{{ asset('storage/' . $foto->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">{{$foto->title }}</p>
                <a href="/dashboard/side/{{$foto->id}}/edit" class="btn btn-warning">Edit</a>
                {{-- <form action="/dashboard/side/{{$foto->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span></button>
                </form> --}}
            {{-- </div>
        </div> --}} 
        @endforeach
        </div>
      </div>

      <div class="container">
        {{-- @foreach ($galery->slice(4,0) as $item) --}}
        <h2 class="text-center shadow-sm p-3 mb-3 bg-body rounded">Video</h2>
        {{-- @endforeach --}}

        <div class="row mb-3">
            @foreach ($home->skip(4) as $gal) 
            <div class="col-sm-4 mb-3">
                {{-- <img style="max-height: 320px; overflow:hidden" src="{{ asset('storage/' . $gal->image) }}" class="card-img-top rounded" alt="..."> --}}
                <video controls>
                  <source src="{{ asset('storage/' . $gal->image) }}" type="video/webm" />
                </video>
                <div class="card text-center">
                  <div class="card-body">
                    <a href="/dashboard/side/{{$gal->id}}/edit" class="btn btn-primary">Edit video</a>
                  </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
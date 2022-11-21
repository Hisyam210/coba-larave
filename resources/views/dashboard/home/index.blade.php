@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Home</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-lg-5" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="table-responsive col-lg-7">
        <a href="/dashboard/home/create" class="btn btn-primary mb-3">New</a>
    
        @foreach ($home as $foto)
        <figure class="figure">
            <img src="{{ asset('storage/' . $foto->image) }}" class="figure-img img-fluid rounded" alt="...">
            <a href="/dashboard/home/{{$foto->id}}/edit" class="badge bg-warning">
                <span data-feather="edit" class="align-text-bottom"></span>
            </a>
            <form action="/dashboard/home/{{$foto->id}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span></button>
            </form>
        </figure>
        @endforeach
    
    </div>
@endsection
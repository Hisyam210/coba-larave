@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">CONTACT</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-lg-5" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @foreach ($contac as $item)
    <a href="/dashboard/contac/{{$item->id}}/edit" class="btn btn-primary mb-3">Update</a>
    <div class="col-lg-10">
        <ul class="list-group">
            <li class="list-group-item"><p class="fw-bold">Alamat  : </p>{{$item->alamat}}</li>
            <li class="list-group-item"><p class="fw-bold">Nomor   : </p>{{$item->nomor}}</li>
            <li class="list-group-item"><p class="fw-bold">Telepon : </p>{{$item->telpon}}</li>
            <li class="list-group-item"><p class="fw-bold">Email   : </p>{{$item->email}}</li>
          </ul>        
    </div>
    {{-- <form action="/dashboard/contac/{{$item->id}}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span></button>
    </form>   --}}
    @endforeach
<br>
    <h3>Pesan Masuk</h3>
    @foreach ($pesan as $item)
    <div class="col-lg-10 mb-5">
      <ul class="list-group">
          <li class="list-group-item"><p class="fw-bold">From    : </p>{{$item->nama}}</li>
          <li class="list-group-item"><p class="fw-bold">Email   : </p>{{$item->email}}</li>
          <li class="list-group-item"><p class="fw-bold">Pesan   : </p>{{$item->pesan}}</li>
          <li class="list-group-item"><p class="fw-bold">
            <form action="/dashboard/contac/{{$item->id}}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <div class="d-grid gap-2 col-6 mx-auto">
              <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete Message</button>
              </div>
            </form>
          </li>
        </ul>        
    </div>
    @endforeach
@endsection
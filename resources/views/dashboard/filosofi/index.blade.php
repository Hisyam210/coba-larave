@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">VISI - MISI</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-lg-5" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="col-lg-8">
        {{-- <a href="/dashboard/filosofi/create" class="btn btn-primary mb-3">New </a> --}}
        <div class="card">
            <div class="card-header ">
              Philsopy
            </div>
            @foreach ($filosofi as $item)               
            <div class="card-body">
              <h5 class="card-title">VISI</h5>
              <p class="card-text">{{ $item->visi }}</p>
            </div>
            <div class="card-body text-end">
              <h5 class="card-title">MISI</h5>
              <p class="card-text">{{ $item->misi }}</p>
            </div>
            <div class="card-body text-center">
                <a href="/dashboard/filosofi/{{$item->id}}/edit" class="btn btn-primary">Edit</a>
            </div>
            @endforeach
          </div>
    </div>
@endsection
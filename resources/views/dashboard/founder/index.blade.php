@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">FOUNDER</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-lg-5" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="col-lg-10 mb-5">
        <a href="/dashboard/founder/create" class="btn btn-primary mb-3">New Founder</a>
        <div class="row">
            @foreach ($fonder as $item)
            <div class="col-sm-4">
                <img style="max-height: 320px; overflow:hidden" src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="...">
                <div class="card text-center">
                  <div class="card-body">
                    <h5 class="card-title">{{ $item->nama }}</h5>
                    <p class="card-text">{!! $item->body !!}</p>
                    <a href="/dashboard/founder/{{$item->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action="/dashboard/founder/{{$item->id}}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                    </form>
                  </div>
                </div>
            </div>
            @endforeach
        </div>     
    </div>
@endsection
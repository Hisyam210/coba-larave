@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">FASILITAS</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-lg-5" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="table-responsive col-lg-7">
        <a href="/dashboard/fasilitas/create" class="btn btn-primary mb-3">New Fasilitas</a>
    
        @foreach ($fas as $item)
        <div class="col-sm-3 mb-5" style="">
            <img src="{{ asset('storage/' . $item->image) }}" class="img-thumbnail mb-1" alt="..." style="max-height: 200px; overflow:hidden" >
            <form action="/dashboard/fasilitas/{{$item->id}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span></button>
            </form>
        </div>
        @endforeach
    
    </div>
@endsection
@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">GALERY</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-lg-5" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class=" col-lg-10">
        <a href="/dashboard/galery/create" class="btn btn-primary mb-3">New Galery</a>
        <div class="container">
            @foreach ($galery->slice(0,1) as $item)
            <h2 class="text-center shadow-sm p-3 mb-3 bg-body rounded"><a href="/dashboard/galery/{{$item->id}}/edit"><span data-feather="edit" class=""></span></a>{{$item->slug}}</h2>
            @endforeach
            
            <div class="row mb-3">
                @foreach ($galery->slice(1,3) as $gal) 
                <div class="col-sm-4">
                    <img style="max-height: 320px; overflow:hidden" src="{{ asset('storage/' . $gal->image) }}" class="card-img-top rounded" alt="...">
                    <div class="card text-center">
                      <div class="card-body">
                        <a href="/dashboard/galery/{{$gal->id}}/edit" class="btn btn-primary">Edit</a>
                        <form action="/dashboard/galery/{{$gal->id}}" method="post" class="d-inline">
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
        <br>
        <div class="container">
            {{-- @foreach ($galery->slice(4,0) as $item) --}}
            <h2 class="text-center shadow-sm p-3 mb-3 bg-body rounded"><a href="/dashboard/galery/{{$galery[4]->id}}/edit"><span data-feather="edit" class=""></span></a>{{$galery[4]->slug}}</h2>
            {{-- @endforeach --}}

            <div class="row mb-3">
                @foreach ($galery->slice(5,3) as $gal) 
                <div class="col-sm-4">
                    <img style="max-height: 320px; overflow:hidden" src="{{ asset('storage/' . $gal->image) }}" class="card-img-top rounded" alt="...">
                    <div class="card text-center">
                      <div class="card-body">
                        <a href="/dashboard/galery/{{$gal->id}}/edit" class="btn btn-primary">Edit</a>
                        <form action="/dashboard/galery/{{$gal->id}}" method="post" class="d-inline">
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
        <br>
        <div class="container">
            {{-- @foreach ($galery->slice(4,0) as $item) --}}
            <h2 class="text-center shadow-sm p-3 mb-3 bg-body rounded">Galery</h2>
            {{-- @endforeach --}}

            <div class="row mb-3">
                @foreach ($galery->skip(8) as $gal) 
                <div class="col-sm-4 mb-3">
                    <img style="max-height: 320px; overflow:hidden" src="{{ asset('storage/' . $gal->image) }}" class="card-img-top rounded" alt="...">
                    <div class="card text-center">
                      <div class="card-body">
                        <form action="/dashboard/galery/{{$gal->id}}" method="post" class="d-inline">
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
    </div>
@endsection
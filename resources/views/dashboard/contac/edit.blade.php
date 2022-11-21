@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Contac</h1>
    </div>
    
    <div class="col-lg-8">
    <form method="post" action="/dashboard/contac/{{$contac->id}}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"  autofocus value="{{old('content', $contac->alamat)}}">
                @error('alamat')
                <div class="indvalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nomor" class="form-label">Nomor</label>
                <input type="number" class="form-control @error('nomor') is-invalid @enderror" id="nomor" name="nomor"  autofocus value="{{old('content', $contac->nomor)}}">
                @error('nomor')
                <div class="indvalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="telpon" class="form-label">Telepon</label>
                <input type="text" class="form-control @error('telpon') is-invalid @enderror" id="telpon" name="telpon"  autofocus value="{{old('content', $contac->telpon)}}">
                @error('telpon')
                <div class="indvalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"  autofocus value="{{old('content', $contac->email)}}">
                @error('email')
                <div class="indvalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
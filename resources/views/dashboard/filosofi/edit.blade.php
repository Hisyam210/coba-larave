@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Filosofi</h1>
    </div>
    
    <div class="col-lg-8">
    <form method="post" action="/dashboard/filosofi/{{$filosofi->id}}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
            <div class="mb-3">
                <label for="visi" class="form-label">Visi</label>
                <input type="text" class="form-control @error('visi') is-invalid @enderror" id="visi" name="visi"  autofocus value="{{old('content', $filosofi->visi)}}">
                @error('visi')
                <div class="indvalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="misi" class="form-label">Misi</label>
                <input type="text" class="form-control @error('misi') is-invalid @enderror" id="misi" name="misi"  value="{{old('misi', $filosofi->misi)}}">
                @error('misi')
                <div class="indvalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
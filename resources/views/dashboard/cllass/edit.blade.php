@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Class</h1>
    </div>
    
    <div class="col-lg-8">
    <form method="post" action="/dashboard/cllass/{{$class->id}}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
            <div class="mb-3">
                <label for="class" class="form-label">Class</label>
                <input type="text" class="form-control @error('class') is-invalid @enderror" id="class" name="class"  autofocus value="{{old('content', $class->class)}}">
                @error('class')
                <div class="indvalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"  value="{{old('slug', $class->slug)}}">
                @error('slug')
                <div class="indvalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
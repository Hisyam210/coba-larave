@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit</h1>
    </div>
    
    <div class="col-lg-8">
    <form method="post" action="/dashboard/program/{{$program->id}}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">New Program</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"  autofocus value="{{old('title', $program->title)}}">
            @error('title')
            <div class="indvalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="class" class="form-label">Class</label>
            <select class="form-select" name="cllass_id">
                @foreach($class as $categori)
                    <option value="{{$categori->id}}">{{$categori->class}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"  autofocus value="{{old('slug', $program->slug)}}">
            @error('slug')
            <div class="indvalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
            
            <button type="submit" class="btn btn-primary">Update </button>
        </form>
    </div>
@endsection
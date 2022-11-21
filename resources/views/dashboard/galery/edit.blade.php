@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit </h1>
    </div>
    
    <div class="col-lg-8">
    <form method="post" action="/dashboard/galery/{{$gal->id}}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
            <div class="mb-3">
                <label for="slug" class="form-label">Name</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"  autofocus value="{{old('content', $gal->slug)}}">
                @error('slug')
                <div class="indvalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Post Image</label>
                <input type="hidden" name="oldImage" value="{{ $gal->image }}">
                @if($gal->image)
                <img src="{{ asset('storage/' . $gal->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-flex">
                @else
                <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                <div class="indvalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>
    <script>
        function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
        }

    </script>
@endsection
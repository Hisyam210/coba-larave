@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Teacher</h1>
    </div>
    
    <div class="col-lg-8">
    <form method="post" action="/dashboard/guru" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{old('name')}}">
            @error('name')
            <div class="indvalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="posisi" class="form-label">Jabatan</label>
            <input type="text" class="form-control @error('posisi') is-invalid @enderror" id="posisi" name="posisi" required autofocus value="{{old('posisi')}}">
            @error('posisi')
            <div class="indvalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()" required>
            @error('image')
            <div class="indvalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
            <button type="submit" class="btn btn-primary">Create</button>
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
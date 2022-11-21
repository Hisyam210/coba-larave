@extends('dashboard.layouts.main')

@section('container')
<div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
            <h4 class="mb-4">{{ $allpost->title }}</h4>

                <a href="/dashboard/allposts" class="btn btn-success"> <span data-feather="arrow-left" class="align-text-bottom"></span> Back to Post</a>
                <br>
                @if($allpost->image)
                <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/' . $allpost->image) }}" alt="{{$allpost->category->name}}" class="img-fluid mt-2">
                </div>

                @else
                <img src="https://source.unsplash.com/1000x400?{{$allpost->category->name}}" alt="{{$allpost->category->name}}" class="img-fluid mt-2">
                @endif

                <article class="mt-3">
                {!! $allpost->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
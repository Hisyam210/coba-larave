@extends('layouts.main')

@section('container')
<br>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <h4 class="mb-3">{{ $post->title }}</h4>

                <p>By : <a href="/page?user={{ $post->user->id }}" class="text-decoration-none"> {{$post->user->name}} </a> in <a href="/page?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>

                @if($post->image)
                <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{$post->category->name}}" class="img-fluid">
                </div>
                @else
                <img src="https://source.unsplash.com/1000x400?{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid">
                @endif

                <article class="mt-3">
                {!! $post->body !!}
                </article>
                
                <br>
                <a href="/page">Back to Post</a>
            </div>
        </div>
    </div>
<br>
@endsection
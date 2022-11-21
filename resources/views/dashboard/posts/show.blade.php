@extends('dashboard.layouts.main')

@section('container')
<div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
            <h4 class="mb-4">{{ $post->title }}</h4>

                <a href="/dashboard/posts" class="btn btn-success"> <span data-feather="arrow-left" class="align-text-bottom"></span> Back to My Post</a>
                <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-warning"> <span data-feather="edit" class="align-text-bottom"></span> Edit</a>
                <form action="/dashboard/posts/{{$post->slug}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span> Delete</button>
                </form>
                <br>
                @if($post->image)
                <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{$post->category->name}}" class="img-fluid mt-2">
                </div>

                @else
                <img src="https://source.unsplash.com/1000x400?{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid mt-2">
                @endif

                <article class="mt-3">
                {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
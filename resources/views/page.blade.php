@extends('layouts.main')

@section('container')
<br>
    <h2 class="mt-4 mb-3 text-center">{{ $title }}</h2>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/page">
                @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if(request('user'))
                <input type="hidden" name="user" value="{{ request('user') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Serach</button>
                </div>
            </form>
        </div>
    </div>

    @if ($blog->count())
    <div class="card mb-3">
    @if($blog[0]->image)
        <div style="max-height: 350px; overflow:hidden">
            <img src="{{ asset('storage/' . $blog[0]->image) }}" alt="{{$blog[0]->category->name}}" class="img-fluid ">
        </div>

    @else
            <img src="https://source.unsplash.com/1200x400?{{$blog[0]->category->name}}" class="card-img-top" alt="{{$blog[0]->category->name}}">
    @endif
        
        <div class="card-body text-center">
            <h5 class="card-title"><a href="/page/{{ $blog[0]->slug }}" class="text-decoration-none text-dark">{{$blog[0]->title}}</a></h5>
            <p>
            <small class="text-muted">
                By : <a href="/page?user={{ $blog[0]->user->id }}" class="text-decoration-none"> {{$blog[0]->user->name}} </a> in <a href="/page?category={{ $blog[0]->category->slug }}"class="text-decoration-none">{{ $blog[0]->category->name }}</a> {{$blog[0]->created_at->diffForHumans()}}
            </small>
            </p>
            <p class="card-text">{{$blog[0]->excerpt}}</p>
            <a href="/page/{{ $blog[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>

    <div class="container">
        <div class="row">
        @foreach($blog->skip(1) as $post)
            <div class="col-md-4 mb-3 mt-3">
            <div class="card">
            <div class="position-absolute px-3 py-2 " style="background-color: rgb(0,0,0,0.7);"><a href="/page?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{$post->category->name}}</a></div>
            @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{$post->category->name}}" class="img-fluid">
                @else   
                <img src="https://source.unsplash.com/400x300?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <small class="text-muted">
                By : <a href="/page?user={{ $post->user->id }}" class="text-decoration-none"> {{$post->user->name}} </a></a> {{$post->created_at->diffForHumans()}}
                </small>
                <p class="card-text">{{ $post->excerpt }}</p>
                <a href="/page/{{ $post->slug }}" class="btn btn-primary">Read more</a>
            </div>
            </div>
            </div>
        @endforeach
        </div>
    </div>

    @else
    <p class="text-center fs-5">No Post Found.</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $blog->links() }}
    </div>
<br>
@endsection
@extends('layouts.main')

@section('container')

        <h2 class="mb-4">Post Categories</h2>

    @foreach($categories as $category)
    <ul>
        <li>
            <h3><a href="/page?category={{ $category->slug }}">{{ $category->name }}</a></h3>
        </li>
    </ul>

    @endforeach

@endsection
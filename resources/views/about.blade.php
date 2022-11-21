@extends('layouts.main')

@section('container')
    <h1>About Me</h1>
    <ul>
        <li>{{ $name }}</li>
        <li>{{ $email }}</li>
        <li><img width="300" src="img/{{ $gambar }}" alt="{{ $name }}" class="img-thumbnail rounded-circle"></li>
    </ul>
@endsection

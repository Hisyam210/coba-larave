@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">All Post User</h1>
    </div>

    <div class="table-responsive col-lg-9">
        <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Content By</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($allposts as $post)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td> {{$post->title}} </td>
                <td>{{$post->category->name}}</td>
                <td>{{$post->user->name}}</td>
                <td>
                  <a href="/dashboard/allposts/{{$post->slug}}" class="badge bg-info">
                  <span data-feather="eye" class="align-text-bottom"></span>
                  </a>
                </td>
              </tr>
               @endforeach
            </tbody>
        </table>
    </div>
@endsection
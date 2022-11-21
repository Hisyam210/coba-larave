@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">PROGRAM</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-lg-5" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="table-responsive col-lg-10 mb-5">
        <a href="/dashboard/program/create" class="btn btn-primary mb-3">New Program</a>
        <br>
                @foreach ($cllass as $clas)
                <table border="1" class="table table-striped table-sm mb-4">
                    <caption align="top" class="text-center">{{ $clas->class }}</caption>
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Program</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clas->programs as $category)
                        <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td> {{$category->title}} </td>
                        <td>
                            <a href="/dashboard/program/{{$category->id}}/edit" class="badge bg-warning mb-2">
                            <span data-feather="edit" class="align-text-bottom"></span>
                            </a>
                            <form action="/dashboard/program/{{$category->id}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span></button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endforeach
                
            </div>
            
@endsection
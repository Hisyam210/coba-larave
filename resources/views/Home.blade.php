@extends('layouts.main')

@section('container')
{{-- carausel --}}
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="img/jpg1.jpg" class="d-block w-100" alt="..." />
      <div class="carousel-caption d-none d-md-block">
        <h5>ELEMENTARY PROGRAM</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/jpg2.jpg" class="d-block w-100" alt="..." />
      <div class="carousel-caption d-none d-md-block">
        <h5>MIDDLE AND HIGH PROGRAM</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/jpg3.jpg" class="d-block w-100" alt="..." />
      <div class="carousel-caption d-none d-md-block">
        <h5>EARLY CHILDHOOD</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

{{-- about --}}
{{-- <section class="about" id="about">
  <div class="container mt-4">
    <div class="row pt-4 mb-4">
      <div class="col text-center">
        <h2>ABOUT US</h2>
      </div>
    </div>
    <div class="row">
      @foreach ($about as $abot)
      <div class="col-md mb-4">
        <div class="card animate__animated animate__backInUp">
          <img class="card-img-top" src="https://source.unsplash.com/1200x1200?{{ $abot->blog }}" alt="Card image cap" />
          <div class="card-body">
            <p class="card-text fw-bold">{{ $abot->blog }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section> --}}

{{-- lates post --}}
<section class="post bg-warning bg-opacity-75" id="event">
  <div class="container mt-4" style="min-height: 620px;">
    <div class="row pt-4 mb-4">
      <div class="col text-center mb-3">
        <h2>LATES POST</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-5">
          <div class="row">
              <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="img/jpg1.jpg" class="img-fluid rounded-start mt-3" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
          <div class="row mt-2">
              <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="img/jpg2.jpg" class="img-fluid rounded-start mt-3" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
      </div>
      <div class="col-md-6 mb-5">
          <div class="row">
              <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="img/jpg3.jpg" class="img-fluid rounded-start mt-3" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
          <div class="row mt-2">
              <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="img/jpg4.jpg" class="img-fluid rounded-start mt-3" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
      </div>
    </div>
  </div>
</section>

{{-- event --}}
<section class="event" id="event">
  <div class="container mt-4" style="min-height: 620px;">
    <div class="row pt-4 mb-4">
      <div class="col text-center">
        <h2>LATES EVENT</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-5">
        <div class="row">
          <div class="col-md">
            <h5 align="right">Judul Terbaru</h5>
            <p align="right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis doloribus architecto eaque facilis molestiae maxime possimus ut.</p>
          </div>
          <div class="col-md">
            <img src="img/jpg3.jpg" width="300" />
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-md">
            <h5 align="right">Judul Terbaru</h5>
            <p align="right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis doloribus architecto eaque facilis molestiae maxime possimus ut.</p>
          </div>
          <div class="col-md">
            <img src="img/jpg1.jpg" width="300" />
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-5">
        <div class="row">
          <div class="col-md">
            <img src="img/jpg2.jpg" width="300" />
          </div>
          <div class="col-md">
            <h5 align="left">Judul Terbaru</h5>
            <p align="left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis doloribus architecto eaque facilis molestiae maxime possimus ut.</p>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-md">
            <img src="img/jpg4.jpg" width="300" />
          </div>
          <div class="col-md">
            <h5 align="left">Judul Terbaru</h5>
            <p align="left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis doloribus architecto eaque facilis molestiae maxime possimus ut.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- image -->
<section class="about bg-warning bg-opacity-75" id="about">
  <div class="container mt-4">
    <div class="row pt-2 mb-4">
      <div class="col text-center mt-4">
        <h2>GALERY</h2>
      </div>
    </div>
    <div class="row mb-1">
      <div class="row mb-3">
        <div class="col-sm-3">
          <img src="img/jpg1.jpg" class="img-thumbnail" alt="...">
        </div>
        <div class="col-sm-3">
          <img src="img/jpg2.jpg" class="img-thumbnail" alt="...">
        </div>
        <div class="col-sm-3">
          <img src="img/jpg3.jpg" class="img-thumbnail" alt="...">
        </div>
        <div class="col-sm-3">
          <img src="img/jpg4.jpg" class="img-thumbnail" alt="...">
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-sm-3">
          <img src="img/jpg4.jpg" class="img-thumbnail" alt="...">
        </div>
        <div class="col-sm-3">
          <img src="img/jpg3.jpg" class="img-thumbnail" alt="...">
        </div>
        <div class="col-sm-3">
          <img src="img/jpg2.jpg" class="img-thumbnail" alt="...">
        </div>
        <div class="col-sm-3">
          <img src="img/jpg1.jpg" class="img-thumbnail" alt="...">
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container mt-4">
    {{-- academik --}}
    <div class="card">     
    <div class="card-header">
        ACADEMIC
    </div>
        @foreach ($educ as $edu)
        <div class="card-body">
          <h5 class="card-title">{{$edu->name}}</h5>
          <p class="card-text">{{$edu->excerpt}}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        @endforeach
    </div>
    {{-- category --}}
    <div class="card mt-4">     
    <div class="card-header">
        Category
    </div>
        @foreach ($categ as $cat)
        <div class="card-body">
          <h5 class="card-title">{{$cat->name}}</h5>
        </div>
        @endforeach
    </div>
    {{-- about --}}
    {{-- <div class="card mt-4">     
        <div class="card-header">
            About
        </div>
        <div class="container">
        <div class="row">
            @foreach ($about as $abot)
            <div class="col-md mb-4 mt-3">
                <div class="card">
                  <img class="card-img-top" src="https://source.unsplash.com/1200x1200?{{ $abot->blog }}" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-text">{{ $abot->blog }}</h5>
                  </div>
                </div>
              </div>
          @endforeach
        </div>
    </div>
    </div> --}}
    {{-- event --}}
    <div class="card mt-4">     
      <div class="card-header">
          Lates Event
      </div>
      <div class="container">
          <div class="row">
            <div class="col-md mb-4 mt-2">
                <div class="card-body">
                  <h5 align="right">{{$event[0]->title}}</h5>
                  <p align="right" class="card-text">{{$event[0]->content}}</p>
                </div>
            </div>
            <div class="col-md mb-4 mt-3">
              <div class="card">
                <img class="card-img-top" src="https://source.unsplash.com/1200x1200?natural" alt="Card image cap" />
              </div>
            </div>
            
            <div class="col-md mb-4 mt-3">
              <div class="card">
                <img class="card-img-top" src="https://source.unsplash.com/1200x1200?{{$event[1]->$title}}" alt="Card image cap" />
              </div>
            </div>
            <div class="col-md mb-4 mt-2">
              <div class="card-body">
                <h5>{{$event[1]->title}}</h5>
                <p class="card-text">{{$event[1]->content}}</p>
              </div>
            </div>
          </div>
      </div>
    </div>
</div>
<br>
@endsection

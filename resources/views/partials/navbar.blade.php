{{-- nav-baru --}}
{{-- <header class="sticky top-0 z-50 bg-transparent left-0 flex items-center w-full bg-gradient-to-tr bg-white rounded-b-md bg-clip-padding">
    <div class="container">
      <div class="flex items-center justify-between relative">
        <div class="px-3 xl:ml-32">
          <a href="#home"><img src="./aset/mainlogo.png" class="w-64 block py-0" /></a>
        </div>
        <div class="flex items-center mr-20 px-3">
          <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 py-2 lg:hidden">
            <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
            <span class="hamburger-line transition duration-300 ease-in-out"></span>
            <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
          </button>
          <div id="transfer" class="w-full mx-auto self-center lg:w-1/3"></div>
          <button id="exit" type="button" class="hover:text-red-400 mb-10 float-right"></button>

          <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
            <ul class="block lg:flex">
              <li class="group">
                <a href="#home" class="text-base text-dark py-2 px-3 mx-4 flex group-hover:text-black group-hover:bg-kuning rounded-md transition delay-50">Home</a>
              </li>
              <li class="group">
                <a href="#fitur" class="text-base text-dark py-2 px-3 mx-4 flex group-hover:text-black group-hover:bg-hijaumuda rounded-md transition delay-50">About</a>
              </li>
              <li class="group">
                <a href="#about" class="text-base text-dark py-2 px-3 mx-4 flex group-hover:text-black group-hover:bg-hijaumuda rounded-md transition delay-50">Facility</a>
              </li>
              <li class="group">
                <a href="#about" class="text-base text-dark py-2 px-3 mx-4 flex group-hover:text-black group-hover:bg-hijaumuda rounded-md transition delay-50">Events</a>
              </li>
              <li class="group">
                <a href="#kontak" class="text-base text-dark py-2 px-3 mx-4 flex group-hover:text-black group-hover:bg-kuning rounded-md transition delay-50">Contact</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
</header> --}}
{{-- end-nav --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-opacity-80 fixed-top">
    <div class="container">
        {{-- <div class="px-3 xl:ml-32">
            <a href="#home"><img src="./aset/mainlogo.png" class="w-64 block py-0" /></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 py-2 lg:hidden">
                <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                <span class="hamburger-line transition duration-300 ease-in-out"></span>
                <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
            </button>
            <div id="transfer" class="w-full mx-auto self-center lg:w-1/3"></div>
            <button id="exit" type="button" class="hover:text-red-400 mb-10 float-right"></button>

            <ul class="navbar-nav ms-auto block lg:flex">
                <li class="nav-item group"><a class="nav-link fw-bold text-base text-dark py-2 px-2 mx-1 flex group-hover:text-black group-hover:bg-kuning rounded-md transition delay-50 {{ ($active === 'home') ? 'active' : '' }}" href="/">HOME</a></li> 
                <li class="nav-item group"><a class="nav-link text-warning fw-bold text-base text-dark py-2 px-2 mx-1 flex group-hover:text-black group-hover:bg-hijaumuda rounded-md transition delay-50 {{ ($active === 'about') ? 'active' : '' }}" href="/about">ABOUT</a></li>
                <li class="nav-item group"><a class="nav-link text-warning fw-bold text-base text-dark py-2 px-2 mx-1 flex group-hover:text-black group-hover:bg-hijaumuda rounded-md transition delay-50 {{ ($active === 'pages') ? 'active' : '' }}" href="/page">BLOG</a></li>
                <li class="nav-item group"><a class="nav-link text-warning fw-bold text-base text-dark py-2 px-2 mx-1 flex group-hover:text-black group-hover:bg-hijaumuda rounded-md transition delay-50 {{ ($active === 'categories') ? 'active' : '' }}" href="/categories">CATEGORY</a></li> 
                <li class="nav-item group"><a class="nav-link text-warning fw-bold {{ ($active === 'categories') ? 'active' : '' }}" href="/">EVENT</a></li> 
                <li class="nav-item group"><a class="nav-link text-warning fw-bold {{ ($active === 'categories') ? 'active' : '' }}" href="/">GALERY</a></li> 
                <li class="nav-item group"><a class="nav-link text-warning fw-bold {{ ($active === 'categories') ? 'active' : '' }}" href="/">CONTACT</a></li> 
            {{-- </ul>

            <ul class="navbar-nav ms-auto"> --}}
            @auth
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome Back, {{auth()->user()->name}}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
                </li>
            @else
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ ($active === 'login') ? 'active' : '' }}">Login</a>
                </li>
            </ul>
            @endauth

        </div>
    </div>
    </nav>
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          {{-- post --}}
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
              <span data-feather="file-text" class="align-text-bottom"></span>
              My Post
            </a>
          </li>
          {{-- event --}}
          {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/event*') ? 'active' : '' }}" href="/dashboard/event">
              <span data-feather="grid" class="align-text-bottom"></span>
              EVENT
            </a>
          </li> --}}
          {{-- Galery --}}
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/galery*') ? 'active' : '' }}" href="/dashboard/galery">
              <span data-feather="grid" class="align-text-bottom"></span>
              GALERY
            </a>
          </li>

        @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>ADMINISTRATOR</span>
        </h6>
        <ul class="nav flex-column mb-5">
          {{-- Sidebar --}}
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/side*') ? 'active' : '' }}" href="/dashboard/side">
              <span data-feather="grid" class="align-text-bottom"></span>
              SIDEBAR
            </a>
          </li>
          {{-- class --}}
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/cllass*') ? 'active' : '' }}" href="/dashboard/cllass">
              <span data-feather="grid" class="align-text-bottom"></span>
              CLASS
            </a>
          </li>
          {{-- program --}}
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/program*') ? 'active' : '' }}" href="/dashboard/program">
              <span data-feather="grid" class="align-text-bottom"></span>
              PROGRAM
            </a>
          </li>
          {{-- category --}}
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
              <span data-feather="grid" class="align-text-bottom"></span>
              Post Categories
            </a>
          </li>
          {{-- about new--}}
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/about*') ? 'active' : '' }}" href="/dashboard/about">
              <span data-feather="grid" class="align-text-bottom"></span>
              ABOUT
            </a>
          </li>
          {{-- Pilar--}}
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/pilar*') ? 'active' : '' }}" href="/dashboard/pilar">
              <span data-feather="grid" class="align-text-bottom"></span>
              PILAR
            </a>
          </li>
          {{-- fasilitas --}}
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/belajar*') ? 'active' : '' }}" href="/dashboard/belajar">
              <span data-feather="grid" class="align-text-bottom"></span>
              FASILITAS
            </a>
          </li>
          {{-- Eskul--}}
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/eskul*') ? 'active' : '' }}" href="/dashboard/eskul">
              <span data-feather="grid" class="align-text-bottom"></span>
              EXSTRACURIULLAR
            </a>
          </li>
          {{-- founder--}}
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/founder*') ? 'active' : '' }}" href="/dashboard/founder">
              <span data-feather="grid" class="align-text-bottom"></span>
              FOUNDER
            </a>
          </li>
          {{-- visimisi--}}
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/filosofi*') ? 'active' : '' }}" href="/dashboard/filosofi">
              <span data-feather="grid" class="align-text-bottom"></span>
              VISI MISI
            </a>
          </li>
          {{-- guru--}}
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/guru*') ? 'active' : '' }}" href="/dashboard/guru">
              <span data-feather="grid" class="align-text-bottom"></span>
              TEACHER
            </a>
          </li>
          {{-- KOntak--}}
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/contac*') ? 'active' : '' }}" href="/dashboard/contac">
              <span data-feather="grid" class="align-text-bottom"></span>
              CONTACT
            </a>
          </li>
          {{-- event --}}
          {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/event*') ? 'active' : '' }}" href="/dashboard/event">
              <span data-feather="grid" class="align-text-bottom"></span>
              EVENT
            </a>
          </li> --}}
          {{-- Galery --}}
          {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/galery*') ? 'active' : '' }}" href="/dashboard/galery">
              <span data-feather="grid" class="align-text-bottom"></span>
              GALERY
            </a>
          </li> --}}
          {{-- user --}}
          {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}" href="/dashboard/users">
              <span data-feather="grid" class="align-text-bottom"></span>
              User
            </a>
          </li> --}}
          {{-- allpost --}}
          {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/allpost*') ? 'active' : '' }}" href="/dashboard/allposts">
              <span data-feather="grid" class="align-text-bottom"></span>
              All Post
            </a>
          </li> --}}
        </ul>
        @endcan
      </div>
    </nav>
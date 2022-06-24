 <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><img src="{{ asset('landing_page') }}/assets/img/pasar_rakyat.png" alt="" class="img-fluid"><span>P</span>asar Rakyat</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
      </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
                <li><a class="nav-link scrollto {{ Request::is('berita*') ? 'active' : '' }}" href="/berita">Berita</a></li>
                <li><a class="nav-link scrollto {{ Request::is('pasar*') ? 'active' : '' }}" href="/pasar">Pasar</a></li>
                <li><a class="nav-link scrollto {{ Request::is('about') ? 'active' : '' }}" href="/about">Tentang Kami</a></li>
                {{-- <li><a class="nav-link scrollto {{ Request::is('kontak') ? 'active' : '' }}" href="/kontak">Kontak</a></li> --}}
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Selamat Datang, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if (Auth::user()->level == 'admin')
                                <li><a class="dropdown-item" href="admin">Dashboard</a></li>
                            @else
                                <li><a class="dropdown-item" href="admin_pasar">Dashboard</a></li>
                            @endif
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">LogOut</a></li>
                        </ul>
                    </li>
                @else
                    <li><a class="nav-link scrollto {{ Request::is('login') ? 'active' : '' }}" href="/login">Login</a></li>
                @endauth
            </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
  </header>  <!-- End Header -->


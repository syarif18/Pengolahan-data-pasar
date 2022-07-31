<link href="{{ asset('admin2_dashboard') }}/assets/css/style.css" rel="stylesheet">

<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Request::is('admin_pasar*') ? 'active' : 'collapsed' }}" data-bs-target="#dash-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
              <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="dash-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a class="nav-content {{ Request::is('admin_pasar') ? 'active' : 'collapsed' }} " href="/admin_pasar">
                      <i class="bi bi-circle"></i><span>Dashboard admin</span>
                    </a>
                </li>
                <li>
                    <a class="nav-content {{ Request::is('/') ? 'active' : 'collapsed' }} " href="/" target="_blank">
                      <i class="bi bi-circle"></i><span>Dashboard Utama</span>
                    </a>
                </li>
            </ul>
          </li><!-- End Dashboard Nav -->

          <li class="nav-item">
            <a class="nav-link {{ Request::is('profil*') ? 'active' : 'collapsed' }}" href="/profil">
              <i class="bi bi-person"></i>
              <span>Profile</span>
            </a>
          </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('pedagang*') ? 'active' : 'collapsed' }}" href="/pedagang">
          <i class="bi bi-person"></i>
          <span>Data Pedagang</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('lapak*') ? 'active' : 'collapsed' }}" href="/lapak">
          <i class="bi bi-card-list"></i>
          <span>Data Lapak</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('calon_penyewa*') ? 'active' : 'collapsed' }}" href="/calon_penyewa">
          <i class="bi bi-person-plus"></i>
          <span>Calon Penyewa</span>
        </a>
      </li><!-- End Calon Penyewa Page Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('informasi_penyewa') ? 'active' : 'collapsed' }}" href="/informasi_penyewa">
          <i class="bi bi-person-plus"></i>
          <span>Informasi Calon Penyewa</span>
        </a>

      {{-- <li class="nav-item">
        <a class="nav-link {{ Request::is('sewa*') ? 'active' : 'collapsed' }}" href="/sewa">
          <i class="bi bi-person-plus"></i>
          <span>Sewa Lapak</span>
        </a>
      </li> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('logout') }}">
            <i class="bi bi-box-arrow-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

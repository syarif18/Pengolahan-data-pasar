<link href="{{ asset('admin2_dashboard') }}/assets/css/style.css" rel="stylesheet">

<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin_pasar') ? 'active' : 'collapsed' }}" href="admin_pasar">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('pedagang') ? 'active' : 'collapsed' }}" href="/pedagang">
          <i class="bi bi-person"></i>
          <span>Data Pedagang</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('lapak') ? 'active' : 'collapsed' }}" href="/lapak">
          <i class="bi bi-card-list"></i>
          <span>Data Lapak</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('calon_sewa') ? 'active' : 'collapsed' }}" href="/calon_sewa">
          <i class="bi bi-person-plus"></i>
          <span>Calon Penyewa Lapak</span>
        </a>
      </li><!-- End Calon Penyewa Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
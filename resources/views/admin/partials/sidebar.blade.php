<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin*') ? 'active' : 'collapsed' }}" data-bs-target="#dash-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="dash-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a class="nav-content {{ Request::is('admin') ? 'active' : 'collapsed' }} " href="/admin">
                  <i class="bi bi-circle"></i><span>Dashboard admin</span>
                </a>
            </li>
            <li>
                <a class="nav-content {{ Request::is('/') ? 'active' : 'collapsed' }} " href="/">
                  <i class="bi bi-circle"></i><span>Dashboard Utama</span>
                </a>
            </li>
        </ul>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('data_admin*') ? 'active' : 'collapsed' }}" href="/data_admin">
          <i class="bi bi-person"></i>
          <span>Data Admin</span>
        </a>
      </li><!-- End Admin Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('data_pasar*') ? 'active' : 'collapsed' }}" href="/data_pasar">
          <i class="bi bi-shop-window"></i>
          <span>Data Pasar</span>
        </a>
      </li><!-- End Data Pasar Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('data_pedagang', 'palimanan', 'jamblang', 'sumber', 'batik', 'kue', 'pasalaran', 'babakan', 'cipeujeuh', 'ciledug') ? 'active' : 'collapsed' }}" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="/data_pedagang">
          <i class="bi bi-people"></i><span>Data Pedagang</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a class="nav-content {{ Request::is('data_pedagang') ? 'active' : 'collapsed' }} " href="/data_pedagang">
                    <i class="bi bi-circle"></i><span>Data Pedagang</span>
                </a>
            </li>
          <li>
            <a class="nav-content {{ Request::is('palimanan') ? 'active' : 'collapsed' }} " href="/palimanan">
              <i class="bi bi-circle"></i><span>Pasar Palimanan</span>
            </a>
          </li>
          <li>
            <a class="nav-content {{ Request::is('jamblang') ? 'active' : 'collapsed' }} " href="/jamblang">
              <i class="bi bi-circle"></i><span>Pasar Jamblang</span>
            </a>
          </li>
          <li>
            <a class="nav-content {{ Request::is('sumber') ? 'active' : 'collapsed' }} " href="/sumber">
              <i class="bi bi-circle"></i><span>Pasar Sumber</span>
            </a>
          </li>
          <li>
            <a class="nav-content {{ Request::is('batik') ? 'active' : 'collapsed' }} " href="/batik">
              <i class="bi bi-circle"></i><span>Pasar Batik</span>
            </a>
          </li>
          <li>
            <a class="nav-content {{ Request::is('kue') ? 'active' : 'collapsed' }} " href="/kue">
              <i class="bi bi-circle"></i><span>Pasar Kue</span>
            </a>
          </li>
          <li>
            <a class="nav-content {{ Request::is('pasalaran') ? 'active' : 'collapsed' }} " href="/pasalaran">
              <i class="bi bi-circle"></i><span>Pasar Pasalaran</span>
            </a>
          </li>
          <li>
            <a class="nav-content {{ Request::is('babakan') ? 'active' : 'collapsed' }} " href="/babakan">
              <i class="bi bi-circle"></i><span>Pasar Babakan</span>
            </a>
          </li>
          <li>
            <a class="nav-content {{ Request::is('cipeujeuh') ? 'active' : 'collapsed' }} " href="/cipeujeuh">
              <i class="bi bi-circle"></i><span>Pasar Cipeujeuh</span>
            </a>
          </li>
          <li>
            <a class="nav-content {{ Request::is('ciledug') ? 'active' : 'collapsed' }} " href="/ciledug">
              <i class="bi bi-circle"></i><span>Pasar Ciledug</span>
            </a>
          </li>
        </ul>
      </li><!-- End Data Pedagang Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('calon_sewa') ? 'active' : 'collapsed' }}" href="/calon_sewa">
          <i class="bi bi-person-plus"></i>
          <span>Calon Penyewa Lapak</span>
        </a>
      </li><!-- End Calon Penyewa Page Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('konten*') ? 'active' : 'collapsed' }}" href="/konten">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Konten</span>
        </a>
      </li><!-- End Konten Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('logout') }}">
            <i class="bi bi-box-arrow-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

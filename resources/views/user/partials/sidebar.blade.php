<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('user') ? 'active' : 'collapsed' }}" href="/user">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('profile*') ? 'active' : 'collapsed' }}" href="/profile">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->



      <li class="nav-item">
        <a class="nav-link {{ Request::is('sewa*') ? 'active' : 'collapsed' }}" href="/sewa">
          <i class="bi bi-shop-window"></i>
          <span>Sewa Lapak</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item ">
        <a class="nav-link {{ Request::is('informasi*') ? 'active' : 'collapsed' }}" href="/informasi">
          <i class="bi bi-envelope"></i>
          <span>Information</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('logout') }}">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

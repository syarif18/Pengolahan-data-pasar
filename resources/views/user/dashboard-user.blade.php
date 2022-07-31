
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>User | Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('user_dashboard') }}/assets/img/pasar_rakyat.png" rel="icon">
  <link href="{{ asset('user_dashboard') }}/assets/img/pasar_rakyat.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('user_dashboard') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('user_dashboard') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('user_dashboard') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('user_dashboard') }}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{ asset('user_dashboard') }}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{ asset('user_dashboard') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('user_dashboard') }}/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('user_dashboard') }}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  @include('user.partials.navbar')

  @include('user.partials.sidebar')

  @include('sweetalert::alert')


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Home -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                <br>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="/" target="_blank"><i class="bi bi-house-door"></i></a>
                    </div>
                    <div class="ps-3">
                      <h6>Home</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

             <!-- Pasar -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                <br>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="/pasar" target="_blank"><i class="bi bi-shop"></i></a>
                    </div>
                    <div class="ps-3">
                      <h6>Pasar</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Bertia -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                <br>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="/berita" target="_blank"><i class="bi bi-newspaper"></i></a>
                    </div>
                    <div class="ps-3">
                      <h6>Berita</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Tentang -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                <br>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="/about" target="_blank"><i class="bi bi-bookmark-check"></i></a>
                    </div>
                    <div class="ps-3">
                      <h6>Tentang</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        {{-- <div class="col-lg-4"> --}}


          <!-- News & Updates Traffic -->
          {{-- <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="{{ asset('user_dashboard') }}/assets/img/news-1.jpg" alt="">
                  <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="{{ asset('user_dashboard') }}/assets/img/news-2.jpg" alt="">
                  <h4><a href="#">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="{{ asset('user_dashboard') }}/assets/img/news-3.jpg" alt="">
                  <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="{{ asset('user_dashboard') }}/assets/img/news-4.jpg" alt="">
                  <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="{{ asset('user_dashboard') }}/assets/img/news-5.jpg" alt="">
                  <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates --> --}}

        {{-- </div><!-- End Right side columns --> --}}

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  {{-- <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Pasar Rakyat</span></strong>
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Support by <a href="https://bootstrapmade.com/">Dinas Perdagangan Dan Perindustrian Kabupaten Cirebon</a>
    </div>
  </footer><!-- End Footer --> --}}

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('user_dashboard') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset('user_dashboard') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('user_dashboard') }}/assets/vendor/chart.js/chart.min.js"></script>
  <script src="{{ asset('user_dashboard') }}/assets/vendor/echarts/echarts.min.js"></script>
  <script src="{{ asset('user_dashboard') }}/assets/vendor/quill/quill.min.js"></script>
  <script src="{{ asset('user_dashboard') }}/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{ asset('user_dashboard') }}/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{ asset('user_dashboard') }}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('user_dashboard') }}/assets/js/main.js"></script>

</body>

</html>

@extends('landing.layout.main')
@section('content')

    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2 class="mt-5">Tentang Kami</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="{{ asset('landing_page') }}/assets/img/pasar_rakyat.png" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head">Pasar Rakyat</h4>
                </a>
                <p>
                  Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at nequeRedug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure
                </p>
                <ul>
                  <li>
                    <i class="bi bi-check"></i> Interior design Package
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Building House
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Reparing of Residentail Roof
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Renovaion of Commercial Office
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Make Quality Products
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->

    <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>D</span>inas Perdagangan Dan Perindustrian Kabupaten Cirebon</h2>
                </div>

                <p>6FQG+3J2, Sumber, Kec. Sumber, Kabupaten Cirebon, Jawa Barat 45611</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-6">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Silahkan hubungi kami dengan kontak dibawah ini.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +62 231 321073</p>
                  <p><span>Email:</span> Email: Disperdagin@KabCireon.com</p>
                  <p><span>Jam Kerja:</span> 9am-4pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          {{-- <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="{{ asset('landing_page') }}/assets/img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="{{ asset('landing_page') }}/assets/img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="{{ asset('landing_page') }}/assets/img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="{{ asset('landing_page') }}/assets/img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="{{ asset('landing_page') }}/assets/img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="{{ asset('landing_page') }}/assets/img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>{{ asset('landing_page') }}/ --}}
        </div>
      </div>
    </div>
    {{-- <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>eBusiness</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
            -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
  </footer><!-- End  Footer -->
    
@endsection
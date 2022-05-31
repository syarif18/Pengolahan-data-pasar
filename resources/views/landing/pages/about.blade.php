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

    <!-- ======= Kontak Section ======= -->
    <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
          <div class="contact-overly"></div>
          <div class="container ">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                  <h2>Kontak Kami</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- Start contact icon column -->
              <div class="col-md-4">
                <div class="contact-icon text-center">
                  <div class="single-icon">
                    <i class="bi bi-phone"></i>
                    <p>
                      Call: +62 231 321073<br>
                      <span>Senin-Jumat (9am-4pm)</span>
                    </p>
                  </div>
                </div>
              </div>
              <!-- Start contact icon column -->
              <div class="col-md-4">
                <div class="contact-icon text-center">
                  <div class="single-icon">
                    <i class="bi bi-envelope"></i>
                    <p>
                      Email: Disperdagin@KabCireon.com<br>
                      <span>Web: www.example.com</span>
                    </p>
                  </div>
                </div>
              </div>
              <!-- Start contact icon column -->
              <div class="col-md-4">
                <div class="contact-icon text-center">
                  <div class="single-icon">
                    <i class="bi bi-geo-alt"></i>
                    <p>
                      Location: Jl Komplek Dinas Sumber<br>
                      <span>NY 000000, IDN</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">

              <!-- Start Google Map -->
              <div class="col-md-12">
                <!-- Start Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.0614483499376!2d108.47431261414309!3d-6.762362268005592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1e52ed0f81cd%3A0xca2a5ac5bdbd16fd!2sDinas%20Perdagangan%20Dan%20Perindustrian%20Kabupaten%20Cirebon!5e0!3m2!1sid!2sid!4v1647499779824!5m2!1sid!2sid" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <!-- End Map -->
              </div>
              <!-- End Google Map -->

              <!-- Start  contact -->
              {{-- <div class="col-md-6">
                <div class="form contact-form">
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group mt-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group mt-3">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                      <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                  </form>
                </div>
              </div> --}}
              <!-- End Left contact -->
            </div>
          </div>
        </div>
      </div><!-- End Contact Section -->

    <!-- ======= Footer ======= -->
<center>
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
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
          {{-- <div class="col-md-6">
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
          </div> --}}
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
</center>

@endsection

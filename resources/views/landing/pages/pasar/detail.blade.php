@extends('landing.layout.main')

@section('content')

<!-- ======= Pasar Section ======= -->
<div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2 class="mt-5">Detail Pasar</h2>
          </div>
        </div>
      </div>

      <div class="row text-center">

        <!-- Start Left services -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="detail">
                  <i class="bi bi-shop"></i>
                </a>
                <h4>Jumlah Lapak Kosong</h4>
                <h4>100</h4>
              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="#">
                  <i class="bi bi-shop"></i>
                </a>
                <h4>Jumlah Lapak Berpenghuni</h4>
                <h4>200</h4>
              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-12">
          <!-- end col-md-4 -->
          <div class=" about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="#">
                    <i class="bi bi-info-circle"></i>
                </a>
                <h4>Informasi</h4>
              </div>
            </div>
            <!-- end about-details -->
          </div>
        </div>


      </div>
    </div>
</div><!-- End Services Section -->

<!-- ======= Portfolio Section ======= -->
<div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
            <h2>Gambar Lapak</h2>
            </div>
        </div>
        </div>
        <div class="row wesome-project-1 fix">
        <!-- Start Portfolio -page -->
        {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul id="portfolio-flters">
            <li data-filter="*" href="{{ route('detailpasar')}}" class="filter-active">All</li>
            @foreach ($lapak as $item)
            <a href="{{ route('detailpasargambar', $item->jenis_tempat) }}"><li data-filter="" href="">{{ $item->jenis_tempat }}</li></a>
            @endforeach
            </ul>
        </div> --}}
        </div>

        <div class="row awesome-project-content portfolio-container">

        <!-- portfolio-item start -->
        @foreach ($lapak as $itemgambar)
        <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item" filter="">
            <div class="single-awesome-project">
                <div class="awesome-img" style="max-height: 200px; overflow:hidden;">
                    <a href="#"><img src="{{ asset('/img/gambarlapak/'. $itemgambar->gambar1) }}" alt="" /></a>
                    <div class="add-actions text-center">
                    <div class="project-dec">
                        <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('/img/gambarlapak/'. $itemgambar->gambar1) }}">
                        <h4>Pasar Palimanan</h4>
                        <span>{{ $itemgambar->jenis_tempat }}</span>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- portfolio-item end -->
        <!-- portfolio-item start -->
        <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
            <div class="awesome-img" style="max-height: 200px; overflow:hidden;">
                <a href="#"><img src="{{ asset('/img/gambarlapak/'. $itemgambar->gambar2) }}" alt="" /></a>
                <div class="add-actions text-center">
                <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('/img/gambarlapak/'. $itemgambar->gambar3) }}">
                      <h4>Pasar Palimanan</h4>
                      <span>{{ $itemgambar->jenis_tempat }}</span>
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- portfolio-item end -->

        <!-- portfolio-item start -->

        <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-card">
            <div class="single-awesome-project">
            <div class="awesome-img" style="max-height: 200px; overflow:hidden;">
                <a href="#"><img src="{{ asset('/img/gambarlapak/'. $itemgambar->gambar3) }}" alt="" /></a>
                <div class="add-actions text-center">
                <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('/img/gambarlapak/'. $itemgambar->gambar3) }}">
                      <h4>Pasar Palimanan</h4>
                      <span>{{ $itemgambar->jenis_tempat }}</span>
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div>
        @endforeach
        <!-- portfolio-item end -->

        <!-- portfolio-item start -->
        {{-- <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-card">
            <div class="single-awesome-project">
            <div class="awesome-img">
                <a href="#"><img src="{{ asset('landing_page') }}/assets/img/portfolio/3.jpg" alt="" /></a>
                <div class="add-actions text-center">
                <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('landing_page') }}/assets/img/portfolio/3.jpg">
                    <h4>Beautiful Nature</h4>
                    <span>Web Design</span>
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div> --}}
        <!-- portfolio-item end -->

        <!-- portfolio-item start -->
        {{-- <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
            <div class="awesome-img">
                <a href="#"><img src="{{ asset('landing_page') }}/assets/img/portfolio/4.jpg" alt="" /></a>
                <div class="add-actions text-center">
                <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('landing_page') }}/assets/img/portfolio/4.jpg">
                    <h4>Creative Team</h4>
                    <span>Web design</span>
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div> --}}
        <!-- portfolio-item end -->

        <!-- portfolio-item start -->
        {{-- <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app">
            <div class="single-awesome-project">
            <div class="awesome-img">
                <a href="#"><img src="{{ asset('landing_page') }}/assets/img/portfolio/5.jpg" alt="" /></a>
                <div class="add-actions text-center text-center">
                <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('landing_page') }}/assets/img/portfolio/5.jpg">
                    <h4>Beautiful Flower</h4>
                    <span>Web Development</span>
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div> --}}
        <!-- portfolio-item end -->

        <!-- portfolio-item start -->
        {{-- <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
            <div class="awesome-img">
                <a href="#"><img src="{{ asset('landing_page') }}/assets/img/portfolio/6.jpg" alt="" /></a>
                <div class="add-actions text-center">
                <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('landing_page') }}/assets/img/portfolio/6.jpg">
                    <h4>Night Hill</h4>
                    <span>Photoshop</span>
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div> --}}
        <!-- portfolio-item end -->

        </div>
    </div>
</div><!-- End Portfolio Section -->

<!-- Start Google Map -->
<div class="section-headline text-center">
    <h2>Lokasi</h2>
</div>
<div class="col-md-12">
    <!-- Start Map -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.0614483499376!2d108.47431261414309!3d-6.762362268005592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1e52ed0f81cd%3A0xca2a5ac5bdbd16fd!2sDinas%20Perdagangan%20Dan%20Perindustrian%20Kabupaten%20Cirebon!5e0!3m2!1sid!2sid!4v1647499779824!5m2!1sid!2sid" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <!-- End Map -->
</div>
<!-- End Google Map -->

@endsection

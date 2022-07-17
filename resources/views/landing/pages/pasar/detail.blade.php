@extends('landing.layout.main')

@section('content')

<!-- ======= Portfolio Section ======= -->
<div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
            <h2 class="mt-5">Detail Lapak</h2>
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
        <div class="card ms-5 col-md-12 col-sm-12 col-xs-12 col-mt-12 portfolio-item single-awesome-project" style="width: 20rem;">
            {{-- <div class="col-md-12 col-sm-12 col-xs-12 col-mt-12 portfolio-item" filter="">
                <div class="single-awesome-project"> --}}
                    <div class="awesome-img" style="max-height: 190px; overflow:hidden;">
                        <a href="#"><img src="{{ asset('/img/gambarlapak/'. $itemgambar->gambar1) }}" alt="" /></a>
                        <div class="add-actions text-center">
                        <div class="project-dec">
                            <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('/img/gambarlapak/'. $itemgambar->gambar1) }}">
                            <h4>Pasar Sumber</h4>
                            <span>{{ $itemgambar->jenis_tempat }}</span>
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Detail {{ $itemgambar->jenis_tempat }}</h5>
                        <p class="card-text">Luas Tempat : {{ $itemgambar->ukuran_tempat }}</p>
                        <p class="card-text">Jumlah Tempat Kosong : {{ $itemgambar->tempat_kosong }}</p>
                        <p class="card-text">Harga Sewa Lapak : Rp. {{ number_format($itemgambar->harga) }}/tahun</p>
                        <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">informasi</a>
                        <a href="/sewa/create" class="btn btn-primary" target="_blank">Sewa</a>
                    </div>
                {{-- </div>
            </div> --}}

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">informasi Penyewaan Lapak</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Persaratan: <br>
                      + persyaratan pendukung softfile (foto 3x4, ktp, kk, surat permohonan pedagang, surat keterangan usaha) <br>
                      <br>
                      Note! <br>
                      + jika perizinan sudah di acc pedagang wajib membayar biaya sewa pertahunnya <br>
                      + jika pedagang tidak membuka lapak / berjualan salama 1 bulan maka akan diberikan surat teguran <br>
                      + jika surat teguran melebihin 3x, maka perizinan lapak akan di tarik oleh dinas <br>
                      + pedagang wajib mematuhi peraturan yang telah diberikan oleh pengelola pasar dan dinas <br>
                      + informasi yang benar adalah informasi dari pengelola pasar dan dinas
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <a href="/sewa" class="btn btn-primary">Sewa</a>
                    </div>
                  </div>
                </div>
              </div>


        </div>
        @endforeach

        {{-- @foreach ($lapak as $itemgambar)
        <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item" filter="">
            <div class="single-awesome-project">
                <div class="awesome-img" style="max-height: 200px; overflow:hidden;">
                    <a href="#"><img src="{{ asset('/img/gambarlapak/'. $itemgambar->gambar1) }}" alt="" /></a>
                    <div class="add-actions text-center">
                    <div class="project-dec">
                        <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('/img/gambarlapak/'. $itemgambar->gambar1) }}">
                        <h4>Pasar Sumber</h4>
                        <span>{{ $itemgambar->jenis_tempat }}</span>
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
            <div class="awesome-img" style="max-height: 200px; overflow:hidden;">
                <a href="#"><img src="{{ asset('/img/gambarlapak/'. $itemgambar->gambar2) }}" alt="" /></a>
                <div class="add-actions text-center">
                <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('/img/gambarlapak/'. $itemgambar->gambar2) }}">
                      <h4>Pasar Sumber</h4>
                      <span>{{ $itemgambar->jenis_tempat }}</span>
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div> --}}
        <!-- portfolio-item end -->

        <!-- portfolio-item start -->

        {{-- <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-card">
            <div class="single-awesome-project">
            <div class="awesome-img" style="max-height: 200px; overflow:hidden;">
                <a href="/pasar"><img src="{{ asset('/img/gambarlapak/'. $itemgambar->gambar3) }}" alt="" /></a>
                <div class="add-actions text-center">
                <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('/img/gambarlapak/'. $itemgambar->gambar3) }}">
                      <h4>Pasar Sumber</h4>
                      <span>{{ $itemgambar->jenis_tempat }}</span>
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div>


        @endforeach --}}
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
    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.0614483499376!2d108.47431261414309!3d-6.762362268005592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1e52ed0f81cd%3A0xca2a5ac5bdbd16fd!2sDinas%20Perdagangan%20Dan%20Perindustrian%20Kabupaten%20Cirebon!5e0!3m2!1sid!2sid!4v1647499779824!5m2!1sid!2sid" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6539.302295068454!2d108.48598044686614!3d-6.7629006468725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1e455cf750c1%3A0x780bf6cdd2bfcc5a!2sPASAR%20SUMBER!5e0!3m2!1sid!2sid!4v1657287948874!5m2!1sid!2sid" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>
    <!-- End Map -->
</div>
<!-- End Google Map -->

@endsection

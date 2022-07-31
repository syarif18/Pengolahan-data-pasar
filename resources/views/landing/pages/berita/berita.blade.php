@extends('landing.layout.main')
@section('content')
    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2">
                  <h1 class="title2">Berita Kami</h1>
                </div>
                  <div class="layer3">
                    <h2 class="title3">Dinas Perdagangan dan Perindustrian</h2>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->

    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="page-head-blog">
              <div class="single-blog-page">
                <!-- search option start -->
                <form action="#">
                  <div class="search-option">
                    <input type="text" placeholder="Search...">
                    <button class="button" type="submit">
                      <i class="bi bi-search"></i>
                    </button>
                  </div>
                </form>
                <!-- search option end -->
              </div>
              <div class="single-blog-page">
                <!-- recent start -->
                <div class="left-blog">
                  <h4>recent post</h4>
                  <div class="recent-post">
                    <!-- start single post -->
                    @foreach ( $minikonten as $item )
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="{{ route('detailberita', $item->id) }}">
                        <img src="{{ asset('storage/'. $item->gambar) }}" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p><a href="{{ route('detailberita', $item->id) }}">{{ $item->excerpt }}</a></p>
                      </div>
                    </div>
                    @endforeach
                    <!-- End single post -->
                  </div>
                </div>
                <!-- recent end -->
              </div>
            </div>
          </div>
          <!-- End left sidebar -->
          <!-- Start single blog -->
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
                @foreach ( $konten as $dataKonten )
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img" style="height: 350px; overflow:hidden">
                    <a href="{{ route('detailberita', $dataKonten->id) }}">
                    <img src="{{ asset('storage/'. $dataKonten->gambar) }}" alt="" class="img-fluid">
                    </a>
                  </div>
                  <div class="blog-meta">
                    {{-- <span class="comments-type">
                      <i class="bi bi-chat"></i>
                      <a href="#">11 comments</a>
                    </span> --}}
                    <span class="date-type">
                      <i class="bi bi-calendar"></i>{{ $dataKonten->created_at }}
                    </span>
                  </div>
                  <div class="blog-text">
                    <h4>
                      <a href="{{ route('detailberita', $dataKonten->id) }}">{{ $dataKonten->judul }}</a>
                    </h4>
                    <p>{!! $dataKonten->excerpt !!}</p>
                  </div>
                  <span>
                    <a href="{{ route('detailberita', $dataKonten->id) }}" class="ready-btn">Read more</a>
                  </span>
                </div>
              </div>
              @endforeach
              <!-- End single blog -->
                    <div class="d-flex justify-content-center" >
                    {{-- <div>
                        Showing
                        {{ $konten-firstItem() }}
                        to
                        {{ $konten->lastItem() }}
                        of
                        {{ $konten->total() }}
                        entries
                    </div> --}}
                    <div class="pull-center">
                        {{ $konten->links() }}
                    </div>
                    </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Page -->



  </main><!-- End #main -->
@endsection

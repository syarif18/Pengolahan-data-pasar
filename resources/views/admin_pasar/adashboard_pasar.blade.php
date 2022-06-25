@extends('layouts.amain')

@section('content')

    @include('admin_pasar.partials.header')
    @include('admin_pasar.partials.sidebar')

    <section class="section dashboard">
      <div class="row">

        <!-- List Pasar -->
        <div class="col">
          <div class="row">

            <!-- Pasar Jamblang-->
            <div class="col-xxl-4 col-md-12">
              <div class="card info-card revenue-card ">

                <div class="card-body">
                  <h5 class="card-title">Pasar Jamblang</h5>

                  {{-- isi body --}}
                  <div class="row">

                      <div class="col-md-4">
                        <div class="d-flex align-items-center ">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people-fill"></i>
                          </div>
                          <div class="ps-3">
                            <h6>{{ $pedagang }}</h6>
                            <span class="text-muted small pt-2 ps-1">Pedagang</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="d-flex align-items-center ">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people-fill"></i>
                          </div>
                          <div class="ps-3">
                            <h6>{{ $wanita }}</h6>
                            <span class="text-muted small pt-2 ps-1">Perempuan</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="d-flex align-items-center ">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people-fill"></i>
                          </div>
                          <div class="ps-3">
                            <h6>{{ $pria }}</h6>
                            <span class="text-muted small pt-2 ps-1">Laki-laki</span>
                          </div>
                        </div>
                      </div>

                  </div>


                </div>


              </div>
            </div><!-- End Revenue Card -->


          </div>
        </div>
      </div><!-- End list -->
    </section>

@endsection


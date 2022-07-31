@extends('layouts.amain')

@section('content')

@include('admin.partials.header')
@include('admin.partials.sidebar')
@include('sweetalert::alert')


    <section class="section dashboard">
      <div class="row">

        <!-- List Pasar -->
        <div class="col">
          <div class="row">

            <!-- Pasar Palimanan -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                {{-- <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div> --}}

                <div class="card-body">
                  <h5 class="card-title">Pasar Palimanan</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $palimanan }}</h6>
                      <span class="text-muted small pt-2 ps-1">Pedagang</span>
                        <a href="/palimanan"><span class="text-muted small pt-2 ps-1">| Rewiew</span></a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Pasar Jamblang-->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Pasar Jamblang</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $jamblang }}</h6>
                      <span class="text-muted small pt-2 ps-1">Pedagang</span>
                      <a href="/jamblang"><span class="text-muted small pt-2 ps-1">| Rewiew</span></a>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Pasar Sumber -->
            <div class="col-xxl-4 col-xl-4">

              <div class="card info-card customers-card">


                <div class="card-body">
                  <h5 class="card-title">Pasar Sumber</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $sumber }}</h6>
                      <span class="text-muted small pt-2 ps-1">Pedagang</span>
                      <a href="/sumber"><span class="text-muted small pt-2 ps-1">| Rewiew</span></a>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

          </div>
        </div>
      </div><!-- End list 1-->

      <div class="row">

        <!-- List Pasar -->
        <div class="col">
          <div class="row">

            <!-- Pasar Batik -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">


                <div class="card-body">
                  <h5 class="card-title">Pasar Batik </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $batik }}</h6>
                      <span class="text-muted small pt-2 ps-1">Pedagang</span>
                      <a href="/batik"><span class="text-muted small pt-2 ps-1">| Rewiew</span></a>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Batik -->

            <!-- Pasar Kue-->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Pasar Kue</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $kue }}</h6>
                      <span class="text-muted small pt-2 ps-1">Pedagang</span>
                      <a href="/kue"><span class="text-muted small pt-2 ps-1">| Rewiew</span></a>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Kue -->

            <!-- Pasar Pasalaran -->
            <div class="col-xxl-4 col-xl-4">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Pasar Pasalaran</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $pasalaran }}</h6>
                      <span class="text-muted small pt-2 ps-1">Pedagang</span>
                      <a href="/pasalaran"><span class="text-muted small pt-2 ps-1">| Rewiew</span></a>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Pasalarn -->

          </div>
        </div>
      </div><!-- End list 2-->

      <div class="row">

        <!-- List Pasar -->
        <div class="col">
          <div class="row">

            <!-- Pasar Babakan -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Pasar Babakan</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $babakan }}</h6>
                      <span class="text-muted small pt-2 ps-1">Pedagang</span>
                      <a href="/babakan"><span class="text-muted small pt-2 ps-1">| Rewiew</span></a>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Pasar Cipuejueh-->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Pasar Cipeujeuh</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $cipeujeuh }}</h6>
                      <span class="text-muted small pt-2 ps-1">Pedagang</span>
                      <a href="/cipeujeuh"><span class="text-muted small pt-2 ps-1">| Rewiew</span></a>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Pasar Ciledug -->
            <div class="col-xxl-4 col-xl-4">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Pasar Ciledug</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $ciledug }}</h6>
                      <span class="text-muted small pt-2 ps-1">Pedagang</span>
                      <a href="/ciledug"><span class="text-muted small pt-2 ps-1">| Rewiew</span></a>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

          </div>
        </div>
      </div><!-- End List 3-->
    </section>

@endsection

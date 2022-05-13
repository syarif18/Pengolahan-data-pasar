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

                <div class="card-body">
                  <h5 class="card-title">Pasar Jamblang <span>| Update</span></h5>

                  {{-- isi body --}}
                  <div class="row">

                      <div class="col-md-4">
                        <div class="d-flex align-items-center ">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people-fill"></i>
                          </div>
                          <div class="ps-3">
                            <h6>100</h6>
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
                            <h6>60</h6>
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
                            <h6>40</h6>
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

    
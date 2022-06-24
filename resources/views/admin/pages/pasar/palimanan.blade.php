@extends('layouts.amain')

@section('content')

@include('admin.partials.header')
@include('admin.partials.sidebar')

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
                  <h5 class="card-title">{{ $title }} <span>| Update</span></h5>

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

<div>
    <form action="{{ route('exportpalimanan') }}" method="POST">
        @method('post')
        @csrf
        <input type="hidden" name="nama_pasar">
        <button type="submit" class="btn btn-success"><i class="bi bi-file-earmark-spreadsheet"> Excel</i></button>
    </form>
    {{-- <a href="{{ route('exportpedagang') }}" class="btn btn-primary"> Export Excel </a> --}}
</div>

<section>
    <div class="mt-3">
        <!-- Table with hoverable rows -->
        <table class="table table-hover">
            <thead class="table-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pasar</th>
                <th scope="col">Jenis Tempat</th>
                <th scope="col">Nama</th>
                <th scope="col">NIK</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Jualan</th>
                <th scope="col">Nomor Handphone</th>
                <th scope="col">Pas Poto</th>
                <th scope="col">KTP</th>
                <th scope="col">KK</th>
                {{-- <th>SIP</th>
                <th>SIU</th> --}}
            </tr>
            </thead>
            <tbody class="table-light">
                @foreach ($userpalimanan as $item)
                    <tr>
                        <td scope="col" style="text-align: center">{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_pasar }}</td>
                        <td>{{ $item->jenis_tempat }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->tanggal_lahir }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->jenis_jualan }}</td>
                        <td>{{ $item->nomor_hp }}</td>
                        <td><a href="{{ asset('/img/gambarpoto/'. $item->gambar_paspoto) }}" class="btn btn-info"><i class="bi bi-eye"></a></td>
                        <td><a href="{{ asset('/img/gambarktp/'. $item->gambar_ktp) }}" class="btn btn-info"><i class="bi bi-eye"></a></td>
                        <td><a href="{{ asset('/img/gambarkk/'. $item->gambar_kk) }}" class="btn btn-info"><i class="bi bi-eye"></a></td>
                        {{-- <td><img src="{{ URL::to('/') }}/img/gambarpoto/{{ $dataSewa->gambar_paspoto }}" alt="" width="90px" height="120px"></td> </td>
                        <td><img src="{{ URL::to('/') }}/img/gambarktp/{{ $dataSewa->gambar_ktp }}" alt="" width="130px" height="90px"></td> </td>
                        <td><img src="{{ URL::to('/') }}/img/gambarkk/{{ $dataSewa->gambar_kk }}" alt="" width="130px" height="90px"></td> </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
         <!-- End single blog -->
    </div>
    <div class="table-hover d-flex justify-content-center" >
        {{ $userpalimanan->links() }}
    </div>
</section>

@endsection

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

              <div class="card-body">
                <h5 class="card-title">{{ $title }}</h5>

                {{-- isi body --}}
                <div class="row">

                    <div class="col-md-4">
                      <div class="d-flex align-items-center ">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="ps-3">
                          <h6>{{ $ciledug }}</h6>
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

<div class="form-group d-flex justity-content-between">
    <div class="col-sm-4">
        <form action="/ciledug" method="GET">
            @csrf
            @method('post')
            <div class="input-group mb-3">
                <input value="{{ !empty($search)?$search:'' }}" type="text" class="form-control" placeholder="Search..." name="search">
                <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i></button>
            </div>
        </form>
    </div>
    <div class="ms-2">
        <form action="{{ route('exportCiledug') }}" method="POST">
            @method('post')
            @csrf
            <input type="hidden" name="nama_pasar">
            <input type="hidden" name="search" value="{{ !empty($search)?$search:'' }}">
            <button type="submit" class="btn btn-success"><i class="bi bi-file-earmark-spreadsheet"> Export Excel</i></button>
        </form>
    </div>
    <div class="ms-2">
        <form action="{{ route('ciledugpdf') }}" class="d-inline" method="POST" target="_blank">
            @method('post')
            @csrf
            <input type="hidden" name="nama_pasar">
            <input type="hidden" name="search" value="{{ !empty($search)?$search:'' }}">
            <button type="submit" class="btn btn-danger"><i class="bi bi-file-earmark-spreadsheet"> Cetak pdf</i></button>
        </form>
    </div>
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
                @foreach ($userciledug as $item)
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
        <div class="table-hover d-flex justify-content-center" >
            {{ $userciledug->links() }}
        </div>
    </div>
</section>

@endsection

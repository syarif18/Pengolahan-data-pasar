@extends('layouts.amain')

@section('content')

@include('admin.partials.header')
@include('admin.partials.sidebar')

<section>
    <div class="card">
        <div class="container mt-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table with stripped rows</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <th style="width: 50%">Nama Pasar</th>
                    <td>{{ $data->nama_pasar }}</td>
                  </tr>
                  <tr>
                    <th style="width: 50%">Jenis Tempat</th>
                    <td>{{ $data->jenis_tempat }}</td>
                  </tr>
                  <tr>
                    <th style="width: 50%">Jenis Jualan</th>
                    <td>{{ $data->jenis_jualan }}</td>
                  </tr>
                  <tr>
                    <th style="width: 50%">Nama</th>
                    <td>{{ $data->nama }}</td>
                  </tr>
                  <tr>
                    <th style="width: 50%">NIK</th>
                    <td>{{ $data->nik }}</td>
                  </tr>
                  <tr>
                    <th style="width: 50%">Tanggal Lahir</th>
                    <td>{{ $data->tanggal_lahir }}</td>
                  </tr>
                  <tr>
                    <th style="width: 50%">Jenis Kelamin</th>
                    <td>{{ $data->jenis_kelamin }}</td>
                  </tr>
                  <tr>
                    <th style="width: 50%">Alamat</th>
                    <td>{{ $data->alamat }}</td>
                  </tr>
                  <tr>
                    <th style="width: 50%">Nomor Handphone</th>
                    <td>{{ $data->nomor_hp }}</td>
                  </tr>
                  <tr>
                    <th style="width: 50%">Pas Foto 3x4</th>
                    <td><img src="{{ URL::to('/') }}/img/gambarpoto/{{ $data->gambar_paspoto }}" alt="" width="90px" height="120px"></td> </td>
                  </tr>
                  <tr>
                    <th style="width: 50%">KTP</th>
                    <td><img src="{{ URL::to('/') }}/img/gambarktp/{{ $data->gambar_ktp }}" alt="" width="130px" height="90px"></td> </td>
                  </tr>
                  <tr>
                    <th style="width: 50%">Kartu Keluarga</th>
                    <td><img src="{{ URL::to('/') }}/img/gambarkk/{{ $data->gambar_kk }}" alt="" width="130px" height="90px"></td> </td>
                  </tr>
                  <tr>
                    <th style="width: 50%">Status</th>
                    <td>
                      @if ($data->status == '0')
                        <button disabled = "disabled" class="btn btn-warning">Menunggu</i></button>
                      @elseif ($data->status == '1')
                        <button disabled = "disabled"  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Disetujui</i></button>
                      @else
                        <button disabled = "disabled" class="btn btn-danger">Ditolak</i></button>
                      @endif
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            <br>
            <br>

            {{-- <img src="{{ asset('storage/'. $dataK->gambar) }}" alt="" width="130px" height="70px"></td> --}}

            {{-- <div class="row mt-3">
              <div class="col-lg-3 col-md-4 label">Jenis Tempat</div>
              <div class="col-lg-9 col-md-8">{{ $data->jenis_tempat }}</div>
            </div> --}}


        </div>
        <div class="modal-footer">
        @if ($data->status != '0')
            <button disabled = "disabled" class="btn btn-secondary">Selesai</button>
        @else
            <form action="{{ route('calon_sewa.update', $data->id) }}" class="d-inline" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" value="1" name="status">
                <button type="submit" class="btn btn-success"> <i class="bi bi-check-circle"></i> </button>
            </form>
            <form action="{{ route('calon_sewa.update', $data->id) }}" class="d-inline" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" value="2" name="status">
                <button type="submit" class="btn btn-danger"> <i class="bi bi-dash-circle"></i> </button>
            </form>
        @endif
        <a href="{{ url('calon_sewa') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i>Kembali</a>
        </div>
        </div>


        <!-- Modal -->
        {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><b>Selamat Anda Telah Disetujui</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Silahkan Datang Ke kantor {{ $data->nama_pasar }} untuk melakukan registrasi ulang!!!
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
          </div>
          </div> --}}
      </div>

    </div>
</section>

@endsection

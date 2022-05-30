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
              <form action="{{ route('calon_pedagang.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
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
                        <button  disabled = "disabled" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Disetujui</i></button>
                      @else
                        <button disabled = "disabled" class="btn btn-danger">Ditolak</i></button>
                      @endif
                    </td>
                  </tr>
                  <tr >
                    <div class="form-group mt-3">
                        <table for="tahun_masuk"> tahun masuk *</table>
                        <input type="text" name="tahun_masuk" class="form-control " >
                    </div>
                  </tr>
                  <tr>
                        <div class="form-group mt-2 ms-3">
                            <input type="hidden" value="1" name="konfirmasi">
                            <button type="submit" class="btn btn-primary"> Konfrimasi </button>
                        </div>
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
        <a href="{{ url('calon_pedagang') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i>Kembali</a>
        </div>
        </div>

    </form>

    </div>
</section>

@endsection

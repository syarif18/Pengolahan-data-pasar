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
                    <td><a href="{{ asset('/img/gambarpoto/'. $data->gambar_paspoto) }}"><img src="{{ URL::to('/') }}/img/gambarpoto/{{ $data->gambar_paspoto }}" alt="" width="90px" height="120px"></a></td>
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
                        <button  class="btn btn-success" disabled>Disetujui</i></button>
                      @else
                        <button disabled = "disabled" class="btn btn-danger">Ditolak</i></button>
                      @endif
                    </td>
                  </tr>
                  <tr>
                    <th style="width: 50%">Status Pembayaran</th>
                    <td>
                        @if ($data->status_pembayaran == '0')
                        <button disabled = "disabled" class="btn btn-warning">Belum Upload</i></button>
                      @elseif ($data->status_pembayaran == '1')
                        <button disabled = "disabled" class="btn btn-primary" >proses Konfirmasi</i></button>
                      @elseif ($data->status_pembayaran == '2')
                        <button disabled = "disabled" class="btn btn-success">Disetujui</i></button>
                      @endif
                    </td>
                  </tr>
                  <tr>
                    <th style="width: 50%">Pas Foto 3x4</th>
                    <td><a href="{{ asset('/img/bukti/'. $data->bukti_pembayaran) }}"><img src="{{ URL::to('/') }}/img/bukti/{{ $data->bukti_pembayaran }}" alt="" width="90px" height="120px"></a></td>
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

    </div>
</section>

@endsection

{{-- <div class="container">
    <div class="card">
        <h5 class="card-title">Detail Data Penyewa Lepak</h5>

                                    <div class="row">
                                      <div class="col-lg-3 col-md-4 label ">Nama Pasar</div>
                                      <div class="col-lg-9 col-md-8">{{ $data->nama_pasar }}</div>
                                    </div>

                                    <div class="row mt-3">
                                      <div class="col-lg-3 col-md-4 label">Company</div>
                                      <div class="col-lg-9 col-md-8">{{ $data->nik }}</div>
                                    </div>

                                    <div class="row mt-3">
                                      <div class="col-lg-3 col-md-4 label">Job</div>
                                      <div class="col-lg-9 col-md-8">Web Designer</div>
                                    </div>

                                    <div class="row mt-3">
                                      <div class="col-lg-3 col-md-4 label">Country</div>
                                      <div class="col-lg-9 col-md-8">USA</div>
                                    </div>

                                    <div class="row mt-3">
                                      <div class="col-lg-3 col-md-4 label">Address</div>
                                      <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                                    </div>

                                    <div class="row mt-3">
                                      <div class="col-lg-3 col-md-4 label">Phone</div>
                                      <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                                    </div>

                                    <div class="row mt-3">
                                      <div class="col-lg-3 col-md-4 label">Email</div>
                                      <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
    </div>

</div> --}}

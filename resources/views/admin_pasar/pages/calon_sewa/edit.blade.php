@extends('layouts.amain')

@section('content')

@include('admin_pasar.partials.header')
@include('admin_pasar.partials.sidebar')

<section>
    <div class="card">
        <div class="container mt-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table Data Calon Pedagang</h5>

              <form class="row g-3" action="{{ route('calon_penyewa.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="col-md-6">
                    <label for="nama_pasar" class="form-label">Nama Pasar *</label>
                    <input type="text" name="nama_pasar" readonly class="form-control"  value="{{ Auth::user()->nama_pasar }}">
                    {{-- <select class="form-select" aria-label="Default select example" id="nama_pasar" name="nama_pasar">
                        <option selected>Nama Pasar</option>
                        <option value="Pasar Palimanan">Pasar Palimanan</option>
                        <option value="Pasar Jamblang">Pasar Jamblang</option>
                        <option value="Pasar Sumber">Pasar Sumber</option>
                        <option value="Pasar Kue Weru">Pasar Kue Weru</option>
                        <option value="Pasar Batik Trusmi">Pasar Batik Trusmi</option>
                        <option value="Pasar Pasalaran">Pasar Pasalaran</option>
                        <option value="Pasar Cipeujeuh">Pasar Cipeujeuh</option>
                        <option value="Pasar Babakan">Pasar Babakan</option>
                        <option value="Pasar Ciledug">Pasar Ciledug</option>
                    </select> --}}
                </div>
                <div class="col-md-6">
                    <label for="jenis_tempat" class="form-label">Jenis Tempat *</label>
                  <input type="text" class="form-control" readonly id="jenis_tempat" name="jenis_tempat" value="{{ old('judul', $data->jenis_tempat) }}">
                  {{-- <select class="form-select" aria-label="Default select example" id="jenis_tempat" name="jenis_tempat"> --}}
                        {{-- <option value="" hidden selected>{{ old('judul', $data->jenis_tempat) }}</option> --}}
                        {{-- @foreach ($lapak as $lapak)
                            <option value="{{ $lapak->jenis_tempat }}">{{ $lapak->jenis_tempat }}</option>
                        @endforeach --}}
                        {{-- <option value="Toko">Toko</option>
                        <option value="Kios">Kios</option>
                        <option value="Los">Los</option>
                        <option value="Lemprakan">Lemprakan</option>
                        <option value="PTT">PTT</option>
                        <option value="MCK">MCK</option> --}}
                    {{-- </select> --}}
                </div>
                <div class="col-md-6">
                    <label for="ukuran_tempat" class="form-label">Ukuran Tempat *</label>
                    <input type="text" class="form-control"  id="ukuran_tempat" name="ukuran_tempat" value="{{ old('judul', $data->ukuran_tempat) }}">
                    {{-- <select class="form-select" aria-label="Default select example" id="ukuran_tempat" name="ukuran_tempat"> --}}
                        {{-- <option value="" hidden selected>{{ old('judul', $data->ukuran_tempat) }}</option> --}}
                        {{-- @foreach ($lapaks as $lapaks)
                            <option value="{{ $lapaks->ukuran_tempat }}">{{ $lapaks->ukuran_tempat }}</option>
                        @endforeach --}}
                        {{-- <option value="Toko">Toko</option>
                        <option value="Kios">Kios</option>
                        <option value="Los">Los</option>
                        <option value="Lemprakan">Lemprakan</option>
                        <option value="PTT">PTT</option>
                        <option value="MCK">MCK</option> --}}
                    {{-- </select> --}}
                </div>
                <div class="col-md-6">
                    <label for="nomor_tempat" class="form-label">Nomor Tempat *</label>
                    {{-- <input type="text" class="form-control"  id="nomor_tempat" name="nomor_tempat" value="{{ old('judul', $data->nomor_tempat) }}"> --}}
                    <select class="form-select" aria-label="Default select example" id="nomor_tempat" name="nomor_tempat" required>
                        <option value="" hidden selected>{{ old('nomor_tempat', $data->nomor_tempat) }}</option>
                        @foreach ($lapak as $lap)
                            <option value="{{ $lap->id }}">{{ $lap->nomor_tempat }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                  <label for="jenis_jualan" class="form-label">Jenis Jualan *</label>
                  <input type="text" class="form-control" readonly id="jenis_jualan" name="jenis_jualan" value="{{ old('judul', $data->jenis_jualan) }}">
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama *</label>
                    <input type="text" id="nama" name="nama" class="form-control" readonly value="{{ old('judul', $data->nama) }}">
                </div>
                <div class="col-md-6">
                    <label for="nik" class="form-label">NIK *</label>
                    <input type="number" id="nik" name="nik" class="form-control" readonly value="{{ old('judul', $data->nik) }}">
                </div>
                  <div class="col-md-6">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir *</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" readonly class="form-control" value="{{ old('judul', $data->tanggal_lahir) }}">
                  </div>
                <div class="col-md-6">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <input type="text" id="jenis_kelamin" name="jenis_kelamin" readonly class="form-control" value="{{ old('judul', $data->jenis_kelamin) }}">
                </div>
                <div class="col-md-6">
                  <label for="nomor_hp" class="form-label">Nomor Ponsel *</label>
                  <input type="number" class="form-control" readonly placeholder="Nomor Ponsel" id="nomor_hp" name="nomor_hp" value="{{ old('judul', $data->nomor_hp) }}">
                </div>
                <div>
                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat *</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" readonly style="height: 100px"  id="alamat" name="alamat">{{ old('judul', $data->alamat) }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="gambar_paspoto" class="form-label">Pas Foto 3x4 *</label>
                    {{-- <input class="form-control" type="file" id="gambar_paspoto" name="gambar_paspoto" value="{{ old('judul', $data->gambar_paspoto) }}"> --}}
                    {{-- <img class="img-preview img-fluid mt-3 col-sm-5"> --}}
                    @if ($data->gambar_paspoto)
                        <img src="{{asset('/img/gambarpoto/'. $data->gambar_paspoto)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    @else
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                    @endif
                    {{-- <input class="form-control @error('gambar_paspoto') is-invalid @enderror" type="file" id="gambar_paspoto" name="gambar_paspoto" onchange="previewImage()">
                    @error('gambar_paspoto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror --}}
                </div>
                <div class="col-md-4">
                    <label for="gambar_ktp" class="form-label">Foto Ktp *</label>
                    @if ($data->gambar_ktp)
                        <img src="{{asset('/img/gambarktp/'. $data->gambar_ktp)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    @else
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="gambar_kk" class="form-label">Foto KK *</label>
                    @if ($data->gambar_kk)
                        <img src="{{asset('/img/gambarkk/'. $data->gambar_kk)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    @else
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                    @endif
                </div>
                <div>
                    <tr>
                        <th style="width: 50%">Status Persetujuan</th>
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
                    </div>

            </div>
            <div class="modal-footer">
                <div class="form-group mt-2 ms-3">
                    <input type="hidden" value="1" name="status">
                    <button type="submit" class="btn btn-primary"> Konfirmasi </button>
                </div>
            <a href="{{ url('calon_penyewa') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i>Kembali</a>
            </div>
            </div>

              </form>


            <br>
            <br>

    </div>
</section>

@endsection

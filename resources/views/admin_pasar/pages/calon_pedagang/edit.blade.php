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

              <form class="row g-3" action="{{ route('calon_pedagang.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="col-md-6">
                    <label for="nama_pasar" class="form-label">Nama Pasar *</label>
                    <input type="text" name="nama_pasar" readonly class="form-control-plaintext" id="staticEmail" value="{{ Auth::user()->name }}">
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
                    <select class="form-select" aria-label="Default select example" id="jenis_tempat" name="jenis_tempat">
                        <option value="" hidden selected>{{ old('judul', $data->jenis_tempat) }}</option>
                        @foreach ($lapak as $lapak)
                            <option value="{{ $lapak->jenis_tempat }}">{{ $lapak->jenis_tempat }}</option>
                        @endforeach
                        {{-- <option value="Toko">Toko</option>
                        <option value="Kios">Kios</option>
                        <option value="Los">Los</option>
                        <option value="Lemprakan">Lemprakan</option>
                        <option value="PTT">PTT</option>
                        <option value="MCK">MCK</option> --}}
                    </select>
                </div>
                <div class="col-md-6">
                  <label for="jenis_jualan" class="form-label">Jenis Jualan *</label>
                  <input type="text" class="form-control"  id="jenis_jualan" name="jenis_jualan" value="{{ old('judul', $data->jenis_jualan) }}">
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama *</label>
                    <input type="text" id="nama" name="nama" class="form-control" value="{{ old('judul', $data->nama) }}">
                </div>
                <div class="col-md-6">
                    <label for="nik" class="form-label">NIK *</label>
                    <input type="number" id="nik" name="nik" class="form-control" value="{{ old('judul', $data->nik) }}">
                </div>
                  <div class="col-md-6">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir *</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="{{ old('judul', $data->tanggal_lahir) }}">
                  </div>
                <div class="col-md-6">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" aria-label="Default select example" id="jenis_kelamin" name="jenis_kelamin">
                      <option hidden selected>{{ old('judul', $data->jenis_kelamin) }}</option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="col-md-6">
                  <label for="nomor_hp" class="form-label">Nomor Ponsel *</label>
                  <input type="number" class="form-control" placeholder="Nomor Ponsel" id="nomor_hp" name="nomor_hp" value="{{ old('judul', $data->nomor_hp) }}">
                </div>
                <div>
                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat *</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px"  id="alamat" name="alamat">{{ old('judul', $data->alamat) }}</textarea>
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
                </div>
                <div class="form-group mt-3">
                    <table for="tahun_masuk"> tahun masuk *</table>
                    <input type="text" name="tahun_masuk" class="form-control " >
                </div>
                <div class="text-center">
                    <div class="form-group mt-2 ms-3">
                        <input type="hidden" value="1" name="konfirmasi">
                        <button type="submit" class="btn btn-primary"> Konfirmasi </button>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
            <a href="{{ url('calon_pedagang') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i>Kembali</a>
            </div>
            </div>

              </form>

              <!-- Table with stripped rows -->
              {{-- <form action="{{ route('calon_pedagang.update', $data->id)}}" method="POST" enctype="multipart/form-data">
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
                            <button type="submit" class="btn btn-primary"> Konfirmasi </button>
                        </div>
                  </tr>
                </tbody>

              </table> --}}
              <!-- End Table with stripped rows -->

            <br>
            <br>

            {{-- <img src="{{ asset('storage/'. $dataK->gambar) }}" alt="" width="130px" height="70px"></td> --}}

            {{-- <div class="row mt-3">
              <div class="col-lg-3 col-md-4 label">Jenis Tempat</div>
              <div class="col-lg-9 col-md-8">{{ $data->jenis_tempat }}</div>
            </div> --}}


        {{-- </div>
        <div class="modal-footer">
        <a href="{{ url('calon_pedagang') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i>Kembali</a>
        </div>
        </div> --}}

    {{-- </form> --}}

    </div>
</section>

@endsection

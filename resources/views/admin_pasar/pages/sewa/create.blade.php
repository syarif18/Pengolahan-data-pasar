@extends('layouts.amain')

@section('content')

@include('admin_pasar.partials.header')
@include('admin_pasar.partials.sidebar')

    <section>
    <div class="card bg">
        <div class="container mt-3">
            <center><h2>Sewa Lapak</h2></center>

            <div class="card">
            <div class="card-body">
              <h5 class="card-title">isi Data Sewa Dengan Benar!</h5>

              <!-- No Labels Form -->
              <form class="row g-3" action="{{ route('sewa.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <label for="nama_pasar" class="form-label">Nama Pasar *</label>
                    <select class="form-select" aria-label="Default select example" id="nama_pasar" name="nama_pasar">
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
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="jenis_tempat" class="form-label">Jenis Tempat *</label>
                    <select class="form-select" aria-label="Default select example" id="jenis_tempat" name="jenis_tempat">
                        <option selected>Jenis Tempat</option>
                        <option value="Toko">Toko</option>
                        <option value="Kios">Kios</option>
                        <option value="Los">Los</option>
                        <option value="Lemprakan">Lemprakan</option>
                        <option value="PTT">PTT</option>
                        <option value="MCK">MCK</option>
                    </select>
                </div>
                <div class="col-md-6">
                  <label for="jenis_jualan" class="form-label">Jenis Jualan *</label>
                  <input type="text" class="form-control" placeholder="Jenis Jualan" id="jenis_jualan" name="jenis_jualan">
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama *</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Your Name">
                </div>
                <div class="col-md-6">
                    <label for="nik" class="form-label">NIK *</label>
                    <input type="number" id="nik" name="nik" class="form-control" placeholder="NIK">
                </div>
                  <div class="col-md-6">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir *</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control">
                  </div>
                <div class="col-md-6">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" aria-label="Default select example" id="jenis_kelamin" name="jenis_kelamin">
                      <option selected>L/P</option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="col-md-6">
                  <label for="nomor_hp" class="form-label">Nomor Ponsel *</label>
                  <input type="number" class="form-control" placeholder="Nomor Ponsel" id="nomor_hp" name="nomor_hp">
                </div>
                <div>
                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat *</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px" placeholder="Alamat" id="alamat" name="alamat"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="gambar_paspoto" class="form-label">Pas Foto 3x4 *</label>
                  <input class="form-control" type="file" id="gambar_paspoto" id="gambarpaspoto" name="gambar_paspoto">
                </div>
                <div class="col-md-4">
                    <label for="gambar_ktp" class="form-label">Foto Ktp *</label>
                  <input class="form-control" type="file" id="gambar_ktp" id="gambar_ktp" name="gambar_ktp">
                </div>
                <div class="col-md-4">
                    <label for="gambar_kk" class="form-label">Foto KK *</label>
                  <input class="form-control" type="file" id="gambar_kk" id="gambar_kk" name="gambar_kk">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Sewa Lapak</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>

              </form><!-- End No Labels Form -->

        </div>
    </div>
    </section>

@endsection


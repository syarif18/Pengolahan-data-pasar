@extends('layouts.amain')

@section('content')

@include('admin_pasar.partials.header')
@include('admin_pasar.partials.sidebar')

<section>
    <div class="card bg">
        <div class="container mt-3">
            <center><h2>Tambah Data Tempat</h2></center>

            <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Data Tempat dengan benar!</h5>

              <!-- No Labels Form -->
              <form class="row g-3" action="{{ route('lapak.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                  <label for="jenis_tempat" class="form-label">Nama Tempat *</label>
                  <input type="text" class="form-control @error('jenis_tempat') is-invalid @enderror" required placeholder="Jenis Jualan" id="jenis_tempat" name="jenis_tempat">
                  @error('jenis_tempat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="jumlah_tempat" class="form-label">Jumlah Tempat *</label>
                    <input type="number" id="jumlah_tempat" name="jumlah_tempat" class="form-control @error('jumlah_tempat') is-invalid @enderror" required placeholder="jumlah_tempat">
                    @error('jumlah_tempat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="ukuran_tempat" class="form-label">Ukuran M2 Tempat *</label>
                    <input type="text" id="ukuran_tempat" name="ukuran_tempat" class="form-control @error('ukuran_tempat') is-invalid @enderror" required placeholder="ukuran_tempat">
                    @error('ukuran_tempat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="harga" class="form-label">Harga Tempat *</label>
                    <input type="text" id="harga" name="harga" class="form-control @error('harga') is-invalid @enderror" required placeholder="harga">
                    @error('harga')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="gambar1" class="form-label">Gambar 1</label>
                    <input class="form-control @error('gambar1') is-invalid @enderror" type="file" id="gambar1" name="gambar1" required onchange="previewImage()">
                    @error('gambar1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <img class="img-preview img-fluid mt-3 col-sm-5">
                </div>
                {{-- <div class="col-md-6">
                    <label for="gambar2" class="form-label">Gambar 2</label>
                    <input class="form-control @error('gambar2') is-invalid @enderror" type="file" id="gambar2" name="gambar2" required onchange="previewImages()">
                    @error('gambar2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <img class="img-preview-i img-fluid mt-3 col-sm-5">
                </div> --}}
                {{-- <div class="col-md-6">
                    <label for="gambar3" class="form-label">Gambar 3</label>
                    <input class="form-control @error('gambar3') is-invalid @enderror" type="file" id="gambar3" name="gambar3" required onchange="previewImagess()">
                    @error('gambar3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <img class="img-preview-ii img-fluid mt-3 col-sm-5">
                </div> --}}
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Tambah Tempat</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>

              </form><!-- End No Labels Form -->

        </div>
    </div>
    </section>

    <script>
        function previewImage() {
            const image = document.querySelector('#gambar1');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }

        // function previewImages() {
        //     const image = document.querySelector('#gambar2');
        //     const imgPreview = document.querySelector('.img-preview-i');

        //     imgPreview.style.display = 'block';

        //     const oFReader = new FileReader();
        //     oFReader.readAsDataURL(image.files[0]);

        //     oFReader.onload = function(oFREvent){
        //         imgPreview.src = oFREvent.target.result;
        //     }
        // }

        // function previewImagess() {
        //     const image = document.querySelector('#gambar3');
        //     const imgPreview = document.querySelector('.img-preview-ii');

        //     imgPreview.style.display = 'block';

        //     const oFReader = new FileReader();
        //     oFReader.readAsDataURL(image.files[0]);

        //     oFReader.onload = function(oFREvent){
        //         imgPreview.src = oFREvent.target.result;
        //     }
        // }
    </script>

@endsection

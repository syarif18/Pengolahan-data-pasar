@extends('layouts.amain')

@section('content')

@include('admin.partials.header')
@include('admin.partials.sidebar')

    <section>
    <div class="card bg">
        <div class="container mt-3">
            <center><h2>Tambah Konten</h2></center>
            <form class="row g-3" action="{{ url('tentang.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <table for="email"> Email Dinas *</table>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" required autofocus value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <table for="nomor_kantor"> Nomor Kantor Dinas *</table>
                    <input type="text" name="nomor_kantor" class="form-control @error('nomor_kantor') is-invalid @enderror" required autofocus value="{{ old('nomor_kantor') }}">
                    @error('nomor_kantor')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <table for="jam_kerja"> Jam Kerja Dinas *</table>
                    <input type="text" name="jam_kerja" class="form-control @error('jam_kerja') is-invalid @enderror" required autofocus value="{{ old('jam_kerja') }}">
                    @error('jam_kerja')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <table for="lokasi"> Alamat Dinas *</table>
                    <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" required autofocus value="{{ old('lokasi') }}">
                    @error('lokasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <table for="link"> Link Maps Dinas *</table>
                    <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" required autofocus value="{{ old('link') }}">
                    @error('link')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- <div class="form-group mt-2">
                    <table for="slug"> Slug *</table>
                    <input type="text" name="slug" class="form-control">
                </div> --}}
                <div class="col-md-6">
                    <label for="gambar" class="form-label">Logo Pasar Rakyat *</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar" onchange="previewImage()">
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <table for="body"> Tentang Pasar Rakyat*</table>
                    <input class="form-control" id="body" type="hidden" name="body" value="{{ old('body') }}">
                    <trix-editor input="body" class="form-control"></trix-editor>
                    @error('body')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                {{-- <div class="form-group mt-2">
                    <table for="publish_at"> Tanggal Publish *</table>
                    <input class="date form-control" type="text" name="published_at">
                </div> --}}
                {{-- <script type="text/javascript">
                    $('.date').datepicker({
                    format: 'mm-dd-yyyy'
                    });
                </script>   --}}

                <div class="text-center mb-5">
                    <button type="submit" class="btn btn-primary">Tambah Tempat</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <a href="{{ url('tentang') }}" class="btn btn-info"> kembali </a>
                </div>

            </form>
        </div>
    </div>
    </section>

    <script>
        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#gambar');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }

    </script>
    {{-- <script>
        const judul = document.querySelector('#judul');
        const slug = document.querySelector('#slug');

        judul.addEventListener('change', function() {
            fetch('konten/checkSlug?judul=' + judul.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        })
    </script> --}}
@endsection


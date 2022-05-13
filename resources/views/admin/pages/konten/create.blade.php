@extends('layouts.amain')

@section('content')

@include('admin.partials.header')
@include('admin.partials.sidebar')

    <section>
    <div class="card bg">
        <div class="container mt-3">
            <center><h2>Tambah Konten</h2></center>
            <form action="{{ route('konten.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-3">
                    <table for="judul"> judul *</table>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" required autofocus value="{{ old('judul') }}">
                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- <div class="form-group mt-2">
                    <table for="slug"> Slug *</table>
                    <input type="text" name="slug" class="form-control">
                </div> --}}
                <div class="form-group mt-3">
                    <label for="gambar" class="form-label">Input Gambar *</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar" onchange="previewImage()">
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <table for="body"> isi konten full *</table>
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

                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary"> Tambah Konten </button>
                </div>

                <div class="form-group mt-2 mb-3">
                    <a href="{{ url('konten') }}"> kembali </a>
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

  
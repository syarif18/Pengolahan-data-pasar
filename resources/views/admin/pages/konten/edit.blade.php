@extends('layouts.amain')

@section('content')

@include('admin.partials.header')
@include('admin.partials.sidebar')

    <section>
        <div class="card">
        <div class="container mt-5">
            <center><h2>Edit Konten</h2></center>

            <form action="{{ route('konten.update', $konten->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group mt-3">
                    <table for="judul"> judul *</table>
                    <input type="text" name="judul" class="form-control" value="{{ old('judul', $konten->judul) }}">
                </div>
                {{-- <div class="form-group mt-2">
                    <table for="excerpt"> kutipan *</table>
                    <textarea name="excerpt" class="form-control">{{ $konten->excerpt }}</textarea>
                </div>
                <div class="form-group mt-2">
                    <table for="body"> isi konten full *</table>
                    <textarea name="body" class="form-control">{{ $konten->body }}</textarea>
                </div> --}}
                {{-- <div class="form-group mt-2">
                    <label for="formFile" class="form-label">Input Gambar *</label>
                    <input class="form-control" type="file" id="formFile" name="gambar" value="{{ $konten->gambar }}">
                </div> --}}
                <div class="form-group mt-3">
                    <label for="gambar" class="form-label">Input Gambar *</label>
                    <input type="hidden" name="oldImage" value="{{$konten->gambar}}">
                    @if ($konten->gambar)
                        <img src="{{asset('storage/'. $konten->gambar)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    @else
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                    @endif
                    <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar" onchange="previewImage()">
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <table for="body"> isi konten full *</table>
                    <input class="form-control" id="body" type="hidden" name="body" value="{{ old('body', $konten->body) }}">
                    <trix-editor input="body" class="form-control"></trix-editor>
                </div>
                {{-- <div class="form-group mt-2">
                    <table for="publish_at"> Tanggal Publish *</table>
                    <input class="date form-control" type="text" name="publish_at" value="{{ $data->published_at }}">
                </div>
                <script type="text/javascript">
                    $('.date').datepicker({
                    format: 'mm-dd-yyyy'
                    });
                </script>   --}}

                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary"> Edit Konten </button>
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

@endsection

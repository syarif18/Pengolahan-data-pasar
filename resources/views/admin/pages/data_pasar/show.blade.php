@extends('layouts.tmain')

@section('content')

 <section>
        <div class="container mt-5">
            <center><h2>Tambah Data</h2></center>

            <form action="{{ route('data_pasar.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group mt-2">
                    <table for="judul"> Nama Pasar *</table>
                    <input type="text" name="nama_pasar" class="form-control" value="{{ $data->nama_pasar }}">
                </div>
                <div class="form-group mt-2">
                    <table for="judul"> Jumlah Tempat *</table>
                    <input type="text" name="jumlah_tempat" class="form-control" value="{{ $data->jumlah_tempat }}">
                </div>
                <div class="form-group mt-2">
                    <table for="judul"> Tempat Buka *</table>
                    <input type="text" name="buka" class="form-control" value="{{ $data->buka }}">
                </div>
                <div class="form-group mt-2">
                    <table for="judul"> Tempat kosong *</table>
                    <input type="text" name="tutup" class="form-control" value="{{ $data->tutup }}">
                </div>
                

                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary"> Edit Data </button>
                </div>

                <div>
                    <a href="{{ url('data_pasar') }}"> kembali </a>
                </div>
            </form>
        </div>
    </section>
    
@endsection
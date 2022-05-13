@extends('layouts.tmain')

@section('content')

 <section>
        <div class="container mt-5">
            <center><h2>Tambah Data</h2></center>

            <form action="{{ route('data_pasar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-2">
                    <table for="judul"> Nama Pasar *</table>
                    <input type="text" name="nama_pasar" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <table for="judul"> Jumlah Tempat *</table>
                    <input type="text" name="jumlah_tempat" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <table for="judul"> Tempat Buka *</table>
                    <input type="text" name="buka" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <table for="judul"> Tempat kosong *</table>
                    <input type="text" name="tutup" class="form-control">
                </div>
                

                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary"> Tambah Data </button>
                </div>

                <div>
                    <a href="{{ url('data_pasar') }}"> kembali </a>
                </div>
            </form>
        </div>
    </section>
    
@endsection
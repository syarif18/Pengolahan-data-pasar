
@extends('layouts.main')

@section('content')

@include('user.partials.navbar')
@include('user.partials.sidebar')


<div class="row awesome-project-content portfolio-container">

    <!-- portfolio-item start -->
    @foreach ($data as $itemgambar)

    <div class="col-4">



    <form action="{{ route('createform') }}" method="POST">
        @csrf
        @method('post')

        <input type="hidden" name="nama_pasar"  value="{{ $itemgambar['nama_pasar'] }}">
        <input type="hidden" name="jenis_tempat" value="{{ $itemgambar['jenis_tempat'] }}">
        <input type="hidden" name="ukuran_tempat" value="{{ $itemgambar['ukuran_tempat']}}">



    <div class="card ms-4" style="width: 18rem;">
        <div style="max-height: 170px; overflow:hidden;">
            <img src="{{ asset('/img/gambarlapak/'. $itemgambar['gambar1']) }}" class="card-img-top mt-1"  alt="..." style="max-height: 190px; overflow:hidden;">
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $itemgambar['nama_pasar'] }}</h5>
            <h5 class="card-title">Detail {{ $itemgambar['jenis_tempat'] }}</h5>
                        <p class="card-text">Luas Tempat : {{ $itemgambar['ukuran_tempat']}}</p>
                        <p class="card-text">Jumlah Tempat Kosong : {{ $itemgambar['tempat_kosong'] }}</p>
                        <p class="card-text">Harga Sewa Lapak : Rp. {{ number_format($itemgambar['harga']) }}/tahun</p>
                        <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">informasi</a>
                        <button type="submit" class="btn btn-primary">Sewa</button>
                        {{-- <a href="/createform" class="btn btn-primary"></a> --}}
        </div>
    </div>

    </form>

</div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">informasi Penyewaan Lapak</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Persaratan: <br>
              + persyaratan pendukung softfile (foto 3x4, ktp, kk, surat permohonan pedagang, surat keterangan usaha) <br>
              <br>
              Note! <br>
              + jika perizinan sudah di acc pedagang wajib membayar biaya sewa pertahunnya <br>
              + jika pedagang tidak membuka lapak / berjualan salama 1 bulan maka akan diberikan surat teguran <br>
              + jika surat teguran melebihin 3x, maka perizinan lapak akan di tarik oleh dinas <br>
              + pedagang wajib mematuhi peraturan yang telah diberikan oleh pengelola pasar dan dinas <br>
              + informasi yang benar adalah informasi dari pengelola pasar dan dinas
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <a href="/createform" class="btn btn-primary">Sewa</a>
            </div>

          </div>
        </div>
    </div>

    @endforeach

</div>

@endsection

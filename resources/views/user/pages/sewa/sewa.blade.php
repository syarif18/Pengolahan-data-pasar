@extends('layouts.main')

@section('content')

@include('user.partials.navbar')
@include('user.partials.sidebar')

@if(session()->has('success'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session()->has('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('delete') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="form-group d-flex justify-content-between">
    <div class="mb-3">
        <a href="{{ 'sewa/create' }}" class="btn btn-primary"><i class="bi bi-plus-circle"> Sewa Lapak</i></a>
    </div>

    {{-- <form action="/sewa" method="GET">
        @csrf
        @method('post')
        <div class="input-group mb-3">
            <input value="{{ !empty($search)?$search:'' }}" type="text" class="form-control" placeholder="Search..." name="search">
            <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i></button>
        </div>
    </form> --}}
</div>



<section>
    <div class="card">
        <div class="container mt-3">
            <center><h2>Informasi</h2></center>

            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Informasi Status Sewa Lapak Anda</h5>

                  <!-- Table with hoverable rows -->
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Penyewa</th>
                        <th scope="col">Status Persetujuan</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dataSewa)
                            <tr>
                                <td scope="col" style="text-align: center">{{ $loop->iteration }}</td>
                                <td>{{ $dataSewa->nama }}</td>
                                <td>
                                  {{-- kondisi status apakah di setujui atau dotolak --}}
                                  @if ($dataSewa->status == '0')
                                    <button disabled = "disabled" class="btn btn-warning">Menunggu</i></button>
                                  @elseif ($dataSewa->status == '1')
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" >Disetujui</i></button>
                                  @else
                                    <button disabled = "disabled" class="btn btn-danger">Ditolak</i></button>
                                  @endif
                                </td>
                                <td>
                                    <a href="{{ route('sewa.show', $dataSewa->sewa_id) }}" class="btn btn-info"><i class="bi bi-eye"></i></a>
                                    @if ($dataSewa->status == '0')
                                      <form action="{{ route('sewa.destroy', $dataSewa->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Hapus Data?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                      </form>
                                    @elseif ($dataSewa->status == '2')
                                      <form action="{{ route('sewa.destroy', $dataSewa->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Hapus Data?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                      </form>
                                    @else
                                      <form action="{{ route('sewa.destroy', $dataSewa->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Hapus Data?')">
                                        @method('delete')
                                        @csrf
                                        <button disabled = "disabled" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                      </form>
                                        {{-- <input class="form-control" type="file" id="bukti_pembayaran" name="bukti_pembayaran"> --}}
                                    @endif

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                {{-- <div class="table-hover d-flex justify-content-center" >
                    {{ $data->links() }}
                </div> --}}
                  <!-- End Table with hoverable rows -->
                  <!-- Button trigger modal -->

                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch demo modal
                    </button> --}}
                    @foreach ($data as $item)
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                       <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Informasi</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                           Selamat Data Anda Telah Disetujui, Silahkan Lakukan Transaksi untuk Pembayaran Penyewaan lapak dengan mentransfer ke ATM di bawah ini!!!
                           <br>
                           <br>
                           a
                           <br>
                           <br>
                           Kirim bukti, sebagai Validasi!!
                           </div>
                           <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                           <a href="/informasi" class="btn btn-primary"> Kirim Bukti</a>
                           </div>
                       </div>
                       </div>
                   </div>
                   @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

@endsection

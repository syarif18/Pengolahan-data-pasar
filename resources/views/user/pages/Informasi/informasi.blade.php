@extends('layouts.main')

@section('content')

@include('user.partials.navbar')
@include('user.partials.sidebar')

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
                        <th scope="col">Sewa Lapak</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dataSewa)
                            <tr>
                                <td scope="col" style="text-align: center">{{ $loop->iteration }}</td>
                                <td>{{ $dataSewa->nama_pasar }}</td>
                                <td>
                                  {{-- kondisi status apakah di setujui atau dotolak --}}
                                  @if ($dataSewa->status == '0')
                                    <button disabled = "disabled" class="btn btn-warning">Menunggu</i></button>
                                  @elseif ($dataSewa->status == '1')
                                    <button  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Disetujui</i></button>
                                  @else
                                    <button disabled = "disabled" class="btn btn-danger">Ditolak</i></button>
                                  @endif
                                </td>
                                <td>
                                    <a href="{{ route('informasi.show', $dataSewa->id) }}" class="btn btn-info"><i class="bi bi-eye"></i></a>
                                    @if ($dataSewa->status == '0')
                                      <form action="{{ route('informasi.destroy', $dataSewa->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Hapus Data?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                      </form>
                                    @elseif ($dataSewa->status == '2')
                                      <form action="{{ route('informasi.destroy', $dataSewa->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Hapus Data?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                      </form>
                                    @else
                                      <form action="{{ route('informasi.destroy', $dataSewa->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Hapus Data?')">
                                        @method('delete')
                                        @csrf
                                        <button disabled = "disabled" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                      </form>
                                    @endif


                                </td>
                            </tr>

                    </tbody>
                  </table>
                  <!-- End Table with hoverable rows -->
                  <!-- Button trigger modal -->

                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch demo modal
                    </button> --}}

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><b>Selamat Anda Telah Disetujui</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  Silahkan Datang Ke kantor {{ $dataSewa->nama_pasar }} untuk melakukan registrasi ulang!!!


                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>


                        @endforeach
        </div>
    </div>
</section>

@endsection

@extends('layouts.amain')

@section('content')

@include('admin_pasar.partials.header')
@include('admin_pasar.partials.sidebar')

<div class="row">
    <div class="col-md-12 form-group ">
        <div class="row ">
            <div class="col-sm-4">
                <form action="/calon_pedagang" method="GET">
                    @csrf
                    @method('post')
                    <div class="input-group mb-3">
                        <input value="{{ !empty($search)?$search:'' }}" type="text" class="form-control" placeholder="Search..." name="search">
                        <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
            {{-- <div class="col">
                <form action="{{ route('exportpedagang') }}" class="d-inline" method="POST">
                    @method('post')
                    @csrf
                    <input type="hidden" name="nama_pasar" value="{{ $auth }}">
                    <input type="hidden" name="search" value="{{ !empty($search)?$search:'' }}">
                    <button type="submit" class="btn btn-success"><i class="bi bi-file-earmark-spreadsheet"> Cetak Excel</i></button>
                </form>
            </div> --}}
        </div>
    </div>
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
                        <th scope="col">Status</th>
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
                                    <button disabled = "disabled" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Disetujui</i></button>
                                  @else
                                    <button disabled = "disabled" class="btn btn-danger">Ditolak</i></button>
                                  @endif
                                </td>
                                <td>
                                    <a href="{{ route('calon_pedagang.show', $dataSewa->id) }}" class="btn btn-info"><i class="bi bi-eye"></i></a>
                                    @if ($dataSewa->status == '0')
                                      <form action="{{ route('calon_pedagang.destroy', $dataSewa->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Hapus Data?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                      </form>
                                    @elseif ($dataSewa->status == '2')
                                      <form action="{{ route('calon_pedagang.destroy', $dataSewa->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Hapus Data?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                      </form>
                                    @else
                                      <form action="{{ route('calon_pedagang.destroy', $dataSewa->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Hapus Data?')">
                                        @method('delete')
                                        @csrf
                                        <button disabled = "disabled" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                      </form>
                                    @endif

                                    @if ($dataSewa->konfirmasi != '0')
                                        <button disabled = "disabled" class="btn btn-primary">Dikonfirmasi</button>
                                    @else
                                        <a href="{{ route('calon_pedagang.edit', $dataSewa->id) }}" class="btn btn-primary">Konfirmasi</a>
                                    @endif

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>

                  <!-- End Table with hoverable rows -->
                  <!-- Button trigger modal -->

                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch demo modal
                    </button> --}}
        </div>
    </div>
</section>

@endsection

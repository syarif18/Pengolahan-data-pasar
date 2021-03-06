@extends('layouts.amain')

@section('content')

@include('admin.partials.header')
@include('admin.partials.sidebar')

{{-- <div>
    <a href="{{ 'data_pasar/create' }}" class="btn btn-primary"> + Tambah Data </a>
</div> --}}

    <div>
        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus-circle"> Tambah Nama Pasar</i></a>
    </div>

    <div class="card mt-3">
        <div class="container mt-3">
            <center><h2>List Pasar</h2></center>
            <div class="card">
                <div class="table-responsive card-body mt-3">
                    <table class="table table-responsive table-hover">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama_Pasar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $del)
                                <tr>
                                    <td scope="col">{{ $loop->iteration }}</td>
                                    <td>{{ $del->nama_pasar }}</td>
                                    <td>
                                    <form action="{{ route('data_pasar.destroy', $del->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Hapus Data?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                    </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Button trigger modal -->
 {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> --}}

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('data_pasar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-2">
                    <table for="nama_pasar"> Nama Pasar *</table>
                    <input type="text" name="nama_pasar" class="form-control">
                </div>
                {{-- <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary"> Tambah Data </button>
                </div> --}}

                {{-- <div>
                    <a href="{{ url('data_pasar') }}"> kembali </a>
                </div> --}}
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary"> Tambah Data </button>
                  </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

                </div>
            </div>
        </div>
    </div>

    @include('sweetalert::alert')
@endsection

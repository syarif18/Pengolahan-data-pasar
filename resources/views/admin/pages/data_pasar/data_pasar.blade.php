@extends('layouts.amain')

@section('content')

@include('admin.partials.header')
@include('admin.partials.sidebar')

{{-- <div>
    <a href="{{ 'data_pasar/create' }}" class="btn btn-primary"> + Tambah Data </a>
</div> --}}

    <table class="table table-bordered border-primary mt-2">
        <thead class="table-light">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama Pasar</th>
                <th scope="col">Jenis Tempat</th>
                <th scope="col">Jumlah Tempat</th>
                {{-- <th scope="col">pedagang</th>
                <th scope="col">kosong</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td scope="col">{{ $loop->iteration }}</td>
                    <td scope="col">{{ $item->name }}</td>
                    <td scope="col">{{ $item->jenis_tempat }}</td>
                    <td scope="col">{{ $item->jumlah_tempat }}</td>
                    {{-- <td scope="col">0</td>
                    <td>0</td> --}}
                    {{-- <td scope="col">
                        <a href="{{ route('data_pasar.show', $item->id) }}" class="btn btn-warning">edit</a>
                        <form action="{{ route('data_pasar.destroy', $item->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Hapus Data?')">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger">delete</button>
                        </form>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        <a href="{{ 'data_pasar/create' }}" class="btn btn-primary"><i class="bi bi-plus-circle"> Tambah Nama Pasar</i></a>
    </div>

    <div class="card mt-3">
        <div class="container mt-3">
            <center><h2>List Pasar</h2></center>
            <div class="card">
                <div class="card-body mt-3">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama_Pasar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                                <tr>
                                    <td scope="col">{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_pasar }}</td>
                                    <td>
                                    <form action="{{ route('data_pasar.destroy', $item->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Hapus Data?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                    </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

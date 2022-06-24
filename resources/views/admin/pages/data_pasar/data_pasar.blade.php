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
                <th scope="col">Jumlah Tempat</th>
                <th scope="col">Tempat Buka</th>
                <th scope="col">Tempat Kosong</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $dataPasar)
                <tr>
                    <td scope="col">{{ $dataPasar->id }}</td>
                    <td scope="col">{{ $dataPasar->nama_pasar }}</td>
                    <td scope="col">{{ $dataPasar->jumlah_tempat }}</td>
                    <td scope="col">{{ $dataPasar->buka }}</td>
                    <td scope="col">{{ $dataPasar->tutup }}</td>
                    <td scope="col">
                        <a href="{{ route('data_pasar.show', $dataPasar->id) }}" class="btn btn-warning">edit</a>
                        <form action="{{ route('data_pasar.destroy', $dataPasar->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Hapus Data?')">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

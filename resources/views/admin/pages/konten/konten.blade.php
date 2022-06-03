@extends('layouts.amain')

@section('content')

@include('admin.partials.header')
@include('admin.partials.sidebar')

@if(session()->has('success'))
    <div class="alert alert-primary" role="alert">
        {{ session('success') }}
    </div>
@endif
@if(session()->has('delete'))
    <div class="alert alert-danger" role="alert">
        {{ session('delete') }}
    </div>
@endif

<div>
    <a href="{{ 'konten/create' }}" class="btn btn-primary"> + Tambah Konten </a>
</div>

    <table class="table table-bordered border-primary mt-2">
        <thead class="table-light">
            <tr>
                <th scope="col" style="text-align: center">No</th>
                <th scope="col" style="text-align: center">Judul</th>
                <th scope="col" style="text-align: center">Gambar</th>
                {{-- <th scope="col">Publish</th> --}}
                <th scope="col" style="text-align: center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($konten as $dataKonten)
                <tr>
                    <td scope="col" style="text-align: center">{{ $loop->iteration }}</td>
                    <td scope="col">{{ $dataKonten->judul }}</td>
                    <td scope="col" style="text-align: center"><img src="{{ asset('storage/'. $dataKonten->gambar) }}" alt="" width="130px" height="70px"></td>
                    {{-- <td scope="col">{{ $dataKonten->publish_at }}</td> --}}
                    <td scope="col" style="text-align: center">
                        <a href="{{ route('konten.show', $dataKonten->id) }}" class="btn btn-info" ><i class="bi bi-eye"></i></a>
                        <a href="{{ route('konten.edit', $dataKonten->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('konten.destroy', $dataKonten->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Hapus Data?')">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection


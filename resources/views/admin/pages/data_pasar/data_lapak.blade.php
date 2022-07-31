@extends('layouts.amain')

@section('content')

@include('admin.partials.header')
@include('admin.partials.sidebar')

<section>
    <table class="table table-bordered border-primary mt-2">
        <thead class="table-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pasar</th>
                <th scope="col">Jenis Tempat</th>
                <th scope="col">Jumlah Tempat</th>
                {{-- <th scope="col">pedagang</th>
                <th scope="col">kosong</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($pasar as $item)
                <tr>
                    <td scope="col">{{ $loop->iteration }}</td>
                    <td scope="col">{{ $item->nm_pasar }}</td>
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
</section>

@endsection

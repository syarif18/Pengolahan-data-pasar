@extends('layouts.amain')

@section('content')

@include('admin_pasar.partials.header')
@include('admin_pasar.partials.sidebar')

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

<div>
    <a href="{{ 'lapak/create' }}" class="btn btn-primary"> <i class="bi bi-plus-circle"> Tambah Lapak</i> </a>
</div>

<section>
    <div class="mt-3">
        <!-- Table with hoverable rows -->
        <table class="table table-hover">
            <thead class="table-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Tempat</th>
                <th scope="col">Jumlah Tempat</th>
                {{-- <th scope="col">Tempat Kosong</th> --}}
                <th scope="col">Ukuran Tempat</th>
                <th scope="col">Harga</th>
                <th scope="col">Gambar Tempat 1</th>
                {{-- <th scope="col">Gambar Tempat 2</th>
                <th scope="col">gambar Tempat 3</th> --}}
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody class="table-light">
                @foreach ($datalapak as $item)
                    <tr>
                        <td scope="col" style="text-align: center">{{ $loop->iteration }}</td>
                        <td>{{ $item->jenis_tempat }}</td>
                        <td>{{ $item->jumlah_tempat }}</td>
                        {{-- <td>{{ $item->tempat_kosong }}</td> --}}
                        <td>{{ $item->ukuran_tempat }}</td>
                        <td>{{ $item->harga }}</td>
                        <td scope="col" ><a href="{{ asset('/img/gambarlapak/'. $item->gambar1) }}"><img src="{{ asset('/img/gambarlapak/'. $item->gambar1) }}" alt="" width="130px" height="70px"></a></td>
                        {{-- <td scope="col" ><a href="{{ asset('/img/gambarlapak/'. $item->gambar2) }}"><img src="{{ asset('/img/gambarlapak/'. $item->gambar2) }}" alt="" width="130px" height="70px"></a></td>
                        <td scope="col" ><a href="{{ asset('/img/gambarlapak/'. $item->gambar3) }}"><img src="{{ asset('/img/gambarlapak/'. $item->gambar3) }}" alt="" width="130px" height="70px"></a></td> --}}
                        <td>
                            <form action="{{ route('lapak.destroy', $item->lapak_id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Hapus Data?')">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                            </td>
                        {{-- <td><img src="{{ URL::to('/') }}/img/gambarpoto/{{ $dataSewa->gambar_paspoto }}" alt="" width="90px" height="120px"></td> </td>
                        <td><img src="{{ URL::to('/') }}/img/gambarktp/{{ $dataSewa->gambar_ktp }}" alt="" width="130px" height="90px"></td> </td>
                        <td><img src="{{ URL::to('/') }}/img/gambarkk/{{ $dataSewa->gambar_kk }}" alt="" width="130px" height="90px"></td> </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
         <!-- End single blog -->
        {{-- <div class="table-hover d-flex justify-content-center" >
            {{ $datalapak->links() }}
        </div> --}}
    </div>
</section>

@endsection

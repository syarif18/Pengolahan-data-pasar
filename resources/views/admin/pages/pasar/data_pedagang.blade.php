@extends('layouts.amain')

@section('content')

@include('admin.partials.header')
@include('admin.partials.sidebar')

<div class="col-sm-4">
    <form action="/data_pedagang" method="GET">
        @csrf
        @method('post')
        <div class="input-group mb-3">
            <input value="{{ !empty($search)?$search:'' }}" type="text" class="form-control" placeholder="Search..." name="search">
            <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i></button>
        </div>
    </form>
</div>

<section>
    <div class="table-responsive mt-3">
        <!-- Table with hoverable rows -->
        <table class="table table-hover">
            <thead class="table-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pasar</th>
                <th scope="col">Jenis Tempat</th>
                <th scope="col">Nama</th>
                <th scope="col">NIK</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Jualan</th>
                <th scope="col">Nomor Handphone</th>
                <th scope="col">Pas Poto</th>
                <th scope="col">KTP</th>
                <th scope="col">KK</th>
                {{-- <th>SIP</th>
                <th>SIU</th> --}}
            </tr>
            </thead>
            <tbody class="table-light">
                @foreach ($datapedagang as $item)
                    <tr>
                        <td scope="col" style="text-align: center">{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_pasar }}</td>
                        <td>{{ $item->jenis_tempat }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->tanggal_lahir }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->jenis_jualan }}</td>
                        <td>{{ $item->nomor_hp }}</td>
                        <td><a href="{{ asset('/img/gambarpoto/'. $item->gambar_paspoto) }}" class="btn btn-info"><i class="bi bi-eye"></a></td>
                        <td><a href="{{ asset('/img/gambarktp/'. $item->gambar_ktp) }}" class="btn btn-info"><i class="bi bi-eye"></a></td>
                        <td><a href="{{ asset('/img/gambarkk/'. $item->gambar_kk) }}" class="btn btn-info"><i class="bi bi-eye"></a></td>
                        {{-- <td><img src="{{ URL::to('/') }}/img/gambarpoto/{{ $dataSewa->gambar_paspoto }}" alt="" width="90px" height="120px"></td> </td>
                        <td><img src="{{ URL::to('/') }}/img/gambarktp/{{ $dataSewa->gambar_ktp }}" alt="" width="130px" height="90px"></td> </td>
                        <td><img src="{{ URL::to('/') }}/img/gambarkk/{{ $dataSewa->gambar_kk }}" alt="" width="130px" height="90px"></td> </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
         <!-- End single blog -->
        <div class="table-hover d-flex justify-content-center" >
            {{ $datapedagang->links() }}
        </div>
    </div>
</section>

@endsection

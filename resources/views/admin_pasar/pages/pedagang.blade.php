@extends('layouts.amain')

@section('content')

    @include('admin_pasar.partials.header')
    @include('admin_pasar.partials.sidebar')


    <div>
        <div class="row">
            <div class="col-md-12 form-group ">
                <div class="row ">
                    <div class="col-sm-4">
                        <form action="/pedagang" method="GET">
                            @csrf
                            @method('post')
                            <div class="input-group mb-3">
                                <input value="{{ !empty($search)?$search:'' }}" type="text" class="form-control" placeholder="Search..." name="search">
                                <button class="btn btn-outline-secondary" type="button"><i class="bi bi-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <form action="{{ route('exportpedagang') }}" class="d-inline" method="POST">
                            @method('post')
                            @csrf
                            <input type="hidden" name="nama_pasar" value="{{ $auth }}">
                            <input type="hidden" name="search" value="{{ !empty($search)?$search:'' }}">
                            <button type="submit" class="btn btn-success"><i class="bi bi-file-earmark-spreadsheet"> Cetak Excel</i></button>
                        </form>
                    </div>
                </div>





            </div>
        </div>

        {{-- <a href="{{ route('exportpedagang') }}" class="btn btn-primary"> Export Excel </a> --}}
    </div>

    <section>

                {{-- <div class="container mt-3">
                    <center><h2>Data Pedagang</h2></center>

                        <h5 class="card-title">Informasi Data Pedagang</h5> --}}

                        <!-- Table with hoverable rows -->
                        <div class="row mt-3">
                            <div class="col-12">
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
                                        @foreach ($datas as $dataSewa)
                                            <tr>
                                                <td scope="col" style="text-align: center">{{ $loop->iteration }}</td>
                                                <td>{{ $dataSewa->nama_pasar }}</td>
                                                <td>{{ $dataSewa->jenis_tempat }}</td>
                                                <td>{{ $dataSewa->nama }}</td>
                                                <td>{{ $dataSewa->nik }}</td>
                                                <td>{{ $dataSewa->tanggal_lahir }}</td>
                                                <td>{{ $dataSewa->alamat }}</td>
                                                <td>{{ $dataSewa->jenis_jualan }}</td>
                                                <td>{{ $dataSewa->nomor_hp }}</td>
                                                <td><a href="{{ asset('/img/gambarpoto/'. $dataSewa->gambar_paspoto) }}" class="btn btn-info"><i class="bi bi-eye"></a></td>
                                                <td><a href="{{ asset('/img/gambarktp/'. $dataSewa->gambar_ktp) }}" class="btn btn-info"><i class="bi bi-eye"></a></td>
                                                <td><a href="{{ asset('/img/gambarkk/'. $dataSewa->gambar_kk) }}" class="btn btn-info"><i class="bi bi-eye"></a></td>
                                                {{-- <td><img src="{{ URL::to('/') }}/img/gambarpoto/{{ $dataSewa->gambar_paspoto }}" alt="" width="90px" height="120px"></td> </td>
                                                <td><img src="{{ URL::to('/') }}/img/gambarktp/{{ $dataSewa->gambar_ktp }}" alt="" width="130px" height="90px"></td> </td>
                                                <td><img src="{{ URL::to('/') }}/img/gambarkk/{{ $dataSewa->gambar_kk }}" alt="" width="130px" height="90px"></td> </td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="table-hover d-flex justify-content-center" >
                                    {{ $datas->links() }}
                                </div>
                            </div>
                        </div>
                {{-- </div> --}}

    </section>

@endsection


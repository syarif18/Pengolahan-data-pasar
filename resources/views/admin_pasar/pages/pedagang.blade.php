@extends('layouts.amain')

@section('content')

    @include('admin_pasar.partials.header')
    @include('admin_pasar.partials.sidebar')

    <section>
        <div class="card">
            <div class="container mt-3">
                <center><h2>Data Pedagang</h2></center>



                      <h5 class="card-title">Informasi Data Pedagang</h5>

                      <!-- Table with hoverable rows -->
                      <table class="table table-hover">
                        <thead>
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
                            <th>SIP</th>
                            <th>SIU</th>
                        </tr>
                        </thead>
                        <tbody>
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

        </div>
    </section>

@endsection


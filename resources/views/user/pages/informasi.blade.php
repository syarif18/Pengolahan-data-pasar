@extends('layouts.main')

@section('content')

@include('user.partials.navbar')
@include('user.partials.sidebar')

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
                        <th scope="col">Sewa Lapak</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dataSewa)
                            <tr>
                                <td scope="col" style="text-align: center">{{ $loop->iteration }}</td>
                                <td>{{ $dataSewa->nama_pasar }}</td>
                                <td>Menunggu</td>
                                <td>
                                    <a href="{{ route('informasi.show', $dataSewa->id) }}" class="btn btn-info"><i class="bi bi-eye"></i></a>
                                    <a href="" class="btn btn-danger"><i class="bi bi-trash"></i></a>
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
  
                        <!-- Modal -->
                        {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Sewa Lapak {{ $dataSewa->nama_pasar }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <h5 class="card-title">Detail Data Penyewa Lepak</h5>

                                    <div class="row">
                                      <div class="col-lg-3 col-md-4 label ">Nama Pasar</div>
                                      <div class="col-lg-9 col-md-8">{{ $dataSewa->nama_pasar }}</div>
                                    </div>
                  
                                    <div class="row mt-3">
                                      <div class="col-lg-3 col-md-4 label">Company</div>
                                      <div class="col-lg-9 col-md-8">{{ $dataSewa->nik }}</div>
                                    </div>
                  
                                    <div class="row mt-3">
                                      <div class="col-lg-3 col-md-4 label">Job</div>
                                      <div class="col-lg-9 col-md-8">Web Designer</div>
                                    </div>
                  
                                    <div class="row mt-3">
                                      <div class="col-lg-3 col-md-4 label">Country</div>
                                      <div class="col-lg-9 col-md-8">USA</div>
                                    </div>
                  
                                    <div class="row mt-3">
                                      <div class="col-lg-3 col-md-4 label">Address</div>
                                      <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                                    </div>
                  
                                    <div class="row mt-3">
                                      <div class="col-lg-3 col-md-4 label">Phone</div>
                                      <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                                    </div>
                  
                                    <div class="row mt-3">
                                      <div class="col-lg-3 col-md-4 label">Email</div>
                                      <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            </div>
                        </div> --}}
        </div>
    </div>
</section>
    
@endsection
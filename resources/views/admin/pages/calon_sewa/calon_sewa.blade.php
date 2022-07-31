@extends('layouts.amain')

@section('content')

@include('admin.partials.header')
@include('admin.partials.sidebar')

<div>
    <div class="row">
        <div class="col-md-12 form-group ">
            <div class="row ">
                <div class="col-sm-4">
                    <form action="/calon_sewa" method="GET">
                        @csrf
                        @method('post')
                        <div class="input-group mb-3">
                            <input value="{{ !empty($search)?$search:'' }}" type="text" class="form-control" placeholder="Search..." name="search">
                            <button class="btn btn-outline-secondary" type="button"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                </div>
                {{-- <div class="col">
                    <form action="{{ route('exportpedagang') }}" class="d-inline" method="POST">
                        @method('post')
                        @csrf
                        <input type="hidden" name="nama_pasar" value="{{ $auth }}">
                        <input type="hidden" name="search" value="{{ !empty($search)?$search:'' }}">
                        <button type="submit" class="btn btn-success"><i class="bi bi-file-earmark-spreadsheet"> Cetak Excel</i></button>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>

    {{-- <a href="{{ route('exportpedagang') }}" class="btn btn-primary"> Export Excel </a> --}}
</div>

<section>
      <div class="container mt-3">

          <!-- Table with hoverable rows -->
          <table class="table table-hover">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Penyewa</th>
                      <th scope="col">Nama Pasar</th>
                      <th scope="col">Status</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody class="table-light">
                      @foreach ($data as $dataSewa)
                          <tr>
                              <td scope="col" style="text-align: center">{{ $loop->iteration }}</td>
                              <td>{{ $dataSewa->nama }}</td>
                              <td>{{ $dataSewa->nama_pasar }}</td>
                              <td>
                                {{-- kondisi button jika data sudah terisi --}}
                                @if ($dataSewa->status != '1')
                                    <button disabled = "disabled" class="btn btn-secondary">Selesai</button>
                                @else
                                    <form action="{{ route('calon_sewa.update', $dataSewa->id) }}" class="d-inline" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <input type="hidden" value="2" name="status">
                                        <button type="submit" class="btn btn-success"> <i class="bi bi-check-circle"></i> </button>
                                    </form>
                                    <form action="{{ route('calon_sewa.update', $dataSewa->id) }}" class="d-inline" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <input type="hidden" value="3" name="status">
                                        <button type="submit" class="btn btn-danger"> <i class="bi bi-dash-circle"></i> </button>
                                    </form>
                                @endif
                              </td>
                              <td>
                                  <a href="{{ route('calon_sewa.show', $dataSewa->id) }}" class="btn btn-info"><i class="bi bi-eye"></i></a>
                                  <form action="{{ route('informasi.destroy', $dataSewa->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Hapus Data?')">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                  </form>
                              </td>
                          </tr>
                      @endforeach
                  </tbody>
                </table>
                <div class="table-hover d-flex justify-content-center" >
                    {{ $data->links() }}
                </div>
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
</section>

@endsection

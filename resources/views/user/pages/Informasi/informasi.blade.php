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
                        <th scope="col">Status Persetujuan</th>
                        <th scope="col">Status Pembayaran</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dataSewa)
                            <tr>
                                <td scope="col" style="text-align: center">{{ $loop->iteration }}</td>
                                <td>{{ $dataSewa->nama_pasar }}</td>
                                <td>
                                  {{-- kondisi status apakah di setujui atau dotolak --}}
                                  @if ($dataSewa->status == '0')
                                    <button disabled = "disabled" class="btn btn-warning">Menunggu</i></button>
                                  @elseif ($dataSewa->status == '1')
                                    <button class="btn btn-success" disabled>Disetujui</i></button>
                                  @else
                                    <button disabled = "disabled" class="btn btn-danger">Ditolak</i></button>
                                  @endif
                                </td>
                                <td>
                                    @if ($dataSewa->status == '1')
                                    {{-- kondisi status apakah di setujui atau dotolak --}}
                                    @if ($dataSewa->status_pembayaran == '0')
                                      <button disabled = "disabled" class="btn btn-warning">Belum Upload</i></button>
                                    @elseif ($dataSewa->status_pembayaran == '1')
                                      <button disabled = "disabled" class="btn btn-primary" >proses Konfirmasi</i></button>
                                    @elseif ($dataSewa->status_pembayaran == '2')
                                      <button disabled = "disabled" class="btn btn-success">Disetujui</i></button>
                                    @endif

                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('informasi.show', $dataSewa->sewa_id) }}" class="btn btn-info"><i class="bi bi-eye"></i></a>
                                    @if ($dataSewa->status == '0')
                                      <form action="{{ route('informasi.destroy', $dataSewa->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Hapus Data?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                      </form>
                                    @elseif ($dataSewa->status == '2')
                                      <form action="{{ route('informasi.destroy', $dataSewa->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Hapus Data?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                      </form>
                                    @else
                                      <form action="{{ route('informasi.destroy', $dataSewa->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Hapus Data?')">
                                        @method('delete')
                                        @csrf
                                        <button disabled = "disabled" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                      </form>

                                      <a href="#" data-bs-toggle="modal" data-bs-target="#pembayaran{{ $dataSewa->id }}" class="btn btn-primary" title="Upload bukti Pembayaran"><i class="bi bi-upload"></i></a>
                                    @endif

                                    @endforeach
                                </td>
                            </tr>

                        </tbody>
                    </table>
                        <!-- End Table with hoverable rows -->
                        <!-- Button trigger modal -->

                            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Launch demo modal
                            </button> --}}



                            <!-- Modal -->
                            @foreach ($data as $dataSewa)
                                <div class="modal fade" id="pembayaran{{ $dataSewa->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('informasi.update', $dataSewa->sewa_id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <div class="col-md-12">
                                                    <label for="bukti_pembayaran" class="form-label">Bukti Pembayaran</label>
                                                    <input class="form-control" type="file" id="bukti_pembayaran" name="bukti_pembayaran" onchange="previewImagess()">
                                                    <img class="img-preview img-fluid mt-3 col-sm-5">
                                                </div>
                                                {{-- <form action="{{ route('sewa.updatebukti', $item->id)}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
                                                    <div class="row mb-3">
                                                        <label for="bukti_pembayaran" class="col-md-4 col-lg-3 col-form-label">Bukti Pembayaran</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <img src="{{ URL::to('/') }}/img/bukti_pembayaran/{{ $item->bukti_pembayaran }}" alt="" width="130px" height="130px" alt="Bukti">
                                                            <input type="hidden" class="form-control-file-mt3" name="old_image" value="{{ $item->bukti_pembayaran }}">
                                                            <input type="file" name="foto" class="btn btn-online-primary btn-sm">
                                                        </div>
                                                    </div>
                                                </form> --}}

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <div class="text-center">
                                                        <div class="form-group mt-2 ms-3">
                                                            <input type="hidden" value="1" name="status_pembayaran">
                                                            <button type="submit" class="btn btn-primary"> Kirim </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function previewImagess() {
            const image = document.querySelector('#bukti_pembayaran');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
</script>

@endsection

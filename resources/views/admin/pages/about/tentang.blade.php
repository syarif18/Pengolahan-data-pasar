@extends('layouts.amain')

@section('content')

@include('admin.partials.header')
@include('admin.partials.sidebar')


<section class="section profile">
    <div class="row">

        <div class="col-xl-12">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Tentang Kami</button>
                        </li>

                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">

                            <h5 class="card-title">Tentang Kami</h5>

                            {{-- @foreach ($data as $data) --}}
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Gambar</div>
                                <div class="col-lg-9 col-md-8"><img src="{{ URL::to('/') }}/img/logo/{{ $data->gambar }}" alt="" width="120px" height="100px"></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email Kantor</div>
                                <div class="col-lg-9 col-md-8">{{ $data->email }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Nomor Kantor</div>
                                <div class="col-lg-9 col-md-8">{{ $data->nomor_kantor }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Jam Kerja</div>
                                <div class="col-lg-9 col-md-8">{{ $data->jam_kerja }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Lokasi</div>
                                <div class="col-lg-9 col-md-8">{{ $data->lokasi }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Maps</div>
                                <div class="col-lg-9 col-md-8">
                                    <iframe src="{{ $data->link }}" width="50%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                  </div>

                  <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                    <!-- Profile Edit Form -->
                    <form action="{{ route('tentang.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                      <div class="row mb-3">
                        <label for="gambar" class="col-md-4 col-lg-3 col-form-label">Gambar</label>
                        <div class="col-md-8 col-lg-9">
                            <img src="{{ URL::to('/') }}/img/logo/{{ $data->gambar }}" alt="" width="120px" height="100px">
                            <input type="hidden" class="form-control-file-mt3" name="old_image" value="{{ $data->gambar }}">
                            <input type="file" name="gambar" class="btn btn-online-primary btn-sm">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Tentang Pasar Rakyat</label>
                        <div class="col-md-8 col-lg-9">
                          {{-- <input name="fullName" type="text" class="form-control" id="fullName" value="Kevin Anderson"> --}}
                          <input class="form-control" id="body" type="hidden" name="body" value="{{ old('body', $data->body) }}">
                            <trix-editor input="body" class="form-control"></trix-editor>
                            @error('body')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="email" class="col-md-4 col-lg-3 col-form-label">Email Kantor</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="email" type="text" class="form-control" id="email" value="{{ old('email', $data->email) }}">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="nomor_kantor" class="col-md-4 col-lg-3 col-form-label">Nomor Kantor</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="nomor_kantor" type="text" class="form-control" id="nomor_kantor" value="{{ old('nomor_kantor', $data->nomor_kantor) }}">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="jam_kerja" class="col-md-4 col-lg-3 col-form-label">Jam Kerja</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="jam_kerja" type="text" class="form-control" id="jam_kerja" value="{{ old('jam_kerja', $data->jam_kerja) }}">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="lokasi" class="col-md-4 col-lg-3 col-form-label">Lokasi Kantor</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="lokasi" type="text" class="form-control" id="lokasi" value="{{ old('lokasi', $data->lokasi) }}">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="link" class="col-md-4 col-lg-3 col-form-label">Link Google Maps</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="link" type="text" class="form-control" id="link" value="{{ old('link', $data->link) }}">
                        </div>
                      </div>

                      <div class="text-center">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form><!-- End Profile Edit Form -->
                    {{-- @endforeach --}}

                  </div>

                </div><!-- End Bordered Tabs -->

              </div>
            </div>

          </div>
        </div>
</section>

@endsection

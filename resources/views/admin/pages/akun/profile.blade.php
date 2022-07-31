@extends('layouts.amain')

@section('content')

@include('admin.partials.header')
@include('admin.partials.sidebar')
@include('sweetalert::alert')


    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                @if( auth()->user()->foto )
              {{-- <img src="{{ URL::to('/') }}/img/profile/{{ auth()->user()->foto }}" alt="" width="40px" height="40px" alt="Profile" alt="Profile" class="rounded-circle"> --}}
              <img src="{{ URL::to('/') }}/img/profile/{{ $user->foto }}" width="120px" height="120px" alt="Profile" alt="Profile" class="rounded-circle">
                @else
              <img src="{{ asset('admin2_dashboard') }}/assets/img/user-2.png" alt="Profile" class="rounded-circle">
              @endif
              <h2>{{ $user->nama }}</h2>
              <h3>{{ auth()->user()->level }}</h3>
            </div>
          </div>
        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Status</h5>
                  {{-- <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p> --}}

                  <h5 class="card-title">Detail Profil</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                    <div class="col-lg-9 col-md-8">{{ $user->nama }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Jabatan</div>
                    <div class="col-lg-9 col-md-8">{{ $user->jabatan }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">NIP</div>
                    <div class="col-lg-9 col-md-8">{{ $user->nip }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Username</div>
                    <div class="col-lg-9 col-md-8">{{ $user->username }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                    <div class="col-lg-9 col-md-8">{{ $user->tgl_lahir }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                    <div class="col-lg-9 col-md-8">{{ $user->j_kelamin }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                    <div class="col-lg-9 col-md-8">{{ $user->almt }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nomor Handphone</div>
                    <div class="col-lg-9 col-md-8">{{ $user->no_hp }}</div>
                  </div>

                </div>



                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="{{ route('profil.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row mb-3">
                      <label for="foto" class="col-md-4 col-lg-3 col-form-label">Gambar Profil</label>
                      <div class="col-md-8 col-lg-9">
                        @if( auth()->user()->foto )
                        <img src="{{ URL::to('/') }}/img/profile/{{ $user->foto }}" alt="" width="120px" height="120px" alt="Profile">
                            @else
                        <img src="{{ asset('admin2_dashboard') }}/assets/img/user-2.png" alt="Profile" class="rounded-circle">
                        @endif
                        <input type="hidden" class="form-control-file-mt3" name="old_image" value="{{ $user->foto }}">
                        <input type="file" name="foto" class="btn btn-online-primary btn-sm">
                        {{-- <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div> --}}
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="nama" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nama" type="text" class="form-control" id="nama" value="{{ old('nama', $user->nama) }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                        <label for="jabatan" class="col-md-4 col-lg-3 col-form-label">Jabatan</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="jabatan" type="text" class="form-control" id="jabatan" value="{{ old('jabatan', $user->jabatan) }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nip" class="col-md-4 col-lg-3 col-form-label">NIP</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="nip" type="text" class="form-control" id="nip" value="{{ old('nip', $user->nip) }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                      <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="username" type="text" class="form-control" id="username" value="{{ old('username', $user->username) }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="tgl_lahir" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="tgl_lahir" type="date" class="form-control" id="tgl_lahir" value="{{ old('tgl_lahir', $user->tgl_lahir) }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                        <label for="j_kelamin" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="j_kelamin" type="text" class="form-control" id="j_kelamin" value="{{ old('j_kelamin', $user->j_kelamin) }}">
                        </div>
                      </div>

                    <div class="row mb-3">
                      <label for="almt" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="almt" type="text" class="form-control" id="almt" value="{{ old('almt', $user->almt) }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="no_hp" class="col-md-4 col-lg-3 col-form-label">Nomor Handphone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="no_hp" type="text" class="form-control" id="no_hp" value="{{ old('no_hp', $user->no_hp) }}">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

@endsection

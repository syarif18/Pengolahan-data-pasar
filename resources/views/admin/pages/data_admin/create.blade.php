@extends('layouts.amain')

@section('content')

@include('admin.partials.header')
@include('admin.partials.sidebar')

<section>
    <div class="card bg">
        <div class="container mt-3">
            <center><h2>Data Admin</h2></center>
            <div class="card">
                <div class="card-body mt-3">
                    <form class="row g-3" action="{{ route('data_admin.store') }}" method="POST">
                        @csrf
                        <div class="col-md-6">
                            <label for="nama_pasar" class="form-label">Nama Pasar *</label>
                            <select aria-label="Default select example" id="name" name="nama_pasar" required class="form-select @error('nama_pasar')
                            is-invalid
                            @enderror" placeholder="nama_pasar" required value="{{ old('nama_pasar') }}">
                                <option value="" hidden selected disabled>Nama Pasar</option>
                                @foreach ($pasar as $item)
                                    <option value="{{ $item->nama_pasar }}">{{ $item->nama_pasar }}</option>
                                @endforeach
                            </select>
                            @error('nama_pasar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="level" class="form-label">level *</label>
                            <select class="form-select @error('level')
                            is-invalid
                            @enderror" id="level" name="level" value="{{ old('level') }} " required>
                                <option value="" hidden selected disabled>pilih pengelola</option>
                                {{-- <option value="admin">Admin</option> --}}
                                <option value="pengelola">Pengelola</option>
                            </select>
                            @error('level')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="username" class="form-label">Username *</label>
                            <input type="text" id="username" name="username" class="form-control @error('username')
                            is-invalid
                            @enderror" placeholder="username" required value="{{ old('username') }}" >
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password *</label>
                            <input type="password" id="password" name="password" class="form-control @error('password')
                                is-invalid
                                @enderror"  placeholder="Password min 5-20" required>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add Admin</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

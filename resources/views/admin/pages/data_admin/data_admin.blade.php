@extends('layouts.amain')

@section('content')

@include('admin.partials.header')
@include('admin.partials.sidebar')

@if(session()->has('success'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div>
    <a href="{{ 'data_admin/create' }}" class="btn btn-primary"> + Sewa Lapak </a>
</div>

<section>
    <div class="card bg mt-3">
        <div class="container mt-3">
            <center><h2>Data Admin</h2></center>
            <div class="card">
                <div class="card-body mt-3">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Level</th>
                            <th scope="col">Email</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $dataAdmin)
                                <tr>
                                    <td scope="col">{{ $loop->iteration }}</td>
                                    <td>{{ $dataAdmin->name }}</td>
                                    <td>{{ $dataAdmin->level }}</td>
                                    <td>{{ $dataAdmin->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@extends('layouts.amain')

@section('content')

@include('admin.partials.header')
@include('admin.partials.sidebar')

    <div class="container">
        {{-- @method('get') --}}
        <div class="row mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $konten->judul }}</h1>

                <a href="{{ url('konten') }}" class="btn btn-success"><i class="bi bi-arrow-left"></i>Kembali</a>
                <a href="{{ route('konten.edit', $konten->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>
                <form action="{{ route('konten.destroy', $konten->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin Hapus konten?')">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger"><i class="bi bi-trash">Hapus</i></button>
                        </form>
                {{-- <a href="" class="btn btn-danger"><i class="bi bi-trash"></i>Kembali</a> --}}

                <div class="" style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/'. $konten->gambar) }}" alt="" class="img-fluid mt-3">
                </div>

                {{-- @if ($data->gambar)
                    <img src="{{ asset('storage/'. $data->gambar) alt="">
                @else
                    <img src="{{ asset('landing_page') }}/assets/img/pasar_rakyat.png" alt="">
                @endif --}}

                <article class="my-3 fs-5">
                    {!! $konten->body !!}
                </article>

            </div>
        </div>
    </div>

@endsection




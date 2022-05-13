@extends('layouts.main')

@section('content')

@include('user.partials.navbar')
@include('user.partials.sidebar')

<div>
    <a href="{{ 'sewa/create' }}" class="btn btn-primary"> + Sewa Lapak </a>
</div>
    
@endsection
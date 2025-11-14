@extends('layouts.app')
@section('content')
<h3>Tambah Barang</h3>

<form method="POST" action="{{ route('barang.store') }}">
    @csrf
    @include('barang.form')
    <button class="btn btn-primary">Simpan</button>
</form>
@endsection

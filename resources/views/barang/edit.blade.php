@extends('layouts.app')
@section('content')
<h3>Edit Barang</h3>

<form method="POST" action="{{ route('barang.update',$barang) }}">
    @csrf @method('PUT')
    @include('barang.form')
    <button class="btn btn-primary">Update</button>
</form>
@endsection

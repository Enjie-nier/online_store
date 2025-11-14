@extends('layouts.app')

@section('content')
<div class="card card-plain p-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">{{ $barang->nama_barang }}</h4>
    <div>
      <a href="{{ route('barang.edit', $barang) }}" class="btn btn-warning btn-sm me-2"><i class="fa-solid fa-pen"></i> Edit</a>
      <a href="{{ route('barang.index') }}" class="btn btn-outline-secondary btn-sm">Kembali</a>
    </div>
  </div>

  <div class="row g-3">
    <div class="col-md-8">
      <div class="mb-3">
        <strong>Kode:</strong> {{ $barang->kode_barang }}
      </div>
      <div class="mb-3">
        <strong>Jenis:</strong> <span class="badge bg-light text-dark">{{ $barang->jenis_barang }}</span>
      </div>
      <div class="mb-3">
        <strong>Harga:</strong> Rp {{ number_format($barang->harga_barang,0,',','.') }}
      </div>
      <div class="mb-3">
        <strong>Stok:</strong> {{ $barang->stok_barang }}
      </div>
      <div class="mb-3">
        <strong>Keterangan:</strong>
        <p class="mt-2">{{ $barang->keterangan ?? '-' }}</p>
      </div>
    </div>
  </div>
</div>
@endsection

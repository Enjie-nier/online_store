@extends('layouts.app')

@section('content')
<div class="card card-plain p-4 mb-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Data Barang</h4>
    <small class="text-muted">Total: <strong>{{ $barang->total() }}</strong></small>
  </div>

  <div class="row mb-3 gy-2 align-items-center">
    <div class="col-md-8">
      <form method="GET" class="d-flex">
        <div class="input-group w-100">
          <span class="input-group-text bg-white"><i class="fa-solid fa-magnifying-glass"></i></span>
          <input type="text" name="q" value="{{ request('q') }}" class="form-control search-input" placeholder="Cari nama / kode / jenis barang..." />
          <button class="btn btn-outline-secondary">Cari</button>
          <a href="{{ route('barang.index') }}" class="btn btn-outline-light border">Reset</a>
        </div>
      </form>
    </div>

    <div class="col-md-4 text-md-end">
      <a href="{{ route('barang.create') }}" class="btn btn-primary btn-icon">
        <i class="fa-solid fa-plus"></i> Tambah Barang
      </a>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-hover align-middle">
      <thead>
        <tr class="text-muted small">
          <th>#</th>
          <th>Kode</th>
          <th>Nama</th>
          <th>Jenis</th>
          <th class="text-end">Harga</th>
          <th class="text-center">Stok</th>
          <th class="text-end">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse($barang as $b)
        <tr>
          <td style="width:60px">{{ $b->id }}</td>
          <td style="width:140px"><strong>{{ $b->kode_barang }}</strong></td>
          <td>{{ $b->nama_barang }}</td>
          <td style="width:140px">
            <span class="badge bg-light text-dark badge-jenis">
              {{ $b->jenis_barang }}
            </span>
          </td>
          <td class="text-end">Rp {{ number_format($b->harga_barang, 0, ',', '.') }}</td>
          <td class="text-center">{{ $b->stok_barang }}</td>
          <td class="text-end" style="width:180px">
            <a href="{{ route('barang.show', $b) }}" class="btn btn-sm btn-info text-white me-1">
              <i class="fa-solid fa-eye"></i>
            </a>
            <a href="{{ route('barang.edit', $b) }}" class="btn btn-sm btn-warning text-white me-1">
              <i class="fa-solid fa-pen"></i> Edit
            </a>

            <form action="{{ route('barang.destroy', $b) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus barang ini?');">
              @csrf @method('DELETE')
              <button class="btn btn-sm btn-danger">
                <i class="fa-solid fa-trash"></i> Hapus
              </button>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="7" class="text-center py-5 text-muted">Tidak ada barang ditemukan.</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <div class="d-flex justify-content-between align-items-center mt-3">
    <div class="text-muted small">Menampilkan {{ $barang->firstItem() ?: 0 }} - {{ $barang->lastItem() ?: 0 }} dari {{ $barang->total() }} item</div>
    <div>
      {{ $barang->links() }}
    </div>
  </div>
</div>
@endsection

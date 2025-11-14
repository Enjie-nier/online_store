<div class="mb-3">
    <label>Kode Barang</label>
    <input name="kode_barang" value="{{ old('kode_barang',$barang->kode_barang ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Nama Barang</label>
    <input name="nama_barang" value="{{ old('nama_barang',$barang->nama_barang ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Jenis Barang</label>
    <input name="jenis_barang" value="{{ old('jenis_barang',$barang->jenis_barang ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Harga Barang</label>
    <input name="harga_barang" value="{{ old('harga_barang',$barang->harga_barang ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Stok Barang</label>
    <input name="stok_barang" value="{{ old('stok_barang',$barang->stok_barang ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Keterangan</label>
    <textarea name="keterangan" class="form-control">{{ old('keterangan',$barang->keterangan ?? '') }}</textarea>
</div>

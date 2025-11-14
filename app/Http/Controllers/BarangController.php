<?php
namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->query('q');
        $barang = Barang::query();

        if ($q) {
            $barang->where('nama_barang','like',"%{$q}%")
                   ->orWhere('kode_barang','like',"%{$q}%")
                   ->orWhere('jenis_barang','like',"%{$q}%");
        }

        $barang = $barang->orderBy('id','asc')->paginate(10)->withQueryString();
        return view('barang.index', compact('barang','q'));
    }

    public function create() { return view('barang.create'); }

    public function store(Request $request)
    {
        $data = $request->validate([
            'kode_barang'=>'required',
            'nama_barang'=>'required',
            'jenis_barang'=>'required',
            'harga_barang'=>'required|numeric',
            'stok_barang'=>'required|integer',
            'keterangan'=>'nullable'
        ]);
        Barang::create($data);
        return redirect()->route('barang.index')->with('success','Barang berhasil ditambahkan');
    }

    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang)
    {
        $data = $request->validate([
            'kode_barang'=>'required',
            'nama_barang'=>'required',
            'jenis_barang'=>'required',
            'harga_barang'=>'required|numeric',
            'stok_barang'=>'required|integer',
            'keterangan'=>'nullable'
        ]);
        $barang->update($data);
        return redirect()->route('barang.index')->with('success','Barang berhasil diperbarui');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')->with('success','Barang dihapus');
    }

    public function show(\App\Models\Barang $barang)
    {
    return view('barang.show', compact('barang'));
    }

}

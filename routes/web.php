<?php
use App\Http\Controllers\BarangController;

Route::get('/', fn()=> redirect()->route('barang.index'));
Route::resource('barang', BarangController::class);

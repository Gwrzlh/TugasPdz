<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->name('products.index');

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/test-db', function () {
//     try {
//         DB::connection()->getPdo();
//         return 'Koneksi ke MySQL berhasil!';
//     } catch (\Exception $e) {
//         return 'Gagal terkoneksi: ' . $e->getMessage();
//     }
// });
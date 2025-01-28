<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiswaConrtoller;

// Route::get('/', [ProductController::class, 'index'])->name('products.index');

// Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');

//route controller
// route::get('/product/{id}',[App\Http\Controllers\ProductController::class, 'show']);

// route::get('/user/{nama}',function ($nama): string {
//     return 'Hello, '. $nama;
// })->name('dashboard'); 

// route::get('/dashboard',function (): string {
//     return 'this is the dashboard';
// }); 

Route::get('/', function () {
    return view('welcome');
})->name('welcome');    

// Route::get('/rpl', function () {
//     return view('jurusan.rpl');
// })->name('rpl');
// Route::get('/tkj', function () {
//     return view('jurusan.tjk');
// })->name('tkj');
// Route::get('/tl', function () {
//     return view('jurusan.tl');
// })->name('tl');
// Route::get('/kl', function () {
//     return view('jurusan.kl');
// })->name('kl');
// Route::get('/dkv', function () {
//     return view('jurusan.dkv');
// })->name('dkv');
// Route::get('/otkp', function () {
//     return view('jurusan.otkp');
// })->name('otkp');
// Route::get('/bdp', function () {
//     return view('jurusan.bdp');
// })->name('bdp');
// Route::get('/tm', function () {
//     return view('jurusan.tm');
// })->name('tm');
// Route::get('/tbsm', function () {
//     return view('jurusan.tsm');
// })->name('tbsm');
// Route::get('/tl', function () {
//     return view('jurusan.tl');
// })->name('tl');
// Route::get('/akl', function () {
//     return view('jurusan.akl');
// })->name('akl');
// Route::get('/test-db', function () {
//     try {
//         DB::connection()->getPdo();
//         return 'Koneksi ke MySQL berhasil!';
//     } catch (\Exception $e) {
//         return 'Gagal terkoneksi: ' . $e->getMessage();
//     }
// });
Route::get('/siswa', [SiswaConrtoller::class, 'index']);
<?php

use App\Http\Controllers\BelajarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\penggunaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/ ', function () {
    return view('welcome');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});

route::get('/halaman-satu',[ BelajarController::class,'tampilHalamanSatu' ]);

route::get('/halaman-dua',[ BelajarController::class,'tampilHalamanDua' ]);

route::get('/halaman-tiga',[ BelajarController::class,'tampilHalamanTiga' ]);

route::get('/halaman-empat',[ BelajarController::class,'tampilHalamanEmpat' ]);

route::get('/halaman-lima',[ BelajarController::class,'tampilHalamanLima' ]);

route::get('/login',[ loginController::class,'login' ]);

route::get('/register',[ registerController::class,'register' ]);

route::get('/DataPengguna',[ PenggunaController::class,'tampilHalamanDatapengguna' ]);

route::get('/inputdata',[ PenggunaController::class,'tampilHalamanInputdata' ]);

route::get('/editdata/{id}',[ PenggunaController::class,'editPengguna' ]);

route::get('/hapusdata',[ PenggunaController::class,'tampilHalamanHapusdata' ]);

route::post('/simpan-pengguna',[ PenggunaController::class,'simpanPengguna' ]);

route::post('/simpan-perubahan/{id}',[ PenggunaController::class,'simpanPerubahan' ]);

route::get('/hapus-pengguna/{id}',[ PenggunaController::class,'hapusPengguna' ]);

route::get('/Kategori',[ PenggunaController::class,'tampilHalamanKategori' ]);

route::get('/tambah-kategori',[ PenggunaController::class,'tambahKategori' ]);

route::post('/simpan-kategori',[ PenggunaController::class,'simpanKategori' ]);

route::get('/edit-kategori/{id}',[ PenggunaController::class,'editKategori' ]);

route::get('/hapus-kategori/{id}',[ PenggunaController::class,'HapusKategori' ]);

route::post('/simpan-perubahan/{id}',[ PenggunaController::class,'perubahanKategori' ]);

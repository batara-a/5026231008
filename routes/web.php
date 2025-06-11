<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\MejaDBController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('billieeilish', function () {
    return view('billieeilish');
});

Route::get('bootstrap1', function () {
    return view('bootstrap1');
});

Route::get('bootstrap2', function () {
    return view('bootstrap2');
});

Route::get('frontend', function () {
    return view('frontend');
});

Route::get('index', function () {
    return view('index');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('kode1', function () {
    return view('kode1');

});
Route::get('pertama', function () {
    return view('pertama');
});

Route::get('hello',[coba::class,'helloworld']);
//Route::get('hello','App\Http\Controllers\Coba@helloworld')

Route::get('dosen',[coba::class,'index']);

//Route::get('/pegawai/{nama}',[PegawaiController::class,'index']);


Route::get('/formulir', [PegawaiController::class, 'formulir']); //halaman isi formulir
Route::post('/formulir/proses', [PegawaiController::class, 'proses']); //action form


// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index1']);


Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);

Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);

Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);

Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);

Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

Route::get('/input', [PegawaiDBController::class, 'input']);

Route::post('/proses', [PegawaiDBController::class, 'proses']);



//route CRUD Meja
Route::get('/meja', [MejaDBController::class, 'index']);
Route::get('/meja/tambah', [MejaDBController::class, 'tambah']);
Route::post('/meja/store', [MejaDBController::class, 'store']);
Route::get('/meja/edit/{id}', [MejaDBController::class, 'edit']);
Route::post('/meja/update', [MejaDBController::class, 'update']);
Route::get('/meja/hapus/{id}', [MejaDBController::class, 'hapus']);
Route::get('/meja/cari', [MejaDBController::class, 'cari']);


route::get('/karyawanuas', [App\Http\Controllers\KaryawanDBController::class, 'index'])->name('karyawanuas.index');
route::get('/karyawanuas/tambah', [App\Http\Controllers\KaryawanDBController::class, 'tambah'])->name('karyawanuas.tambah');
route::post('/karyawanuas/store', [App\Http\Controllers\KaryawanDBController::class, 'store'])->name('karyawanuas.store');
route::get('/karyawanuas/hapus/{karyawan}', [App\Http\Controllers\KaryawanDBController::class, 'hapus'])->name('karyawanuas.hapus');
route::get('/karyawanuas/cari', [App\Http\Controllers\KaryawanDBController::class, 'cari'])->name('karyawanuas.cari');


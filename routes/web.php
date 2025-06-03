<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;

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

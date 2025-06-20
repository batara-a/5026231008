<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EasDBController extends Controller
{
    // Method untuk menampilkan halaman utama EAS
    public function index()
    {
        // Mengambil seluruh data dari tabel 'nilai'
        $nilai = DB::table('nilai')->get();

        // Mengirim data ke view 'eas.index'
        return view('eas.index', ['nilai' => $nilai]);
    }

    // Method untuk menampilkan halaman tambah data
    public function tambah()
    {
        // Memanggil view tambah
        return view('eas.tambah');
    }

    // Method untuk menyimpan data baru
    public function store(Request $request)
    {
        // Insert data ke tabel 'nilai'
        DB::table('nilai')->insert([
            'normorinduksiswa' => $request->normorinduksiswa,
            'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks
        ]);

        // Redirect kembali ke halaman utama setelah berhasil menyimpan
        return redirect('/eas');
    }
}

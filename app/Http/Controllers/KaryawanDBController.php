<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KaryawanDBController extends Controller
{
    public function index()
    {
        $karyawanuas = DB::table('karyawan')->paginate(10); // Menampilkan 10 data per halaman
        return view('karyawanuas.index', compact('karyawanuas'));
    }

    public function tambah()
    {
        return view('karyawanuas.tambah');
    }

    public function store(Request $request)
    {
        DB::table('karyawan')->insert([
        'kodepegawai' => $request->kodepegawai,
		'namalengkap' => $request->namalengkap,
		'divisi' => $request->divisi,
        'departemen' => $request->departemen,
	]);
        return redirect('/karyawanuas')
                         ->with('success', 'Data karyawan berhasil ditambahkan.');
    }

    public function hapus($id)
    {
	// menghapus data karyawan berdasarkan id yang dipilih
	DB::table('karyawan')->where('kodepegawai',$id)->delete();

	// alihkan halaman ke halaman karyawan
	return redirect('/karyawanuas');

    }

     public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$karyawan = DB::table('karyawan')
		->where('namalengkap','like',"%".$cari."%")
		->paginate(5);

    		// mengirim data pegawai ke view index
		return view('karyawanuas.index',['karyawanuas' => $karyawan]);
	}
}

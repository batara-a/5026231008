<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KaryawanDBController extends Controller
{
    public function index()
    {
        $karyawanuas = DB::table('karyawan')->latest()->paginate(10); // Menampilkan 10 data per halaman
        return view('karyawanuas.index', compact('karyawanuas'));
    }

    public function tambah()
    {
        return view('karyawanuas.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|string|size:5|unique:karyawan,kodepegawai',
            'namalengkap' => 'required|string|max:50',
            'divisi'      => 'required|string|size:5',
            'departemen'  => 'required|string|max:10',
        ]);


        return redirect()->route('karyawanuas.index')
                         ->with('success', 'Data karyawan berhasil ditambahkan.');
    }

    public function hapus($id)
    {
	// menghapus data karyawan berdasarkan id yang dipilih
	DB::table('karyawan')->where('kodepegawai',$id)->delete();

	// alihkan halaman ke halaman karyawan
	return redirect()->route('karyawanuas.index');
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

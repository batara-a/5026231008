<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MejaDBController extends Controller
{
    public function index()
    {
        $meja = DB::table('meja')->paginate(5);
        return view('meja.index', ['meja' => $meja]);
    }

    public function tambah()
    {
        return view('meja.tambah');
    }

    public function store(Request $request)
    {
        DB::table('meja')->insert([
            'merkmeja'   => $request->merkmeja,
            'hargameja'  => $request->hargameja,
            'tersedia'   => $request->tersedia,
            'berat'      => $request->berat
        ]);
        return redirect('/meja');
    }

    public function edit($ID)
    {
        $meja = DB::table('meja')->where('ID', $ID)->first();
        return view('meja.edit', ['meja' => $meja]);
    }

    public function update(Request $request)
    {
        DB::table('meja')->where('ID', $request->ID)->update([
            'merkmeja'   => $request->merkmeja,
            'hargameja'  => $request->hargameja,
            'tersedia'   => $request->tersedia,
            'berat'      => $request->berat
        ]);
        return redirect('/meja');
    }

    public function hapus($ID)
    {
        DB::table('meja')->where('ID', $ID)->delete();
        return redirect('/meja');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$meja = DB::table('meja')
		->where('merkmeja','like',"%".$cari."%")
		->paginate(5);

    		// mengirim data pegawai ke view index
		return view('meja.index',['meja' => $meja]);
	}
}

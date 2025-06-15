<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangDBController extends Controller
{
    	public function index()
	{
    	        // mengambil data dari table keranjangbelanja
		$keranjangbelanja = DB::table('keranjangbelanja')->paginate(10);

    	        // mengirim data keranjangbelanja ke view index
		return view('keranjang.index',['keranjangbelanja' => $keranjangbelanja]);

	}

    public function beli()
    {

	// memanggil view beli
	 return view('keranjang.beli');

    }


    // method untuk insert data ke keranjangbelanja
    public function store(Request $request)
    {
	// insert data ke table keranjangbelanja
	DB::table('keranjangbelanja')->insert([
        'KodeBarang' => $request->KodeBarang,
		'Jumlah' => $request->Jumlah,
		'Harga' => $request->Harga
	]);
	// alihkan halaman ke halaman keranjangbelanja
	return redirect('/keranjang');

    }

    // method untuk hapus data keranjangbelanja
public function batal($ID)
{
	// menghapus data barang berdasarkan id yang dipilih
	DB::table('keranjangbelanja')->where('ID',$ID)->delete();

	// alihkan halaman ke halaman keranjangbelanja
	return redirect('/keranjang');
}


}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CounterDBController extends Controller
{
    public function index(){
        $counter = DB::table('pagecounter')->where('ID', 1)->first();
        $jumlahpengunjung = 0;
        if ($counter) {
            $newjumlah = $counter->Jumlah + 1;
            DB::table('pagecounter')->where('ID', 1)->update(['jumlah' => $newjumlah]);
            $jumlahpengunjung = $newjumlah;
        }

        return view('counter/index', ['jumlah' => $jumlahpengunjung]);
    }

    public function read(){
        return $this->index();
    }
}

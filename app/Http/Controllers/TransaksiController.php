<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use DB;

class TransaksiController extends Controller
{
    public function index(){
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    public function filter_data(Request $request){
        $transaksi = DB::table('transaksi')
                    ->whereBetween('tanggal', [$request->start_date, $request->end_date])
                    ->get();
        // dd($transaksi);
        return view('transaksi.index', compact('transaksi'));
    }
}
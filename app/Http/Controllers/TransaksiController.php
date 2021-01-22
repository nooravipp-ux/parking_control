<?php

namespace App\Http\Controllers;
use App\Exports\TransaksiExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use DB;

class TransaksiController extends Controller
{
    public function index(){
        $transaksi = DB::table('transaksi')->orderBy('tanggal','asc')->get();
        return view('transaksi.index', compact('transaksi'));
    }

    public function filter_data(Request $request){
        $transaksi = DB::table('transaksi')
                    ->whereBetween('tanggal', [$request->start_date, $request->end_date])
                    ->orderBy('tanggal','asc')
                    ->get();
        return view('transaksi.index', compact('transaksi'));
    }

    public function export_excel(){
		return Excel::download(new TransaksiExport, 'transaksi.xlsx');
	}
}
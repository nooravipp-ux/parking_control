<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Transaksi;
use App\Models\Member;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function gate_in(Request $request){
        if($this->cek_member($request->id_member)){
            $data_member = DB::table('members')->where('id_member',$request->id_member)->first();
            $data_transaksi = new Transaksi;
            $data_transaksi->id_member = $data_member->id_member;
            $data_transaksi->no_kendaraan = $data_member->no_kendaraan;
            $data_transaksi->jenis_kendaraan = $data_member->jenis_kendaraan;
            $data_transaksi->tanggal = date("Y/m/d h:i:s");
            $data_transaksi->status = "IN";
            $data_transaksi->save();

            return back()->with('success', 'Gerbang Terbuka !!!');
        }else{
            return back()->with('error', 'ID Tidak Terdaftar Pada sistem harap hub operator!');
        }
    }

    public function gate_out(Request $request){
        if($this->cek_member($request->id_member)){
            $data_member = DB::table('members')->where('id_member',$request->id_member)->first();
            $data_transaksi = new Transaksi;
            $data_transaksi->id_member = $data_member->id_member;
            $data_transaksi->no_kendaraan = $data_member->no_kendaraan;
            $data_transaksi->jenis_kendaraan = $data_member->jenis_kendaraan;
            $data_transaksi->tanggal = date("Y/m/d h:i:s");
            $data_transaksi->status = "OUT";
            $data_transaksi->save();

            return back()->with('success', 'Gerbang Terbuka !!!');
        }else{
            return back()->with('error', 'ID Tidak Terdaftar Pada sistem harap hub operator!');
        }
    }   

    public function cek_member($id_member){
        $cek_member = DB::table('members')
                    ->where('id_member', $id_member)
                    ->first();
        if($cek_member != NULL){
            return true;
        }else{
            return false;
        }
    }
}

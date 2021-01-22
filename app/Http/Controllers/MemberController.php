<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index(){
        $members = Member::all();
        return view('member.index', compact('members'));
    }

    public function save(Request $request){
        // dd($request->all());
        $request->validate([
            'id_member'=>'required',
            'nama_pemilik'=>'required',
            'no_kendaraan'=>'required',
            'jenis_kendaraan'=>'required'
        ]);

        $member = new Member([
            'id_member' => $request->get('id_member'),
            'nama_pemilik' => $request->get('nama_pemilik'),
            'no_kendaraan' => $request->get('no_kendaraan'),
            'jenis_kendaraan' => $request->get('jenis_kendaraan')
        ]);
        $member->save();
        return redirect('/members')->with('success', 'Member saved!');
    }
}

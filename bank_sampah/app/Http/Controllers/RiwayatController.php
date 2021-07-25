<?php

namespace App\Http\Controllers;


//use App\Http\Controllers\Controller;
use App\Models\detail_jual;
use App\Models\jual_sampah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB,
    App\Http\Controllers\Controller;

class RiwayatController extends Controller
{
    public function riwayat(Request $request)
    {
        $no = 1;
        $id = $request->user()->id;
        $riwayat = DB::table('jual_sampahs')->where('id_user', $id)->get();
        return view('user.riwayat', [
            "riwayat" => $riwayat,
            "no" => $no
        ]);
    }


    
    
    public function detail(jual_sampah $detail){
       $no = 1;
        $tgl = $detail->tgl_jual;
        $detail_jual = DB::table('detail_juals')
        ->join('jual_sampahs', 'detail_juals.id_jual', '=', 'jual_sampahs.id_jual')
        ->join('sampah', 'detail_juals.id_sampah', '=', 'sampah.id_sampah')
        ->where('tgl_jual', $tgl)
        ->select( '*' )
        ->get();
        $pegawai = DB::table('jual_sampahs')
        ->join('pegawai', 'jual_sampahs.id_pegawai', '=', 'pegawai.id_pegawai')
        ->where('tgl_jual', $tgl)
        ->select (' * ')
        ->get();

        // return view('user.detail', compact('detail_jual'));
        return view('user.detail', 
        [
            "tgl_jual" => $detail,
            "detail" => $detail_jual,
            "pegawai" => $pegawai,
            "no" => $no
        ]
    );
    }
}


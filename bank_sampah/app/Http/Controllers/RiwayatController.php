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
        $id = $request->user()->id;
        $riwayat = DB::table('jual_sampahs')->where('id_user', $id)->get();
        return view('user.riwayat', compact('riwayat'));
    }


    
    
    public function detail(jual_sampah $detail){
        $detail_jual = DB::table('jual_sampahs')
        ->join('detail_juals', 'jual_sampahs.id_jual', '=', 'detail_juals.id_jual')
        ->join('pegawai', 'jual_sampahs.id_pegawai', '=', 'pegawai.id_pegawai')
        ->select( '*' )
        ->get();

        // return view('user.detail', compact('detail_jual'));
        return view('user.detail', 
        [
            "tgl_jual" => $detail,
            "detail" => $detail_jual
        ]
    );
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB,
    App\Http\Controllers\Controller;

class RiwayatController extends Controller
{
    public function index() {
        $riwayat = DB::table('jual_sampahs')->get();
    return view('riwayat');
    }
    
}


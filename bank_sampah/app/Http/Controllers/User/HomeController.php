<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB,
    App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function login()
    {
        return view('user.login');
    }
    public function register()
    {
        return view('user.register');
    }
    public function profile()
    {
        return view('user.profile');
    }
    public function produk()
    {
        return view('user.produk');
    }
    public function riwayat(Request $request)
    {
        $id = $request->user()->id;
        $riwayat = DB::table('jual_sampahs')->where('id_user', $id)->get();
        return view('user.riwayat', compact('riwayat'));
    }
}

<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
use App\Models\detail_jual;
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
    public function profile(Request $request)
    {
        $id = $request->user()->id;
        $profile = DB::table('user')->where('id', $id)->get();
        return view('user.profileuser', compact('profile'));
    }
    public function produk()
    {
        return view('user.produk');
    }
    public function profileuser()
    {
        return view('user.profileuser');
    }
    public function loginadmin()
    {
        return view('auth.loginadmin');
    }
   
}

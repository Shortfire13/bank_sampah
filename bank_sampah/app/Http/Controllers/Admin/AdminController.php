<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.Templates.home');
    }
    public function tambahpegawai()
    {
        return view('admin.tambahpegawai');
    }
    public function tambahadmin()
    {
        return view('admin.tambahadmin');
    }
    public function listadmin()
    {
        return view('admin.listadmin');
    }
    public function listpegawai()
    {
        return view('admin.listpegawai');
    }
}

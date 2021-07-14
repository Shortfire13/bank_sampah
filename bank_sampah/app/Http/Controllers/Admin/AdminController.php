<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.Templates.home');
    }
    public function tambahadmin()
    {
        return view('admin.Admin.tambahadmin');
    }
    public function listadmin()
    {
        $datas = Admin::all();
        return view('admin.Admin.listadmin', compact('datas'));
    }
    public function create()
    {
        return view('admin.Admin.tambahadmin');
    }
    public function store(Request $request)
    {
        Admin::create($request->all());
        return redirect('/listadmin');
    }
    public function edit($id)
    {
        return view('admin.Admin.editadmin');
    }
}

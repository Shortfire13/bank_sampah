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
        return view('admin.tambahadmin');
    }
    public function listadmin()
    {
        $datas = Admin::all();
        return view('admin.listadmin', compact('datas'));
    }
    public function create()
    {
        $model = new Admin;
        return view('admin.tambahadmin', compact('model'));
    }
    public function store(Request $request)
    {
        $model = new Admin;
        $model->name = $request->name;
        $model->username = $request->username;
        $model->email = $request->email;
        $model->password = $request->password;
        $model->save();

        return redirect('admin');
    }
    public function edit($id)
    {
        $admin = DB::table('admin')->where($id,id)->first();
        return view('admin.editadmin',compact('admin'));
    }

    public function update(Request $request)
    {
        DB::table('admin')->where('id',$request->id)->update([
            'name' => $request->nama,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password
        ]);
        return redirect()->route('listadmin')->with(success,'Admin Berhasil di Update');
    }
      
}

<?php

namespace App\Http\Controllers\AdminCallTrash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Admin::all();
        return view('superadmin.admin.index', compact(['admin']));
    }

    public function create()
    {
        return view('superadmin.admin.create');
    }

    public function store()
    {
        Request()->validate([
            'nama_admin' => 'required|string|max:50',
            'alamat' => 'required|string',
            'umur' => 'required|string|max:2',
            'jenis_kelamin' => 'required',
            'no_telp' => 'required|string|max:13',
            'username' => 'required|unique:admin,username',
            'password' => ['required', Password::min(8)]
        ],[
            //required massage
            'nama_admin.required' => 'Nama Admin Belum Diisi',
            'alamat.required' => 'Alamat Belum Diisi',
            'umur.required' => 'Usia Belum Diisi',
            'jenis_kelamin.required' => 'Jenis Kelamin Belum Dipilih',
            'no_telp.required' => 'Nomor Telepon Belum Diisi',
            'username.required' => 'Username Belum Diisi',
            'password.required' => 'Password Belum Diisi',

            //uniqe
            'username.uniqe' => 'Username Telah di Pakai',

        ]);

        $data = [
            'nama_admin' => Request()->nama_admin,
            'alamat' => Request()->alamat,
            'umur' => Request()->umur,
            'jenis_kelamin' => Request()->jenis_kelamin,
            'no_telp' => Request()->no_telp,
            'username' => Request()->username,
            'password' => Request()->password,
        ];

        // dd($data);
        Admin::create($data);
        return redirect('dash/adm')->with('message', 'Data Berhasil Di Tambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

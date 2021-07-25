<?php

namespace App\Http\Controllers\AdminCallTrash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::all();
        return view('superadmin.admin.index', compact(['admin']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_admin' => 'required|string|max:50',
            'alamat' => 'required|string',
            'umur' => 'required|string|max:2',
            'jenis_kelamin' => 'required',
            'no_telp' => 'required|string|max:13',
            'username' => 'required|string|min:6|max:10|unique:admin,username',
            'password' => ['required', 'string', 'min:8'],
            // 'foto' => 'required|mimes:jpg,bmp,png,jpeg|max:1024',
        ],[
            //required massage
            'nama_admin.required' => 'Nama Admin Belum Diisi',
            'alamat.required' => 'Alamat Belum Diisi',
            'umur.required' => 'Usia Belum Diisi',
            'jenis_kelamin.required' => 'Jenis Kelamin Belum Dipilih',
            'no_telp.required' => 'Nomor Telepon Belum Diisi',
            'username.required' => 'Username Belum Diisi',
            'password.required' => 'Password Belum Diisi',
            // 'foto.required' => 'Foto Belum Diisi',
            
        ]);
        //upload gambar
        // $foto = $request->foto;
        // $fileName = $request->nama_admin.'.'.$foto->extension();
        // $file->move(public_path('admin/assets/img_admin'), $fileName);

        Admin::create($request->all());
        return redirect('dash/adm')->with('message', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

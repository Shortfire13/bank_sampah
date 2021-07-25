<?php

namespace App\Http\Controllers\AdminCallTrash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Validation\Rules\Password;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('superadmin.pegawai.index', compact(['pegawai']));

    }

    public function create()
    {
        return view('superadmin.pegawai.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pegawai' => 'required|string|max:50',
            'alamat' => 'required|string',
            'umur' => 'required|string|max:2',
            'jenis_kelamin' => 'required',
            'no_telp' => 'required|string|max:13',
        ],[
            //required massage
            'nama_pegawai.required' => 'Nama Pegawai Belum Diisi',
            'alamat.required' => 'Alamat Belum Diisi',
            'umur.required' => 'Usia Belum Diisi',
            'jenis_kelamin.required' => 'Jenis Kelamin Belum Dipilih',
            'no_telp.required' => 'Nomor Telepon Belum Diisi',
        ]);
        Pegawai::create($request->all());
        return redirect('dash/pegawai')->with('message', 'Data Berhasil Di Tambahkan');
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

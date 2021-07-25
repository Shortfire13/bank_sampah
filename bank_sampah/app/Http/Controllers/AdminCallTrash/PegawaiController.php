<?php

namespace App\Http\Controllers\AdminCallTrash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;

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
            'nama_pegawai' => 'required',
            'alamat' => 'required',
            'umur' => 'required',
            'no_tlp' => 'required',
            'email' => 'required',
            'username' => 'required|unique:pegawai,username|max:10',
            'password ' => ['required', 'confirmed', password::min(8)],
        ]);
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

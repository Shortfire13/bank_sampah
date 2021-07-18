<?php

namespace App\Http\Controllers\AdminCallTrash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PegawaiM;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->PegawaiM = new PegawaiM();
    }

    public function index()
    {
        $data = [
            'pegawai'=> $this->PegawaiM->allData(),
        ];
        return view('superadmin.pegawai.index', $data);

    }

    public function create()
    {
        return view('superadmin.pegawai.create');
    }

    public function store(Request $request)
    {
        //
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

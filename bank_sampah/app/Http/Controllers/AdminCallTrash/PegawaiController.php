<?php

namespace App\Http\Controllers\AdminCallTrash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Validation\Rules\Password;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->Pegawai = new Pegawai();
    }
    
    public function index()
    {
        $data = [
            'pegawai' => $this->Pegawai->allData(),
        ];
        return view('superadmin.pegawai.index', $data);

    }

    public function create()
    {
        return view('superadmin.pegawai.create');
    }

    public function store()
    {
        Request()->validate([
            'nama_pegawai' => 'required|max:50',
            'alamat' => 'required',
            'umur' => 'required|max:2',
            'jenis_kelamin' => 'required',
            'no_telp' => 'required|max:13',
        ],[
            //required massage
            'nama_pegawai.required' => 'Nama Pegawai Belum Diisi',
            'alamat.required' => 'Alamat Belum Diisi',
            'umur.required' => 'Usia Belum Diisi',
            'jenis_kelamin.required' => 'Jenis Kelamin Belum Dipilih',
            'no_telp.required' => 'Nomor Telepon Belum Diisi',
        ]);

        $data = [
            'nama_pegawai' => Request()->nama_pegawai,
            'alamat' => Request()->alamat,
            'umur' => Request()->umur,
            'jenis_kelamin' => Request()->jenis_kelamin,
            'no_telp' => Request()->no_telp,
        ];
        $this->Pegawai->addData($data);
        return redirect('dash/pegawai')->with('message', 'Data Berhasil Di Tambahkan');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id_pegawai)
    {
        if (!$this->Pegawai->editData($id_pegawai)) {
            abort(404);
        }
        
        $data = [
            'pegawai'=>$this->Pegawai->editData($id_pegawai),
        ];
        return view('superadmin.pegawai.edit', $data);
    }

   
    public function update($id_pegawai)
    {
        Request()->validate([
            'nama_pegawai' => 'required|max:50',
            'alamat' => 'required',
            'umur' => 'required|max:2',
            'jenis_kelamin',
            'no_telp' => 'required|max:13',
        ],[
            //required massage
            'nama_pegawai.required' => 'Nama Pegawai Belum Diisi',
            'alamat.required' => 'Alamat Belum Diisi',
            'umur.required' => 'Usia Belum Diisi',
            'no_telp.required' => 'Nomor Telepon Belum Diisi',
        ]);

        if (Request()->jenis_kelamin <> "") {
            $data = [
                'nama_pegawai' => Request()->nama_pegawai,
                'alamat' => Request()->alamat,
                'umur' => Request()->umur,
                'jenis_kelamin' => Request()->jenis_kelamin,
                'no_telp' => Request()->no_telp,
            ];
            $this->Pegawai->updateData($id_pegawai, $data);
        }else {
            $data = [
                'nama_pegawai' => Request()->nama_pegawai,
                'alamat' => Request()->alamat,
                'umur' => Request()->umur,
                'no_telp' => Request()->no_telp,
            ];
            $this->Pegawai->updateData($id_pegawai, $data);
        }
        
        return redirect('dash/pegawai')->with('message', 'Data Berhasil Di Update');
    }


    public function destroy($id_pegawai)
    {
        $this->Pegawai->deleteData($id_pegawai);
        return redirect('dash/pegawai')->with('message', 'Data Berhasil Di Hapus');
    }
}

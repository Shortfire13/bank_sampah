<?php

namespace App\Http\Controllers\AdminCallTrash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->Admin = new Admin();
    }
    
    public function index()
    {
        $data = [
            'admin' => $this->Admin->allData(),
        ];
        return view('superadmin.admin.index', $data);

    }

    public function create()
    {
        return view('superadmin.admin.create');
    }

    public function store()
    {
        Request()->validate([
            'nama_admin' => 'required|max:50',
            'alamat' => 'required',
            'umur' => 'required|max:2',
            'jenis_kelamin' => 'required',
            'no_telp' => 'required|max:13',
            'username' => 'required|unique:admin,username',
            'password' => 'required|min:8',
        ],[
            //required massage
            'nama_admin.required' => 'Nama Pegawai Belum Diisi',
            'alamat.required' => 'Alamat Belum Diisi',
            'umur.required' => 'Usia Belum Diisi',
            'jenis_kelamin.required' => 'Jenis Kelamin Belum Dipilih',
            'no_telp.required' => 'Nomor Telepon Belum Diisi',
            'username.required' => 'Username Belum Diisi',
            'username.unique' => 'Username Sudah Dipakai',
            'password.required' => 'Password Belum Diisi',

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
        $this->Admin->addData($data);
        return redirect('dash/admins')->with('message', 'Data Berhasil Di Tambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id_admin)
    {
        if (!$this->Admin->editData($id_admin)) {
            abort(404);
        }
        
        $data = [
            'admin'=>$this->Admin->editData($id_admin),
        ];
        return view('superadmin.admin.edit', $data);
    }

    
    public function update($id_admin)
    {
        Request()->validate([
            'nama_admin' => 'required|max:50',
            'alamat' => 'required',
            'umur' => 'required|max:2',
            'jenis_kelamin',
            'no_telp' => 'required|max:13',
            'username' => 'unique:admin,username',
            'password' => 'required|min:8',
        ],[
            //required massage
            'nama_admin.required' => 'Nama Pegawai Belum Diisi',
            'alamat.required' => 'Alamat Belum Diisi',
            'umur.required' => 'Usia Belum Diisi',
            'no_telp.required' => 'Nomor Telepon Belum Diisi',
            'username.unique' => 'Username Sudah Dipakai',
            'password.required' => 'Password Belum Diisi',

        ]);

        if (Request()->jenis_kelamin <> "") {
            $data = [
                'nama_admin' => Request()->nama_admin,
                'alamat' => Request()->alamat,
                'umur' => Request()->umur,
                'jenis_kelamin' => Request()->jenis_kelamin,
                'no_telp' => Request()->no_telp,
                'username' => Request()->username,
                'password' => Request()->password,
            ];
            $this->Admin->updateData($id_admin, $data);
        } else {
            $data = [
                'nama_admin' => Request()->nama_admin,
                'alamat' => Request()->alamat,
                'umur' => Request()->umur,
                'no_telp' => Request()->no_telp,
                'username' => Request()->username,
                'password' => Request()->password,
            ];
            $this->Admin->updateData($id_admin, $data);
            return redirect('dash/admins')->with('message', 'Data Berhasil Di Update');
        }
        
    }

    public function destroy($id_admin)
    {
        $this->Admin->deleteData($id_admin);
        return redirect('dash/admins')->with('message', 'Data Berhasil Di Hapus');
    }
}

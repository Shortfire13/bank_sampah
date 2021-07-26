<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pegawai extends Model
{
    public function allData()
    {
        return DB::table('pegawai')->get();
    }

    public function addData($data)
    {
        DB::table('pegawai')->insert($data);
    }
    
    public function editData($id_pegawai)
    {
        return DB::table('pegawai')->where('id_pegawai', $id_pegawai)->first();
    }

    public function updateData($id_pegawai, $data)
    {
        DB::table('pegawai')
            ->where('id_pegawai', $id_pegawai)
            ->update($data);
    }

    public function deleteData($id_pegawai)
    {
        DB::table('pegawai')
            ->where('id_pegawai', $id_pegawai)
            ->delete();
    }

    public function jual(){
        return $this->hasMany(jual_sampah::class);
    }

}

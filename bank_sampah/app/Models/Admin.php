<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{
    public function allData()
    {
        return DB::table('admin')->get();
    }

    public function addData($data)
    {
        DB::table('admin')->insert($data);
    }
    
    public function editData($id_admin)
    {
        return DB::table('admin')->where('id_admin', $id_admin)->first();
    }

    public function updateData($id_admin, $data)
    {
        DB::table('admin')
            ->where('id_admin', $id_admin)
            ->update($data);
    }

    public function deleteData($id_admin)
    {
        DB::table('admin')
            ->where('id_admin', $id_admin)
            ->delete();
    }
}

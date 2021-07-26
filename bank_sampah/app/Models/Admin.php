<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{
    protected $table = 'admin';
    protected $guarded = 'id_admin';

    public function addData($data)
    {
        DB::table('admin')->insert($data);
    }
}

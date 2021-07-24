<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $guarded = ['id_pegawai'];
   
    public function jual(){
        return $this->hasMany(jual_sampah::class);
    }
}

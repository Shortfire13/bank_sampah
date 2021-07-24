<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jual_sampah extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function pegawai(){
        return $this->belongsTo(Pegawai::class);
    }
    public function detail(){
        return $this->hasMany(detail_jual::class);
    }
}

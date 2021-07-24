<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_jual extends Model
{
    use HasFactory;
    
    public function detail(){
        return $this->belongsTo(jual_sampah::class);

    }

}

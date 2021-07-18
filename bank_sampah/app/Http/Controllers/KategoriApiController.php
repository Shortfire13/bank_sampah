<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriApiController extends Controller
{
    public function kategori()
    {
        return response()->json(['message' => 'Succes','data' => 'Geo']);
    }
}

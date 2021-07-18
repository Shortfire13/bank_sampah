<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sampah;

class SampahApiController extends Controller
{
  public function show($id)

  {
        $sampah = Sampah::find($id);
        return response()->json(['message' => 'Succes','Data' =>$sampah]);
  }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SampahApiController extends Controller
{
    public function show($id)

  {
        $sampah = sampah::find($id);
        return response()->json(['message' => 'Succes','Data' => $sampah]);
  }
  public function sampah()
  {
    $sampah = sampah::all();
    return response()->json(['message' => 'succes','data'=> $sampah]);
  }
}

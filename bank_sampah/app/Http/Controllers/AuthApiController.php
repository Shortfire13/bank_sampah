<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class AuthApiController extends Controller
{
    public function login()
  {
    $user = user::all();
    return response()->json(['message' => 'succes','data'=> $user]);
  }
  
}

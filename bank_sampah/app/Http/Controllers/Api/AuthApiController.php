<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\User;


class AuthApiController extends Controller
{
    public function login(Request $request)
  {
    $user = User::where('email', $request-> email)->first();
    
    if (!$user || !\Hash::check($request->password,$user->password)){
      return response()->json([
        'message' => 'Password tidak sesuai'
      ], 401);
    }
    $token = $user->createToken('token-name')->plainTextToken;
    return response()->json([
      'message' => 'success',
      'user' => $user,
      'token' => $token,
    ], 200);
  }
}

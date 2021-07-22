<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\http\Support\Facades\Hash;
use App\Http\Models\User;
use App\Http\Controllers\Controller;


class AuthApiController extends Controller
{
    public function register(Request $request)
  {
    $fields = $request->validate([
      'name' => 'required|string',
      'email' => 'required|string|unique:users,email',
      'password'=> 'required|string|confirmed'
    ]);
    
    $user = User::create([
      'name' => $fields['name'],
      'email' => $fields['email'],
      'password' => bcrypt($fields['password'])
    ]);

    $token = $user->createToken('myapptoken')->plainTextToken;

    $response =[
      'user' => $user,
      'token' => $token

    ];
    return resnponse($response, 201);
  }
}

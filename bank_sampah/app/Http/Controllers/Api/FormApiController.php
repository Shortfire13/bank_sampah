<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class FormApiController extends Controller
{
    
        
    public function edit($id)
    {
      $user = User::find($id);
      return response()->json([
            'message' => 'Success',
            'user' => $user,
      ],200);
       
    }
    public function update(Request $request, $id)

    {
        $user = User::find($id);
        $request->validate([
            'nama_user' => 'required',
            'username' => 'required',
            'no_hp' => 'required',
            
        ]);
        $user->update([
            'nama_user' => $request->nama_user,
            'username' => $request->username,
            'no_hp' => $request->no_hp,
           
        ]);
        return response()->json([
            'message' => 'Success',
            'user' => $user,
      ],200);
    }
}

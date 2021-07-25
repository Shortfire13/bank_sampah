<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class loginApiController extends Controller
{
    public function index(Request $request)
    {
        //memvalidasi masukkan, email dan password wajib diisi
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // mengambil data user berdasarkan email yang dikirm
        $user= User::where('email', $request->email)->first();
        
        //jika user dan password salah maka tampilkan pesan error
        if (!$user || !\Hash::check($request->password, $user->password)) {
            return response([
                'success'   => false,
                'message' => ['email atau password salah']
            ], 404);
        }
        
        //jika kondisi di atas bisa dilewati, selanjutnya buatlah token baru
        $token = $user->createToken('ApiToken')->plainTextToken;
    
        //isi response json berupa data user dan token
        $response = [
            'success'   => true,
            'user'      => $user,
            'token'     => $token
        ];
        
        //kembalikan atau tampilkan response
        return response($response, 201);

        //membuat register
    }
    public function register(Request $request)
    {
        $fields = $request->validate([
            'nama_user' => 'required|string',
            'username' => 'required|string',
            'no_hp' => 'required|string',
            'email' => 'required|string|unique:user,email',
            'password' => 'required|string|confirmed',
        ]);
        $user = User::create([
            'nama_user' => $fields['nama_user'],
            'username' => $fields['username'],
            'no_hp' => $fields['no_hp'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);
        
    }
    /**
     * logout
     *
     * @return void
     */
    public function logout(Request $request)
    {
       $user = $request->user();
       $user->currentAccessToken()->delete();
        return response()->json([
            'success'    => 'Berhasil Log out'
        ], 200);
    }
}

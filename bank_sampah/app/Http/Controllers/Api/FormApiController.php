<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormApiController extends Controller
{
    public function form()
    {
      
        return response()->json([
            'message'    => 'ini adalah form'
             ], 200);
    }
}

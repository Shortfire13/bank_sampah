<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\loginApiController;
use App\Http\Controllers\Api\FormApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::group(['middleware' => 'auth:sanctum'],function() {
// });
// Route::post('/login', [AuthApiController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get('/form', [FormApiController::class, 'form']);
    Route::get('/logout', [loginApiController::class, 'logout']);
});
    
Route::post('/login', [loginApiController::class, 'index']);

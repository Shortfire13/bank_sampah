<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KategoriApiController;
use App\Http\Controllers\Api\SampahApiController;
use App\Http\Controllers\Api\AuthApiController;

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
Route::post('/register', [AuthApiController::class, 'register']);
 Route::get('/sampah', [SampahApiController::class, 'index'])->name('sampah');


Route::get('/kategori', [KategoriApiController::class, 'kategori'])->name('kategori');


//protected routes
Route::group(['middleware' => ['auth:sanctum']],function() {
    Route::post('/sampah/{id}', [SampahApiController::class, 'store']);
});
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriApiController;
use App\Http\Controllers\SampahApiController;
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

Route::get('/sampah', [SampahApiController::class, 'sampah'])->name('sampah');
Route::get('/sampah/{id}', [SampahApiController::class, 'show'])->name('show');
Route::get('/kategori', [KategoriApiController::class, 'kategori'])->name('kategori');
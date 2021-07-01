<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\PegawaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/tambahadmin', [AdminController::class, 'tambahadmin'])->name('tambahadmin');
Route::get('/listadmin', [AdminController::class, 'listadmin'])->name('listadmin');
Route::get('/listpegawai', [PegawaiController::class, 'index'])->name('listpegawai');
Route::get('/tambahpegawai', [PegawaiController::class, 'create'])->name('tambahpegawai');
// resource
Route::resource('pegawai', PegawaiController::class);
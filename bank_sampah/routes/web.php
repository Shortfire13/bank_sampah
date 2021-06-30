<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\admin\AdminController;

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
Route::get('/tambahpegawai', [AdminController::class, 'tambahpegawai'])->name('tambahpegawai');
Route::get('/tambahadmin', [AdminController::class, 'tambahadmin'])->name('tambahadmin');
Route::get('/listadmin', [AdminController::class, 'listadmin'])->name('listadmin');
Route::get('/listpegawai', [AdminController::class, 'listpegawai'])->name('listpegawai');
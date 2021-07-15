<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/produk', [HomeController::class, 'produk'])->name('produk');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/riwayat', [HomeController::class, 'riwayat'])->name('riwayat');

//Admin
Route::get('/admin', [AdminController::class, 'index']);
//Pegawai




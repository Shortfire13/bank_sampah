<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\AdminCallTrash\DashboardController;
use App\Http\Controllers\AdminCallTrash\AdminController;
use App\Http\Controllers\AdminCallTrash\PegawaiController;
use App\Http\Controllers\AdminCallTrash\UserController;
use Illuminate\Support\Facades\Auth;


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
Route::get('/loginadmin', [HomeController::class, 'loginadmin'])->name('loginadmin');
Route::get('/produk', [HomeController::class, 'produk'])->name('produk');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/profileuser', [HomeController::class, 'profileuser'])->name('profileuser');
Route::get('/riwayat', [RiwayatController::class, 'riwayat'])->name('riwayat');
Route::get('/detail/{detail:tgl_jual}', [RiwayatController::class, 'detail']);

//Halaman Admin
Route::get('/dash', [DashboardController::class, 'index']);

//Admin
Route::get('/dash/admins', [AdminController::class, 'index']);
Route::get('/dash/admins/add', [AdminController::class, 'create']);
Route::post('/dash/admins', [AdminController::class, 'store']);
Route::get('/dash/admins/edit/{id_admin}', [AdminController::class, 'edit']);
Route::post('/dash/admins/update/{id_admin}', [AdminController::class, 'update']);
Route::get('/dash/admins/delete/{id_admin}', [AdminController::class, 'destroy']);


//Pegawai
Route::get('/dash/pegawai', [PegawaiController::class, 'index']);
Route::get('/dash/pegawai/add', [PegawaiController::class, 'create']);
Route::post('/dash/pegawai', [PegawaiController::class, 'store']);
Route::get('/dash/pegawai/edit/{id_pegawai}', [PegawaiController::class, 'edit']);
Route::post('/dash/pegawai/update/{id_pegawai}', [PegawaiController::class, 'update']);
Route::get('/dash/pegawai/delete/{id_pegawai}', [PegawaiController::class, 'destroy']);


//user
Route::get('/dash/user', [UserController::class, 'index']);




//Auth
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

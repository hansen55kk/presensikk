<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataAbsensiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KelolaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', DashboardController::class);
Route::get('data_absensi', DataAbsensiController::class);

Route::get('/absen', [AbsenController::class, 'index']);
Route::post('/absen', [AbsenController::class, 'submit']);

Route::get('/absen/manual', [ManualController::class, 'index']);
Route::post('/absen/manual', [ManualController::class, 'submit']);

Route::get('/login', [LoginController::class, 'view']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::post('/pegawai', [PegawaiController::class, 'insert']);
Route::put('/pegawai/edit/{id}', [PegawaiController::class, 'update']);
Route::delete('/pegawai/delete/{id}', [PegawaiController::class, 'destroy']);

Route::get('/profile', [ProfileController::class, 'index']);
Route::put('/profile/credentials/{id}', [ProfileController::class, 'credentials']);
Route::put('/profile/password/{id}', [ProfileController::class, 'password']);

Route::get('/kelola', [KelolaController::class, 'index']);

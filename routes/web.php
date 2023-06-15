<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\Admin\DaftarController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\Admin\ListKonsultasiController;
use App\Http\Controllers\pasien\KonsultasiController;
use App\Http\Controllers\pasien\JadwalController;
use App\Http\Controllers\Konsultan\ListKonsultasiKonsultanController;
use App\Http\Controllers\Konsultan\ListJadwalKonsultanController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Admin\ChangePasswordAdminController;
use App\Http\Controllers\Konsultan\ChangePasswordKonsultanController;
use App\Http\Controllers\Pasien\ChangePasswordPasienController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//======================Dashboard==========================//
Route::get('/dashboard',[DashboardController::class,'index']);
//======================Daftar==========================//
Route::get('/admin/register',[DaftarController::class,'index']);
Route::get('/admin/add-account',[DaftarController::class,'tambah']);
Route::post('/admin/add-account',[DaftarController::class,'proses_tambah']);
Route::delete('/admin/hapus/{id}',[DaftarController::class,'destroy']);
//======================Daftar==========================//
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'akses_login']);
Route::get('/logout',[LoginController::class,'logout']);

//======================ListAdmin==========================//
Route::get('/admin-list-konsultasi/',[ListKonsultasiController::class,'index']);
//======================ListPasien==========================//
Route::get('/pasien/konsultasi/',[KonsultasiController::class,'index']);
Route::get('/pasien/buat-konsultasi/',[KonsultasiController::class,'create']);
Route::post('/pasien/buat-konsultasi/',[KonsultasiController::class,'store']);
Route::delete('/pasien/hapus/{id}',[KonsultasiController::class,'destroy']);
Route::get('/pasien/balas-konsultasi/{id}',[KonsultasiController::class,'edit']);
Route::post('/pasien/proses/{id}',[KonsultasiController::class,'proses_balas']);
Route::get('/pasien/history-konsultasi/',[KonsultasiController::class,'history']);
Route::post('/pasien/history-konsultasi/try/{id}',[KonsultasiController::class,'try']);
//======================Jadwal Pasien==========================//
Route::get('/pasien/jadwal/',[JadwalController::class,'index']);
Route::get('/pasien/buat-jadwal/',[JadwalController::class,'create']);
Route::post('/pasien/buat-jadwal/',[JadwalController::class,'store']);
Route::delete('/pasien/hapus-jadwal/{id}',[JadwalController::class,'destroy']);
Route::get('/pasien/edit-jadwal/{id}',[JadwalController::class,'edit']);
Route::post('/pasien/proses-edit-jadwal/{id}',[JadwalController::class,'proses_jadwal']);
//======================ListPasien_Konsultan==========================//
Route::get('/konsultan/list-konsultasi/',[ListKonsultasiKonsultanController::class,'index']);
Route::get('/konsultan/balas-konsultasi/{id}',[ListKonsultasiKonsultanController::class,'edit']);
Route::post('/konsultan/proses/{id}',[ListKonsultasiKonsultanController::class,'proses']);
//======================ListJadwal_Konsultan==========================//
Route::get('/konsultan/list-jadwal-konsultasi/',[ListJadwalKonsultanController::class,'index']);
Route::get('/konsultan/edit-jadwal-pasien/{id}',[ListJadwalKonsultanController::class,'edit']);
Route::post('/konsultan/edit-jadwal-pasien-proses/{id}',[ListJadwalKonsultanController::class,'st']);
//======================SettingUserAdmin==========================//
Route::get('/admin/setting',[UserAdminController::class,'index']);
Route::get('/change-user/{username}',[UserAdminController::class,'edit']);
Route::post('/proses-change-user/{id}',[UserAdminController::class,'store']);
//======================SettingUserKonsultan==========================//
Route::get('/konsultan/setting',[UserAdminController::class,'index']);
Route::get('/change-user/{username}',[UserAdminController::class,'edit']);
Route::post('/proses-change-user/{id}',[UserAdminController::class,'store']);
//======================PasswordUserAdmin==========================//
Route::get('/admin/password',[ChangePasswordAdminController::class,'index']);
Route::post('/admin/password',[ChangePasswordAdminController::class,'store']);
//======================PasswordUserKonsultan==========================//
Route::get('/konsultan/password',[ChangePasswordKonsultanController::class,'index']);
Route::post('/konsultan/password',[ChangePasswordKonsultanController::class,'store']);
//======================PasswordPasien==========================//
Route::get('/pasien/password',[ChangePasswordPasienController::class,'index']);
Route::post('/pasien/password',[ChangePasswordPasienController::class,'store']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KebijakanController;
use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\Auth\LoginController;
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
Auth::routes();
//redirect for user wali another
Route::get('/', function () {
    return redirect('homepage');
});
//redirect for admin
Route::get('/admin', function () {
    return redirect('login');
});

//admin area
Route::get('/home', [HomeController::class, 'index']);
//admin siswa
Route::get('/admin/siswa', [SiswaController::class, 'index']);
Route::get('/admin/siswa/create_page', [SiswaController::class, 'createPage']);
Route::get('/admin/siswa/edit/{id}', [SiswaController::class, 'editPage']);
Route::post('/admin/siswa/create', [SiswaController::class, 'create']);
Route::post('/admin/siswa/update/{id}', [SiswaController::class, 'update']);
Route::get('/admin/siswa/delete/{id}', [SiswaController::class, 'delete']);

//admin tagihan
Route::get('/admin/tagihan', [TagihanController::class, 'index']);
Route::get('/admin/tagihan/create_page', [TagihanController::class, 'createPage']);
Route::get('/admin/tagihan/edit/{id}', [TagihanController::class, 'editPage']);
Route::post('/admin/tagihan/create', [TagihanController::class, 'create']);
Route::post('/admin/tagihan/update/{id}', [TagihanController::class, 'update']);
Route::get('/admin/tagihan/delete/{id}', [TagihanController::class, 'delete']);

//admin kebijakan
Route::get('/admin/kebijakan', [KebijakanController::class, 'index']);
Route::get('/admin/kebijakan/create_page', [KebijakanController::class, 'createPage']);
Route::get('/admin/kebijakan/edit/{id}', [KebijakanController::class, 'editPage']);
Route::post('/admin/kebijakan/create', [KebijakanController::class, 'create']);
Route::post('/admin/kebijakan/update/{id}', [KebijakanController::class, 'update']);
Route::get('/admin/kebijakan/delete/{id}', [KebijakanController::class, 'delete']);

//admin kegiatan
Route::get('/admin/kegiatan', [KegiatanController::class, 'index']);
Route::get('/admin/kegiatan/create_page', [KegiatanController::class, 'createPage']);
Route::get('/admin/kegiatan/edit/{id}', [KegiatanController::class, 'editPage']);
Route::post('/admin/kegiatan/create', [KegiatanController::class, 'create']);
Route::post('/admin/kegiatan/update/{id}', [KegiatanController::class, 'update']);
Route::get('/admin/kegiatan/delete/{id}', [KegiatanController::class, 'delete']);

//admin pelanggaran
Route::get('/admin/pelanggaran', [PelanggaranController::class, 'index']);
Route::get('/admin/pelanggaran/create_page', [PelanggaranController::class, 'createPage']);
Route::get('/admin/pelanggaran/edit/{id}', [PelanggaranController::class, 'editPage']);
Route::post('/admin/pelanggaran/create', [PelanggaranController::class, 'create']);
Route::post('/admin/pelanggaran/update/{id}', [PelanggaranController::class, 'update']);
Route::get('/admin/pelanggaran/delete/{id}', [PelanggaranController::class, 'delete']);

//admin kehadiran
Route::get('/admin/kehadiran', [KehadiranController::class, 'index']);
Route::get('/admin/kehadiran/create_page', [KehadiranController::class, 'createPage']);
Route::get('/admin/kehadiran/edit/{id}', [KehadiranController::class, 'editPage']);
Route::post('/admin/kehadiran/create', [KehadiranController::class, 'create']);
Route::post('/admin/kehadiran/update/{id}', [KehadiranController::class, 'update']);
Route::get('/admin/kehadiran/delete/{id}', [KehadiranController::class, 'delete']);

//user wali
Route::post('login_wali',[LoginController::class,'customLoginWali']);
Route::post('login_user',[LoginController::class,'customLoginUser']);
Route::get('/homewali', [HomeController::class, 'indexWali']);
Route::get('/homepage', [WebController::class, 'index']);
Route::get('/walihomepage', [WebController::class, 'loginWali']);

Route::get('info/kebijakan',[HomeController::class, 'indexKebijakan']);
Route::get('info/kegiatan',[HomeController::class, 'indexKegiatan']);
Route::get('info/kegiatan/detail/{id}',[HomeController::class, 'indexDetailKegiatan']);
Route::get('info/kehadiran',[HomeController::class, 'indexKehadiran']);
Route::get('info/pelanggaran',[HomeController::class, 'indexPelanggaran']);
Route::get('info/tagihan',[HomeController::class, 'indexTagihan']);

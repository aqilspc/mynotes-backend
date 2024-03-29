<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    return 'backend my notes';
});
//redirect for admin

//user 
Route::post('login_user',[LoginController::class,'customLoginUser']);
Route::post('register_user',[LoginController::class,'registerUser']);

//note
Route::post('get_note',[HomeController::class,'getNote']);
Route::post('get_note_by_id',[HomeController::class,'getNoteByid']);
Route::post('delete_note',[HomeController::class,'deletNoteById']);
Route::post('create_note',[HomeController::class,'insertNote']);
Route::post('update_note',[HomeController::class,'updateNote']);

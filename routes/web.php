<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\ProfileController;
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


Route::get('/', [DashboardController::class,'index']);

Route::get('/mahasiswa', [MahasiswaController::class,'index']);
Route::get('/dosen', [DosenController::class,'index']);
Route::get('/matkul', [MatkulController::class,'index']);
Route::get('/profile', [ProfileController::class,'index']);

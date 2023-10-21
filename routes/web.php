<?php

use App\Http\Controllers\AssJtConrtoller;
use App\Http\Controllers\AssKaryawanController;
use App\Http\Controllers\AssTkConrtoller;
use App\Http\Controllers\KWController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\TrainingController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('karyawan.index_karyawan');
// });
// Route::get("/", ([PegawaiController::class, 'index'])); 
Route::get("/", [PegawaiController::class, 'index'])->name('karyawan.index'); 
Route::get("/destroy-pegawai/{id}", [PegawaiController::class, 'destroy'])->name('destroy.pegawai'); 
Route::get("/destroy/{id}", [TrainingController::class, 'destroy'])->name('destroy.training'); 
Route::get("/training-karyawan", [TrainingController::class, 'index'])->name('training-karyawan.index'); 

// Route::any("/assesment-karyawan", [AssKaryawanController::class, 'index'])->name('ass-karyawan.create_kw'); 
// Route::post("/post-tk", [AssKaryawanController::class, 'store_train_krw'])->name('store-train-krw'); 

Route::any("/kw", [KWController::class, 'index'])->name('ass-karyawan.create_kw'); 
Route::post("/post-mm", [KWController::class, 'store_train_krw'])->name('store-train-krw'); 

Route::any("/assesment-jt", [AssJtConrtoller::class, 'index'])->name('ass-jt.create_pf'); 
Route::post("/post-assesment-jt", [AssJtConrtoller::class, 'store_jenis_training'])->name('store-jt'); 

Route::get("/assesment-tk", [AssTkConrtoller::class, 'index'])->name('ass-tk.create_pf'); 
Route::post("/post-tk", [AssTkConrtoller::class, 'store_tk'])->name('store-tk'); 


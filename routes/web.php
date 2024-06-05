<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
// Route Dashboard
Route::get('/',[HomeController::class, 'dashboard'])->name('dashboard');
// Route Halaman Data Responden
Route::get('/responden',[HomeController::class, 'index'])->name('index');
// Route Halaman Tambah Responden
Route::get('/create',[HomeController::class, 'create'])->name('responden.create');
// Route Input Data Responden
Route::post('/store',[HomeController::class, 'store'])->name('responden.store');
// Route Halaman Edit Responden
Route::get('/edit/{id}',[HomeController::class, 'edit'])->name('responden.edit');
// Route Edit Data Responden
Route::put('/update/{id}',[HomeController::class, 'update'])->name('responden.update');
// Route Hapus Data Responden
Route::delete('/delete/{id}',[HomeController::class, 'delete'])->name('responden.delete');
// Route Login
Route::get('/login',[LoginController::class, 'index'])->name('login');
// Route Proses Login
Route::post('/login-proses',[LoginController::class, 'login_proses'])->name('login-proses');
// Route Logout
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
// Route Halaman Pertanyaan
Route::get('/pertanyaan',[HomeController::class, 'pertanyaan'])->name('pertanyaan');
// Route Halaman Jawaban Persepsi
Route::get('/persepsi',[HomeController::class, 'persepsi'])->name('persepsi');
// Route Halaman Jawaban Harapan
Route::get('/harapan',[HomeController::class, 'harapan'])->name('harapan');
// Route Halaman Uji Validitas
Route::get('/ujivaliditas',[HomeController::class, 'ujivaliditas'])->name('validitas');
// Route Halaman Uji Reliabilitas
Route::get('/ujireliabilitas',[HomeController::class, 'ujireliabilitas'])->name('reliabilitas');
// Route Halaman Uji Reliabilitas
Route::get('/servqual',[HomeController::class, 'servqual'])->name('servqual');
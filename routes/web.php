<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\JurusanController;
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
    return view('dasboard');
});

Route::resource('siswa', SiswaController::class);
Route::resource('guru', GuruController::class);
Route::resource('mapel', MapelController::class);
Route::resource('jurusan', JurusanController::class);

Route::get('/guru/guru_pdf', [GuruController::class, 'guru_pdf']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
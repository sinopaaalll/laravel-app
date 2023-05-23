<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return 'Selamat pagi kawan-kawan, Semangat belajar laravel nya';
});

Route::get('/staff/{nama}/{divisi}', function ($nama,$divisi) {
    return 'Selamat Pagi '.$nama.', Anda bekerja pada divisi '.$divisi.' Ya?';
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/buah', function () {
    return view('buah');
});

Route::get('/mahasiswa', [MahasiswaController::class,'dataMahasiswa']);
/*
urutan route menggunakan controller
1. /mahasiswa => nama route
2. App\Http\Controllers\MahasiswaController::class => path controller & nama controllernya
3. dataMahasiswa => nama fungsi di MahasiswaController
*/

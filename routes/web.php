<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\PengurusController; // <-- 1. Tambahkan ini

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route utama ('/') sekarang akan ditangani oleh HomeController
// yang akan mengambil data pengurus dan menampilkan view 'home'.
Route::get('/', [PengurusController::class, 'index']);

// Route untuk modul sudah benar, hanya merapikan path untuk 'store'
Route::get('/moduls', [ModulController::class, 'index'])->name('moduls.learn');
Route::get('/moduls/create', [ModulController::class, 'create'])->name('moduls.create');

// Path disesuaikan agar konsisten dengan yang lain
Route::post('/moduls', [ModulController::class, 'store'])->name('moduls.store');

// Route lama '/welcome' bisa dihapus jika tidak digunakan
// Route::get('/welcome', function () {
//     return view('welcome');
// });
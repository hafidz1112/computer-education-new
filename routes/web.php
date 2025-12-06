<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\PengurusController; // <-- 1. Tambahkan ini
use App\Http\Controllers\LearnController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route utama ('/') sekarang akan ditangani oleh HomeController
// yang akan mengambil data pengurus dan menampilkan view 'home'.
Route::get('/', [PengurusController::class, 'index']);

Route::get('/learn', [LearnController::class, 'index'])->name('learn.index');
Route::get('/learn/{slug}', [LearnController::class, 'modulsByCategory'])->name('learn.category');

Route::get('/modul/{slug}', [ModulController::class, 'show'])->name('learn.show');
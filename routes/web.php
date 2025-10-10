<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModulController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function() {
    return view('home');
});
Route::get('/moduls', [ModulController::class, 'index'])->name('moduls.index');
Route::get('/moduls/create', [ModulController::class, 'create'])->name('moduls.create');
Route::post('/products', [ModulController::class, 'store'])->name('moduls.store');
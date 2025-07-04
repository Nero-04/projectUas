<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function (){
   return view('auth.login');
})->name('login');

Route::post('/proseslogin', [AuthController::class, 'proseslogin']);

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
use App\Http\Controllers\KendaraanController;

Route::middleware(['auth'])->group(function () {
    Route::resource('kendaraan', KendaraanController::class);
});
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('kendaraan', \App\Http\Controllers\KendaraanController::class);
});


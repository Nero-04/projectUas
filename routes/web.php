<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


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
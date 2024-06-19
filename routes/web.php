<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateAccountController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');




Route::get('/register/{id}', [CreateAccountController::class, 'index'])->name('register-user');



Route::get('/user/dashboard', [HomeController::class, 'index'])->name('user.dashboard');
Route::get('/admin/dashboard', [HomeController::class, 'admin'])->name('admin.dashboard');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

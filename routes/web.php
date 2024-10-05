<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;


// Route::get('/', function () {
//     return view('dashboard');
// });
Route::get('/register', [AuthController::class, 'show'])->name('register');
Route::post('/register', [AuthController::class, 'store']);
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/edit-cv', [CVController::class, 'edit'])->name('edit.cv');
    Route::get('/view-cv', [CVController::class, 'view'])->name('view.cv');
    
    Route::post('/profile/password-update', [ProfileController::class, 'updatePassword'])->name('password.update');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

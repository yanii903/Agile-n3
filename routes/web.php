<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/client');
});

Route::prefix('client')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/login', [HomeController::class, 'login'])->name('client.user.login');
    Route::match(['get', 'post'], '/logout', [HomeController::class, 'logout'])->name('client.user.logout');

    Route::post('/loginForm', [HomeController::class, 'loginForm'])->name('client.user.loginForm');

    Route::get('/register', [HomeController::class, 'register'])->name('client.user.register');
    Route::post('/registerForm', [HomeController::class, 'registerForm'])->name('client.user.registerForm');
});

Route::prefix('admin')->group(function () {
    Route::get('/list', [UserController::class, 'list'])->name('admin.users.list');

    Route::resource('users', UserController::class);
});


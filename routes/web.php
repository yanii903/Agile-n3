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
});

Route::prefix('admin')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('admin.users.list');
});

<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAdmin;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RoleMiddleware;

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

Route::prefix('admin')->name('admin.')->middleware([CheckAdmin::class])->group(function () {

    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
});



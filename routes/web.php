<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProductsClientController;

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


    Route::get('/products', [ProductsClientController::class, 'products'])->name('client.user.products');
    Route::get('/products/detail/{id}', [ProductsClientController::class, 'detail'])->name('client.user.products.detail');
    Route::get('/quickview/{id}', [ProductsClientController::class, 'quickview'])->name('client.user.products.quickview');
    Route::get('/search', [ProductsClientController::class, 'search'])->name('client.products.search');
    Route::get('carts', [CartController::class, 'index'])->name('client.carts.index');
    Route::post('carts/store', [CartController::class, 'store'])->name('client.carts.store');
});

Route::prefix('admin')->name('admin.')->middleware([CheckAdmin::class])->group(function () {

    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);

});

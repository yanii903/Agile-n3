<?php

namespace App\Http;
use App\Http\Middleware\Authenticate;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // protected $routeMiddleware = [
    //     // Các middleware mặc định
    //     'auth' => \App\Http\Middleware\Authenticate::class,
    //     'check.role' => \App\Http\Middleware\CheckRole::class, // Đăng ký middleware CheckRole
    // ];
}

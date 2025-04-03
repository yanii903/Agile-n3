<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // Đảm bảo sử dụng Auth nếu cần
use Illuminate\Auth\Middleware\Authenticate as Middleware; // Trong trường hợp cần sử dụng middleware từ Laravel

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Sử dụng Auth::check() thay vì auth()->check()
        if (!Auth::check() || Auth::user()->role !== $role) {
            return redirect('home');  // Chuyển hướng nếu không phải người dùng có quyền truy cập
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Kiểm tra nếu người dùng đã đăng nhập và có vai trò phù hợp
        if (Auth::check()) {
            $user = Auth::user();

            // Kiểm tra vai trò của người dùng
            if ($user->role != $role) {
                // Nếu không phải vai trò yêu cầu, chuyển hướng người dùng
                return redirect('/client')->with('error', 'Bạn không có quyền truy cập vào trang này');
            }
        } else {
            // Nếu người dùng chưa đăng nhập, chuyển hướng đến trang đăng nhập
            return redirect()->route('client.user.login')->with('error', 'Vui lòng đăng nhập');
        }

        return $next($request);
    }
}

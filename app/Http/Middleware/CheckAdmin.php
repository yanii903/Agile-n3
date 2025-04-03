<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;  // Thêm dòng này để sử dụng Eloquent

class CheckAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra nếu chưa đăng nhập hoặc không phải admin
        if (!Auth::check()) {
            return redirect()->route('client.user.login')->with('error', 'Bạn cần đăng nhập để truy cập!');
        }

        // Lấy người dùng hiện tại
        $user = Auth::user(); // Hoặc bạn có thể sử dụng User::find(Auth::id()) nếu muốn
        // Kiểm tra vai trò của người dùng bằng Eloquent
        if ($user->role !== 'admin') {
            return redirect()->route('home')->with('error', 'Bạn không có quyền truy cập!');
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client.home');
    }

    public function login()
    {
        return view('client.user.login');
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Đăng xuất người dùng
        session()->flush(); // Xóa toàn bộ session
        return redirect()->route('home')->with('success', 'Logout successfully!');
    }

    public function loginForm(Request $request)
    {
        // Kiểm tra xem đây là request POST (khi người dùng nhấn nút đăng nhập)
        if ($request->isMethod('post')) {
            // Xác thực dữ liệu người dùng nhập vào
            $request->validate([
                'email' => 'required|email|exists:users,email',
                'password' => 'required|string|min:6',
            ]);

            // Kiểm tra xem thông tin đăng nhập có đúng không
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials, $request->filled('remember'))) {
                // Lấy thông tin người dùng đã đăng nhập
                $user = Auth::user();

                // Kiểm tra vai trò của người dùng
                if ($user->role == 'admin') {
                    // Nếu là admin, chuyển hướng tới trang admin
                    return redirect()->route('admin.users.list')->with('success', 'login successfully!');
                } elseif ($user->role == 'customer') {
                    // Nếu là customer, chuyển hướng tới trang chủ
                    session(['name' => $user->name]); // Lưu giá trị vào session với key là 'key'

                    return redirect()->route('home')->with('success', 'login successfully!');
                }
            }

            // Nếu thông tin không hợp lệ, trả về lỗi đăng nhập
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }

        // Nếu là GET request, trả về form đăng nhập
        return view('client.user.login');
    }

    public function register()
    {
        return view('client.user.register');
    }

    public function registerForm(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed', // Kiểm tra mật khẩu và xác nhận mật khẩu
        ]);

        // Nếu có lỗi trong quá trình xác thực, trả về trang đăng ký với thông báo lỗi
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Tạo người dùng mới
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone_number,
            'password' => Hash::make($request->password), // Mã hóa mật khẩu trước khi lưu
        ]);

        // Chuyển hướng đến trang đăng nhập sau khi đăng ký thành công
        return redirect()->route('client.user.login')->with('success', 'Account created successfully! Please login.');
    }
}

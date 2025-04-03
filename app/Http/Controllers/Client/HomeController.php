<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client.home');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('home')->with('success', 'Đăng nhập thành công!');
            }

            return back()->withErrors(['email' => 'Email hoặc mật khẩu không đúng!']);
        }

        return view('client.user.login');
    }
}

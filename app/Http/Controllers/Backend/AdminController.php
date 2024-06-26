<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function showLogin()
    {
        return view('backend.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('backend'); // 登录成功后重定向到 dashboard
        }

        return redirect()->back()->withErrors(['msg' => '登入錯誤']);
    }

    // logout
    public function logout(Request $request)
    {

        session()->forget(['adminLogin', 'users', 'admin-email']);
        Auth::logout();
        return view('backend/login');
    }
}

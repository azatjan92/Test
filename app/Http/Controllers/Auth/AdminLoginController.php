<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('number', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/admin');
        }

        return redirect()->back()->withErrors(['loginError' => 'Неверные учетные данные']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}


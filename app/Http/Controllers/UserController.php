<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'email' => ['required', 'email:dns'], //VERIFIKASI FALIDASI EMAIL
            'password' => ['required']
        ]);
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }
        return back()->with('loginError', 'Login Failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        return redirect('/login');
    }
}

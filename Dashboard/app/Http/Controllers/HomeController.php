<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('index');
        }

        return back()->withErrors(['email' => 'ایمیل یا رمز عبور نادرست است']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('showLoginForm');
    }


}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;


    protected $redirectTo = '/home';


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
//        $this->middleware('auth')->only('logout');
    }
    public function showLoginForm()
    {
        return view('auth.login'); // نمای لاگین
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/home');
        }

        return back()->withErrors(['email' => 'ایمیل یا رمز عبور اشتباه است.']);
    }
}

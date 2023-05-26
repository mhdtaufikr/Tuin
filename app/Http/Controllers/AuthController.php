<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $cekuser_status = User::where('email', $request->email)->first();

        if (Auth::attempt($credentials)) {
            return redirect('/admin');
        } else {
            return redirect('/')->with('statusLogin', 'Wrong Email or Password');
        }
    }

    public function logout()
    {
            Auth::logout();
            return redirect('/login')->with('statusLogout','Success Logout');
    }
}

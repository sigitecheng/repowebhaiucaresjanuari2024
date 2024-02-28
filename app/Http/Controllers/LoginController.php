<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {

        return view('login.index', [
            "title"         => "Silahkan Login",
            "active"        => "login",
            "imagelogin1"   =>  "login/login1.png",
            "imagelogin2"   =>  "login/login2.png",


        ]);
    }

    public function authenticate(Request $request)
    {
        // $credentials = $request->validate([
        //     'email' => 'required|email',  // PENGGUNAAN DNS UNTUK MENERIMA EMAIL YANG SANGAT BENAR VALID ,
        //     'password' => 'required'
        // ]);

        $credentials = $request->validate([
            'email' => ['required', 'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'],
            'password' => 'required'
        ]);
        

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError', 'Login Failed !');

        // dd('Berhasil Masuk Iqlima');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    //
}

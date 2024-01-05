<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function dologin(Request $request) {
        // validasi
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role_id' => 'required|in:1,2', // Sesuaikan dengan peran yang diizinkan
        ]);

        if (auth()->attempt($credentials)) {

            // buat ulang session login
            $request->session()->regenerate();

            if (auth()->user()->role_id === 1) {
                // jika user admin
                return redirect()->intended('/admin')->with('success', 'Login berhasil.');
            } else {
                // jika user pembeli
                return redirect()->intended('/pembeli')->with('success', 'Login berhasil.');
            }
        }

        // jika email atau password salah
        // kirimkan session error
        return back()->with('error', 'Email atau password salah. Atau anda tidak diizinkan memilih role itu.');
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
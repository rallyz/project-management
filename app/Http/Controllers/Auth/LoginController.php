<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validasi form
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Lakukan otentikasi pengguna
        $user = User::where('username', $request->username)->first();

        if ($user && $user->password == $request->password) {
            // Jika otentikasi berhasil, arahkan ke halaman dashboard
            Auth::login($user);
            return redirect()->route('dashboard');
        }

        // Jika otentikasi gagal, kembalikan ke halaman login dengan pesan error
        return redirect()->route('login')->withErrors(['login' => 'Username atau password salah.']);
        
    }

    public function logout(Request $request)
    {
        // Lakukan logout pengguna
        Auth::logout();

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('login');
    }
}

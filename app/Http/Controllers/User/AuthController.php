<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function loginPage() {
        if(Auth::user()){
            return redirect("/");
        }
        return view('pages.user.auth.auth-login');
    }

    public function login(Request $request) {
        // Validasi input credentials user
        $credentials = $request->validate([
            'email' =>  'required|email',
            'password' => 'required'
        ]);

        // Validasi credentials
        if (Auth::attempt($credentials)) {

            $user = Auth::user();

            // Periksa jika role user adalah 'user'
        if ($user->role === 'user') {
            // Regenerasi session
            $request->session()->regenerate();

            // Redirect ke halaman checkout
            return redirect()->intended('/');
        } else {
            // Logout user jika role bukan 'user'
            Auth::logout();
            return back()->withErrors([
                'email' => 'You do not have permission to access this application.',
            ])->onlyInput('email');
        }


        }

        // Jika credentials tidak valid, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


    public function logout(Request $request)
    {
        // Logout user
        auth()->logout();

        // Hapus session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman utama
        return redirect('/');
    }
}

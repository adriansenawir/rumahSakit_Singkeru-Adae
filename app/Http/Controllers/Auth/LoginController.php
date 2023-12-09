<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->role == 'admin') {
            return redirect('/dashboard'); // Ganti '/home' dengan rute admin yang sesuai
        } elseif ($user->role == 'dokter') {
            return redirect('/dashboard'); // Ganti '/home' dengan rute dokter yang sesuai
        } elseif ($user->role == 'apoteker') {
            return redirect('/dashboard'); // Ganti '/home' dengan rute apoteker yang sesuai
        } elseif ($user->role == 'pasien') {
            return redirect('/dashboard'); // Ganti '/home' dengan rute pasien yang sesuai
        }

        // Jika tidak ada role yang cocok, bisa diarahkan ke halaman default
        return redirect('/dashboard'); // Ganti '/home' dengan rute default yang sesuai
    }

    use AuthenticatesUsers;

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return $this->loggedOut($request) ?: redirect('/');
    }

}


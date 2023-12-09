<?php

// app/Http/Controllers/UserProfileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserProfileController extends Controller
{
    public function index()
    {
        // Misalnya, ambil informasi pengguna saat ini
        $user = auth()->user();

        return view('auth.userprofile.index', compact('user'));
    }

    public function show($userId)
    {
        $user = User::find($userId);

        if (!$user) {
            // User tidak ditemukan, mungkin hendak menampilkan error atau redirect ke halaman lain.
            return abort(404); // Ini hanya contoh, bisa disesuaikan dengan kebutuhan.
        }

        return view('auth.userprofile.index', compact('user'));
    }
}



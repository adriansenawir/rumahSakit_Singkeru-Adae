<?php

// app/Http/Controllers/UserListController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserListController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query();

        // Handle search
        if ($request->has('search')) {
            $query->where(function ($query) use ($request) {
                $query->where('username', 'like', '%' . $request->input('search') . '%')
                    ->orWhere('email', 'like', '%' . $request->input('search') . '%');
            });
        }

        // Handle role filter
        if ($request->has('role_filter')) {
            $query->where('role', $request->input('role_filter'));
        }

        // Get the results
        $users = $query->get();

        return view('auth.userlist.index', compact('users'));
    }
    

    public function show($userId)
    {
        $user = User::find($userId);
    
        if (!$user) {
            // User tidak ditemukan, mungkin hendak menampilkan error atau redirect ke halaman lain.
            return abort(404); // Ini hanya contoh, bisa disesuaikan dengan kebutuhan.
        }
    
        return view('auth.userlist.show', compact('user'));
    }

    public function destroy($userId)
    {
        $user = User::find($userId);

        if (!$user) {
            // User tidak ditemukan, mungkin hendak menampilkan error atau redirect ke halaman lain.
            return abort(404); // Ini hanya contoh, bisa disesuaikan dengan kebutuhan.
        }

        // Lakukan penghapusan user
        $user->delete();

        // Redirect kembali ke halaman userlist dengan pesan sukses
        return redirect()->route('userlist.index')->with('success', 'User successfully deleted');
    }
    
}


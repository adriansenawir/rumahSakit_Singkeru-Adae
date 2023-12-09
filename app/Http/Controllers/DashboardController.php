<?php

// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class DashboardController extends Controller
{
    public function index()
    {
        // Pastikan bahwa user sudah login sebelum mengakses dashboard
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        
        if (auth()->user()->role == 'Dokter') {
            // Logika untuk menampilkan 5 pasien terbaru yang telah diperiksa
            $patients = []; // Gantilah ini dengan data pasien yang sesuai dari model atau repository
            return view('auth.dashboard.doctor', compact('patients'));
        } elseif (auth()->user()->role == 'Admin') {
            // Logika untuk menampilkan dokter yang sedang bertugas hari ini
            $doctors = []; // Gantilah ini dengan data dokter yang sesuai dari model atau repository
            return view('auth.dashboard.admin', compact('doctors'));
        } elseif (auth()->user()->role == 'Pasien') {
            // Logika untuk menampilkan tindakan & daftar obat yang telah diberikan oleh dokter
            $treatments = []; // Gantilah ini dengan data tindakan yang sesuai dari model atau repository
            $medicines = []; // Gantilah ini dengan data obat yang sesuai dari model atau repository
            return view('auth.dashboard.patient', compact('treatments', 'medicines'));
        } elseif (auth()->user()->role == 'Apoteker') {
            // Logika untuk menampilkan 5 obat yang paling sering dibeli
            $topMedicines = []; // Gantilah ini dengan data obat yang sesuai dari model atau repository
            return view('auth.dashboard.pharmacist', compact('topMedicines'));
        }

        // Logika default atau kesalahan pengaturan peran
        Log::info('User role: ' . auth()->user()->role); 
        return view('auth.dashboard.index');
    }
}

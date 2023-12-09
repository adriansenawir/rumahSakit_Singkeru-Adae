<!-- resources/views/auth/dashboard/index.blade.php -->

@extends('layouts.app')

@section('content')
    @if(auth()->user()->role == 'Dokter')
        <h1>Dashboard Dokter</h1>
        <!-- Tambahkan logika untuk menampilkan 5 pasien terbaru yang telah diperiksa -->
    @elseif(auth()->user()->role == 'Admin')
        <h1>Dashboard Admin</h1>
        <!-- Tambahkan logika untuk menampilkan dokter yang sedang bertugas hari ini -->
    @elseif(auth()->user()->role == 'Pasien')
        <h1>Dashboard Pasien</h1>
        <!-- Tambahkan logika untuk menampilkan tindakan & daftar obat yang telah diberikan oleh dokter -->
    @elseif(auth()->user()->role == 'Apoteker')
        <h1>Dashboard Apoteker</h1>
        <!-- Tambahkan logika untuk menampilkan 5 obat yang paling sering dibeli -->
    @endif
    
@endsection

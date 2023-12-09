<!-- resources/views/auth/userprofile/index.blade.php -->

@extends('layouts.app_user')

@section('content')
    <div class="container mt-5">
        <h1>Profil Pengguna</h1>

        @isset($user)
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Informasi Pengguna</h5>
                    <ul>
                        <li><strong>Nama:</strong> {{ $user->username }}</li>
                        <li><strong>Email:</strong> {{ $user->email }}</li>
                        <li><strong>Role:</strong> {{ $user->role }}</li>
                        <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                    </ul>
                </div>
            </div>
        @else
            <p>Pengguna tidak ditemukan.</p>
        @endisset
    </div>
@endsection

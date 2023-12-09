<!-- resources/views/auth/userlist/show.blade.php -->

@extends('layouts.app_user')

@section('content')
    <div class="container mt-5">
        <h2>User Details</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Userr Information</h5>
                <ul>
                    <li><strong>Name:</strong> {{ $user->username }}</li>
                    <li><strong>Email:</strong> {{ $user->email }}</li>
                    <li><strong>Role:</strong> {{ $user->role }}</li>
                    <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                </ul>
            </div>
        </div>

    </div>
@endsection

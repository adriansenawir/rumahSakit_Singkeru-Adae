@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        Dashboard
                    </h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard.index') }}">
                                <i class="fas fa-home"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('userlist.index') }}">
                                <i class="fas fa-user"></i> User List
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('medicinelist.index') }}">
                                <i class="fas fa-pills"></i> Medicine List
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('medicalrecord.index') }}">
                                <i class="fas fa-notes-medical"></i> Medical Records
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('userprofile.index') }}">
                                <i class="fas fa-id-card"></i> User Profile
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Konten Utama -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="container mt-5">
                    <h2 class="mb-4">Dashboard</h2>

                    <!-- Konten Dashboard Anda Disini -->
                </div>
            </main>
        </div>
    </div>
@endsection

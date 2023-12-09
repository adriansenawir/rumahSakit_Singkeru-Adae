<!-- resources/views/sidebar.blade.php -->

<style>
    #sidebar {
    width: 250px; 
    position: fixed;
    height: 85%; 
    }
</style>

<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            Dashboard
        </h5>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.index') }}">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
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
                    <i class="fas fa-notes-medical"></i> Medical Records of Each Patient
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('userprofile.index') }}">
                    <i class="fas fa-user-circle"></i> User Profile
                </a>
            </li>
        </ul>
    </div>
</nav>


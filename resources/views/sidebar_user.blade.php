<!-- resources/views/sidebar_user.blade.php -->

<style>
    #sidebar {
    width: 250px; 
    position: fixed;
    height: 85%; 
    }
    .btn1 {
    background-color: #198754;
    padding: 14px 40px;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 2px;
    cursor: pointer;
    border-radius: 10px;
    border: 2px dashed #198754;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    transition: .4s;
    }

    .btn1 span:last-child {
    display: none;
    }

    .btn1:hover {
    transition: .4s;
    border: 2px dashed #198754;
    background-color: #fff;
    color: #198754;
    }

    .btn1:active {
    background-color: #87dbd0;
    }
</style>

<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            ADMIN
        </h5>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.index') }}">
                    <!-- <i class="fas fa-tachometer-alt"></i> Dashboard -->
                    <button class="btn1"> Dashboard </button>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('userlist.index') }}">
                    <button class="btn1">`    UserList    `</button>
                </a>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('userprofile.index') }}">
                    <button class="btn1"> UserProfile </button>
                </a>
            </li>
        </ul>
    </div>
</nav>


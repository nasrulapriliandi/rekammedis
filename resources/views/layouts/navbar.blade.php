<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <ul class="navbar-nav navbar-right ml-auto">
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                {{-- <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1"> --}}
                <div class="d-sm-none d-lg-inline-block">Hai, {{Auth::user()->name}}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="features-profile.html" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
            </div>
        </li>
    </ul>
</nav>

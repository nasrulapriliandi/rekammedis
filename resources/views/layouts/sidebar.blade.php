<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <br>
            <img alt="image" width="50" src="{{ asset('') }}assets/img/logo.jpg" >
            <br>
            <a href="{{ url('/') }}">
                <div>Klinik Umum</div>
                <div class="p-0">Dokter Teguh</div>
            </a>
        </div>
        <ul class="sidebar-menu">
            {{-- <li class="menu-header">Dashboard</li> --}}
            <br>
            @if(Auth::user()->level == 'admin')
                <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.index') }}"><i class="fas fa-home"></i><span>Dashboard Admin</span></a>
                </li>

                <li class="{{ Request::is('pasien') ? 'active' : '' }}">
                    <a href="{{ route('pasien.index') }}" class="nav-link"><i class="fas fa-user-friends"></i><span>Data Pasien</span></a>
                </li>

                <li class="{{ Request::is('diagnosa') ? 'active' : '' }}">
                    <a href="{{ route('diagnosa.index') }}" class="nav-link"><i class="fas fa-briefcase-medical"></i><span>Data Diagnosa</span></a>
                </li>

                <li class="{{ Request::is('obat') ? 'active' : '' }}">
                    <a href="{{ route('obat.index') }}" class="nav-link"><i class="fas fa-pills"></i><span>Data Obat</span></a>
                </li>
                <li class="{{ Request::is('rekammedis') ? 'active' : '' }}">
                    <a href="{{ route('admin.rekammedis') }}" class="nav-link"><i class="fas fa-file-medical"></i><span>Hasil Rekam Medis</span></a>
                </li>
            @else
                <li class="{{ Request::is('rekammedis') ? 'active' : '' }}">
                    <a href="{{ route('rekammedis.index') }}" class="nav-link"><i class="fas fa-file-medical"></i><span>Rekam Medis</span></a>
                </li>
            @endif
            <li>
                <a href="{{ route('logout') }}" class="nav-link"><i class="fas fa-power-off"></i><span>Logout</span></a>
            </li>
        </ul>
    </aside>
</div>

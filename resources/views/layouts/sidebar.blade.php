<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <br>
            <img alt="image" width="50" src="{{ asset('') }}assets/img/logo.jpg" >
            <br>
            <a href="{{ url('dashboard') }}">Klinik Umum DR.Teguh</a>
        </div>
        <ul class="sidebar-menu">
            {{-- <li class="menu-header">Dashboard</li> --}}
            <br>
            @if(Auth::user()->level == 'admin')
                <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                    <a class="nav-link" href="#"><i class="fas fa-home"></i><span>Dashboard Admin</span></a>
                </li>

                <li class="{{ Request::is('pasien') ? 'active' : '' }}">
                    <a href="{{ route('pasien.index') }}" class="nav-link"><i class="fas fa-columns"></i><span>Data Pasien</span></a>
                </li>

                <li class="{{ Request::is('diagnosa') ? 'active' : '' }}">
                    <a href="{{ route('diagnosa.index') }}" class="nav-link"><i class="fas fa-columns"></i><span>Data Diagnosa</span></a>
                </li>

                <li class="{{ Request::is('obat') ? 'active' : '' }}">
                    <a href="{{ route('obat.index') }}" class="nav-link"><i class="fas fa-columns"></i><span>Data Obat</span></a>
                </li>
                <li class="{{ Request::is('katalog') ? 'active' : '' }}">
                    <a href="{{ route('rekammedis.index') }}" class="nav-link"><i class="fas fa-columns"></i><span>Rekam Medis</span></a>
                </li>
            @endif
        </ul>
    </aside>
</div>
<div>
    <div class="main-sidebar">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="{{ route('dashboard') }}">Stisla</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="{{ route('dashboard') }}">St</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Index</li>
                <li class="">
                    <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fire"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>

                <li class="menu-header">Menu</li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="fas fa-columns"></i>
                        <span>
                            Bulk Stamping
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('upload-csv') }}">Upload CSV</a></li>
                        <li><a class="nav-link" href="{{ route('generate-snqr') }}">Generate SN-QR</a></li>
                        <li><a class="nav-link" href="{{ route('stamping') }}">Stamping</a></li>
                    </ul>
                </li>
            </ul>

        </aside>
    </div>
</div>

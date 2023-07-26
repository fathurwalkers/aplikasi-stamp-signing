<div>
    <div class="main-sidebar">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="index.html">Stisla</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="index.html">St</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li class="">
                    <a class="nav-link" href="#"><i class="fas fa-fire"></i>
                        <span>
                            Beranda
                        </span>
                    </a>
                </li>

                <li class="menu-header">Menu</li>
                <li class="">
                    <a class="nav-link" href="#"><i class="fas fa-fire"></i>
                        <span>
                            Pengaduan
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="nav-link" href="#"><i class="fas fa-fire"></i>
                        <span>
                            Pembuatan Surat
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="nav-link" href="#"><i class="fas fa-fire"></i>
                        <span>
                            Informasi Anggaran
                        </span>
                    </a>
                </li>
                <li class="">
                    <a class="nav-link" href="#"><i class="fas fa-fire"></i>
                        <span>
                            Kritik dan Saran
                        </span>
                    </a>
                </li>
                {{-- @if ($users->login_level == 'admin') --}}
                <li class="">
                    <a class="nav-link" href="#"><i class="fas fa-fire"></i>
                        <span>
                            Pemberitaan
                        </span>
                    </a>
                </li>
                {{-- @endif --}}
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="#" class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-rocket"></i> Halaman Utama
                </a>
            </div>
        </aside>
    </div>
</div>

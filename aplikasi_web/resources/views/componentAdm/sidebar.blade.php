<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary bg-navy elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel d-flex p-3">
            <img src="{{ asset('storage/image/logoBray.jpeg') }}" class="img-circle w-25" alt="logo" srcset="">
            <h2 class="text-center m-3 text-white">BrayNet</h2>
        </div>
        <div class="">
            <h4 class="text-center m-3 text-white">Dashboard</h4>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="/admin" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/adminKlien" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Klien
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/adminPaket" class="nav-link">
                        <i class="nav-icon fas fa-wifi"></i>
                        <p>
                            Paket
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/adminInstalasi" class="nav-link">
                        <i class="nav-icon fa-solid fa-money-bills"></i>
                        <p>
                            Instalasi
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/adminPembayaran" class="nav-link">
                        <i class="nav-icon fa-solid fa-money-bills"></i>
                        <p>
                            Pembayaran
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/adminPromo" class="nav-link">
                        <i class="nav-icon fa-solid fa-rectangle-ad"></i>
                        <p>
                            Promo
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/adminSetting" class="nav-link">
                        <i class="nav-icon fas fa-gear"></i>
                        <p>
                            Setting
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-power-off"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->

</aside>

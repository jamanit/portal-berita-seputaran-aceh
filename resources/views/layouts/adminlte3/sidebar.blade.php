<aside class="main-sidebar sidebar-dark-danger elevation-4">
    <!-- Brand Logo -->
    <ul class="nav nav-pills nav-sidebar flex-column mt-2" style="align-items: center;">
        <li class="nav-item">
            <a href="/" class="nav-link active">
                <span class="brand-text"><img src="{{ asset('/') }}img/default/logo-longsquare-bck.png" alt=""
                        width="150px" height="30"></span>
            </a>
        </li>
    </ul>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Sidebar user panel (optional) -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>{{ Auth::user()->name }}</p>
                    </a>
                </li>

                <!-- SidebarSearch Form -->
                <div class="form-inline" style="width: 100%">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Cari"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>{{ __('Beranda') }}</p>
                    </a>
                </li>
                <li class=" nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>{{ __('Data Master') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('account') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('Akun') }}</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('category') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('Kategori') }}</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('medsos') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('Media Sosial') }}</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('visitor') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('Pengunjung') }}</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('about/edit/1') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('Tentang') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ url('news') }}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>{{ __('Berita') }}</p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="{{ url('report') }}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>{{ __('Laporan') }}</p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-logout">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>{{ __('Keluar') }}</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Main Sidebar Container -->
@include('layouts.adminlte3.logout-modal')
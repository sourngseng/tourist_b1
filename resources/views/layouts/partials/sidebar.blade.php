<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('assets') }}/index3.html" class="brand-link">
        <img src="{{ asset('assets') }}/dist/img/AdminLTELogo.png" alt="AdminBBU Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin BBU</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.services')}}" class="nav-link">
                        {{-- <i class="nav-icon fas fa-th"></i> --}}
                        <i class="nav-ico fa fa-truck"></i>
                        <p>
                            Manage Services
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.packages') }}" class="nav-link">
                        {{-- <i class="nav-icon fas fa-th"></i> --}}
                        <i class="nav-icon fa fa-hand-holding-heart"></i>
                        <p>
                            Manage Package
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.destinations') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Manage Destinations
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.bookings') }}" class="nav-link">
                        <i class="nav-icon fas fa-calendar"></i>
                        <p>
                            Manage Booking
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.guides') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Manage Guides
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.clients') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Manage Testimonals
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../charts/chartjs.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ChartJS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../charts/flot.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Flot</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../charts/inline.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inline</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../charts/uplot.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>uPlot</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar">
                <div class="navbar-header">
                    <div class="inner-topbar d-flex">
                        <div class="logo">
                            <h1>
                                <a href="index.php">
                                    <img src="{{ asset('assets/images/GroundUp_logo_dark.png') }}" class="dark-logo">
                                    <img src="{{ asset('assets/images/GroundUp_logo_light.png') }}" class="light-logo">
                                </a>
                            </h1>
                        </div>
                        <div class="nav-menu">
                            <div class="nav-menu-left">
                                <ul class="d-flex">
                                    <li>
                                        <a href="/admin/dashboard">Overview</a>
                                    </li>
                                    <li>
                                        <a href="/admin/assets">Assest</a>
                                    </li>
                                    <li>
                                        <a href="/admin/production">Production</a>
                                    </li>
                                    <li>
                                        <a href="/admin/insight">Insight</a>
                                    </li>
                                    <li>
                                        <a href="/admin/maintenence">Maintenence</a>
                                    </li>
                                    <li>
                                        <a href="/admin/report">Report</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="nav-menu-right">
                                <div class="color-mode">
                                    <a href="#" id="change-color-mode">Light Mode</a>
                                </div>
                                <div class="about-user">
                                    <div class="notification-container">
                                        <span class="bell-icon">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="admin-profile-container dropdownPart">
                                        @guest('admin')
                                            <div class="welcome-user">
                                                <a href="{{ route('admin.auth.login') }}">Login</a>
                                            </div>
                                        @else
                                            <div class="welcome-user">
                                                Welcome, <span class="name">{{ Auth::user()->name }}</span>
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            </div>
                                            <div class="dropdown_box">
                                                <ul class="m-0 p-0 list-unstyled">
                                                    <li>
                                                        <a href="{{ route('admin.auth.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a>
                                                        <form id="logout-form" action="{{ route('admin.auth.logout') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>                                        
                                                    </li>
                                                </ul>
                                            </div>
                                        @endguest
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                </div>
            </nav>
        </header>
        

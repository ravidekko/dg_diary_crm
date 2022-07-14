<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{ asset('public/assets/images/users/user-1.jpg') }}" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Dashboard</li>

                <li class="{{ (request()->segment(1) == '' || request()->segment(1) == 'home') ? 'menuitem-active' : '' }}">
                    <a href="{{ URL('/home') }}" class=" {{ (request()->segment(1) == '' || request()->segment(1) == 'home') ? 'active' : '' }}">
                        <i data-feather="airplay"></i>
                        <!-- <span class="badge bg-success rounded-pill float-end">4</span> -->
                        <span> Dashboards </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Master</li>

                <li class="{{ (request()->segment(2) == 'school_types') ? 'menuitem-active' : '' }}">
                    <a href="{{ URL('admin/school_types') }}" class="{{ (request()->segment(1) == '' || request()->segment(1) == 'home') ? 'active' : '' }}">
                        <i data-feather="calendar"></i>
                        <span> School Type </span>
                    </a>
                </li>

                <li>
                    <a href="{{ URL('school_types') }}">
                        <i data-feather="calendar"></i>
                        <span> School Level </span>
                    </a>
                </li>

                <li>
                    <a href="{{ URL('school_types') }}">
                        <i data-feather="calendar"></i>
                        <span> Country </span>
                    </a>
                </li>


                <li>
                    <a href="{{ URL('school_types') }}">
                        <i data-feather="calendar"></i>
                        <span> Area </span>
                    </a>
                </li>

                <li>
                    <a href="{{ URL('school_types') }}">
                        <i data-feather="calendar"></i>
                        <span> Status </span>
                    </a>
                </li>

                <li>
                    <a href="{{ URL('school_types') }}">
                        <i data-feather="calendar"></i>
                        <span> Roles </span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
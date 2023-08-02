<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="header-bg-image"></div>

    <div class="d-flex align-items-center justify-content-between">
        <a href="dashboard" class="logo d-flex align-items-center">
            <img src="assets/img/plant.png" alt="">
            <span class="d-none d-lg-block" style="color: #FFFF">IoT Vegetable</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn" style="color: #FFFF"></i>
    </div><!-- End Logo -->
    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle" href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" style="color: #FFFF" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-person"></i>
                    <span class="d-none d-md-block dropdown-toggle ps-2" style="color: #FFFF">USER</span>
                </a><!-- End Profile Image Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" style="color: #FFFF">
                    <li>
                        <form action="{{ route('postLogin') }}" method="post">
                            @csrf
                            <button class="dropdown-item d-flex align-items-center" type="submit">
                                <i class="bi bi-person"></i>
                                <span>Login Admin</span>
                            </button>
                        </form>
                    </li>
                    @auth
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="dropdown-item d-flex align-items-center" type="submit">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Log Out</span>
                            </button>
                        </form>
                    </li>
                    @endauth

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header>
<aside id="sidebar" class="sidebar">
    <div class="sidebar-bg-image"></div>

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">

            <a class="nav-link " href="dashboard" style="color: #227C70;">
                <i class="bi bi-grid" style="color:#227C70;"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" style="color: #227C70;" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide" style="color: #227C70;"></i><span>Hasil Sensor Tanah</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="tanahsubur" class="nav-link" style="color: #227C70;">
                        <i class="bi bi-circle"></i><span>Tanah Subur</span>
                    </a>
                </li>
                <li>
                    <a href="tanahkering" class="nav-link" style="color: #227C70;">
                        <i class="bi bi-circle"></i><span>Tanah Kering</span>
                    </a>
                </li>
                <li>
                    <a href="tanahbasah" class="nav-link" style="color: #227C70;">
                        <i class="bi bi-circle"></i><span>Tanah Basah</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" style="color: #227C70;" href=" {{ route('datasayuran') }} ">
                <i class="ri-seedling-line" style="color: #227C70;"></i>
                <span>Tanaman Sayuran</span>
            </a>
        </li><!-- End Register Page Nav -->

        <!--
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Tanaman Sayuran</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="forms-elements.html">
                        <i class="bi bi-circle"></i><span>Family Solanaceae</span>
                    </a>
                </li>
                <li>
                    <a href="forms-layouts.html">
                        <i class="bi bi-circle"></i><span>Family Fabaceae</span>
                    </a>
                </li>
                <li>
                    <a href="forms-editors.html">
                        <i class="bi bi-circle"></i><span>Family Poaceae</span>
                    </a>
                </li>
            </ul>
        </li> End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" style="color: #227C70;" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart-line" style="color: #227C70;"></i><span>Hasil Penentuan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('ahpsubur') }}" class="nav-link" style="color: #227C70;">
                        <i class="bi bi-circle"></i><span>Tanah Subur</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('ahpkering') }}" class="nav-link" style="color: #227C70;">
                        <i class="bi bi-circle"></i><span>Tanah Kering</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('ahpbasah') }}" class="nav-link" style="color: #227C70;">
                        <i class="bi bi-circle"></i><span>Tanah Basah</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" style="color: #227C70;" href=" {{ route('rekomendasi') }} ">
                <i class="ri-seedling-line" style="color: #227C70;"></i>
                <span>Rekomendasi Tanaman</span>
            </a>
        </li><!-- End Tables Nav -->
    </ul>
</aside>
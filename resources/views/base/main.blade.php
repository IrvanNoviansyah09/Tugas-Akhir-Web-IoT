<!DOCTYPE html>
<html lang="en">

@include('base.head')

<body>

    <!-- ======= Header ======= -->
    @include('base.header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('base.sidebar')
    <!-- End Sidebar-->

    <!-- main page -->
    @yield ('content')
    <!-- End #main -->
    @stack('scripts')

    <!-- ======= Footer ======= -->
    @include('base.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('base.script')

    <style>
        body {
            background-color: #E8FFEF;
        }

        .header {
            background: linear-gradient(135deg, #34BA89, #50DBA8, #5CD767);
            /* Mengatur gradasi warna hijau dan biru */
        }
        .header-bg-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("assets/img/elemen2.png");
            /* Mengatur gambar latar belakang */
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            opacity: 0.3;
            /* Mengatur opasitas gambar latar belakang */
            pointer-events: none;
            /* Mengatur elemen tidak menanggapi event */
            z-index: -1;
            /* Mengatur lapisan latar belakang di bawah konten lain */
        }


        .sidebar {
            background: linear-gradient(190deg, #34BA89, #50DBA8, #5CD767);
            /* Ubah ke biru muda */
        }

        .sidebar-bg-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("assets/img/elemen.png");
            /* Mengatur gambar latar belakang */
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            opacity: 0.3;
            /* Mengatur opasitas gambar latar belakang */
            pointer-events: none;
            /* Mengatur elemen tidak menanggapi event */
            z-index: -1;
            /* Mengatur lapisan latar belakang di bawah konten lain */
        }

        /*h1,
        p {
            color: orange;
             Ubah ke oranye
        } */
    </style>

</body>

</html>
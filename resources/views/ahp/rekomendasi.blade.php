@extends('base.main')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>REKOMENDASI</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Internet of Things Vegetable Plants</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-11">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Rekomendasi 3 Tanaman pada Tanah Subur</h5>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Ini adalah rekomendasi tiga teratas tanaman berdasarkan hasil sensor dan seleksi AHP</li>
                            </ol>

                            <!-- Bar Chart -->
                            @if(!empty($rankingSubur) && count($rankingSubur) > 0)
                            @php
                            $rankingSubur = session('rankingSubur');
                            $limitedRanking = array_slice($rankingSubur, 0, 3); // Limit the ranking array to the top 3 plants
                            $plantNames1 = [];
                            $priorities1 = [];
                            foreach ($limitedRanking as $item) {
                            $plantNames1[] = $item['nama_tanaman1'];
                            $priorities1[] = $item['total_prioritas1'];
                            }
                            @endphp
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-body table-responsive p-0" style="height: 300px;">
                                        <canvas id="barChart1" style="max-height: 400px; display: block; box-sizing: border-box; height: 390px; width: 100%;"></canvas>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <table id="example1" class="table table-bordered table-hover table-head-fixed">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Tanaman</th>
                                                <th>Prioritas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($limitedRanking as $index => $item)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $item['nama_tanaman1'] }}</td>
                                                <td>{{ $item['total_prioritas1'] }}</td>
                                            </tr>
                                            @endforeach
                                            <!-- Hide additional rows initially -->
                                            @foreach(array_slice($rankingSubur, 3) as $index => $item)
                                            <tr class="hide-row">
                                                <td>{{ $index + 4 }}</td>
                                                <td>{{ $item['nama_tanaman1'] }}</td>
                                                <td>{{ $item['total_prioritas1'] }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button id="tampilkanSemuaBtn1" class="btn btn-success">Tampilkan Semua</button>
                                </div>
                            </div>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    const tampilkanSemuaBtn1 = document.getElementById("tampilkanSemuaBtn1");
                                    const tableRows1 = document.querySelectorAll("#example1 tbody tr");
                                    const hideRowsClass1 = "hide-row";
                                    let isAllShown1 = false;

                                    // Menangani klik tombol "Tampilkan Semua"
                                    tampilkanSemuaBtn1.addEventListener("click", () => {
                                        if (isAllShown1) {
                                            // Kembali ke tampilan sebelumnya
                                            tableRows1.forEach((row, index) => {
                                                if (index >= 3) {
                                                    row.classList.add(hideRowsClass1);
                                                }
                                            });
                                            tampilkanSemuaBtn1.textContent = "Tampilkan Semua";
                                        } else {
                                            // Tampilkan semua baris
                                            tableRows1.forEach(row => row.classList.remove(hideRowsClass1));
                                            tampilkanSemuaBtn1.textContent = "Kembali";
                                        }
                                        isAllShown1 = !isAllShown1;
                                    });

                                    new Chart(document.querySelector('#barChart1'), {
                                        type: 'bar',
                                        data: {
                                            labels: @json($plantNames1),
                                            datasets: [{
                                                label: 'Nilai Prioritas',
                                                data: @json($priorities1),
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)',
                                                    'rgba(255, 205, 86, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgb(255, 99, 132)',
                                                    'rgb(255, 159, 64)',
                                                    'rgb(255, 205, 86)'
                                                ],
                                                borderWidth: 2
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                });
                            </script>
                            @else
                            <p>Tidak ada data perankingan yang tersedia.</p>
                            @endif
                            <!-- End Bar Chart -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-11">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Rekomendasi 3 Tanaman pada Tanah Kering</h5>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Ini adalah rekomendasi tiga teratas tanaman berdasarkan hasil sensor dan seleksi AHP</li>
                            </ol>

                            @if(!empty($rankingKering) && count($rankingKering) > 0)
                            @php
                            $rankingKering = session('rankingKering');
                            $limitedRanking = array_slice($rankingKering, 0, 3); // Limit the ranking array to the top 3 plants
                            $plantNames3 = [];
                            $priorities3 = [];
                            foreach ($limitedRanking as $item) {
                            $plantNames3[] = $item['nama_tanaman3'];
                            $priorities3[] = $item['total_prioritas3'];
                            }
                            @endphp
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-body table-responsive p-0" style="height: 300px;">
                                        <canvas id="barChart2" style="max-height: 400px; display: block; box-sizing: border-box; height: 390px; width: 100%;"></canvas>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <table id="example2" class="table table-bordered table-hover table-head-fixed">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Tanaman</th>
                                                <th>Prioritas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($limitedRanking as $index => $item)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $item['nama_tanaman3'] }}</td>
                                                <td>{{ $item['total_prioritas3'] }}</td>
                                            </tr>
                                            @endforeach
                                            @foreach(array_slice($rankingKering, 3) as $index => $item)
                                            <tr class="hide-row">
                                                <td>{{ $index + 4 }}</td>
                                                <td>{{ $item['nama_tanaman3'] }}</td>
                                                <td>{{ $item['total_prioritas3'] }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button id="tampilkanSemuaBtn2" class="btn btn-success">Tampilkan Semua</button>
                                </div>
                            </div>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    const tampilkanSemuaBtn2 = document.getElementById("tampilkanSemuaBtn2");
                                    const tableRows2 = document.querySelectorAll("#example2 tbody tr");
                                    const hideRowsClass2 = "hide-row";
                                    let isAllShown2 = false;

                                    // Menangani klik tombol "Tampilkan Semua"
                                    tampilkanSemuaBtn2.addEventListener("click", () => {
                                        if (isAllShown2) {
                                            // Kembali ke tampilan sebelumnya
                                            tableRows2.forEach((row, index) => {
                                                if (index >= 3) {
                                                    row.classList.add(hideRowsClass2);
                                                }
                                            });
                                            tampilkanSemuaBtn2.textContent = "Tampilkan Semua";
                                        } else {
                                            // Tampilkan semua baris
                                            tableRows2.forEach(row => row.classList.remove(hideRowsClass2));
                                            tampilkanSemuaBtn2.textContent = "Kembali";
                                        }
                                        isAllShown2 = !isAllShown2;
                                    });

                                    new Chart(document.querySelector('#barChart2'), {
                                        type: 'bar',
                                        data: {
                                            labels: @json($plantNames3),
                                            datasets: [{
                                                label: 'Nilai Prioritas',
                                                data: @json($priorities3),
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)',
                                                    'rgba(255, 205, 86, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgb(255, 99, 132)',
                                                    'rgb(255, 159, 64)',
                                                    'rgb(255, 205, 86)'
                                                ],
                                                borderWidth: 2
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                });
                            </script>
                            @else
                            <p>Tidak ada data perankingan yang tersedia.</p>
                            @endif

                        </div>
                    </div>
                </div>

                <div class="col-lg-11">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Rekomendasi 3 Tanaman pada Tanah Basah</h5>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Ini adalah rekomendasi tiga teratas tanaman berdasarkan hasil sensor dan seleksi AHP</li>
                            </ol>

                            @if(!empty($rankingBasah) && count($rankingBasah) > 0)
                            @php
                            $rankingBasah = session('rankingBasah');
                            $limitedRanking = array_slice($rankingBasah, 0, 3); // Limit the ranking array to the top 3 plants
                            $plantNames2 = [];
                            $priorities2 = [];
                            foreach ($limitedRanking as $item) {
                            $plantNames2[] = $item['nama_tanaman2'];
                            $priorities2[] = $item['total_prioritas2'];
                            }
                            @endphp
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-body table-responsive p-0" style="height: 300px;">
                                        <canvas id="barChart3" style="max-height: 400px; display: block; box-sizing: border-box; height: 390px; width: 100%;"></canvas>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <table id="example3" class="table table-bordered table-hover table-head-fixed">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Tanaman</th>
                                                <th>Prioritas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($limitedRanking as $index => $item)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $item['nama_tanaman2'] }}</td>
                                                <td>{{ $item['total_prioritas2'] }}</td>
                                            </tr>
                                            @endforeach
                                            @foreach(array_slice($rankingBasah, 3) as $index => $item)
                                            <tr class="hide-row">
                                                <td>{{ $index + 4 }}</td>
                                                <td>{{ $item['nama_tanaman2'] }}</td>
                                                <td>{{ $item['total_prioritas2'] }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button id="tampilkanSemuaBtn3" class="btn btn-success">Tampilkan Semua</button>
                                </div>
                            </div>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    const tampilkanSemuaBtn3 = document.getElementById("tampilkanSemuaBtn3");
                                    const tableRows3 = document.querySelectorAll("#example3 tbody tr");
                                    const hideRowsClass3 = "hide-row";
                                    let isAllShown3 = false;

                                    // Menangani klik tombol "Tampilkan Semua"
                                    tampilkanSemuaBtn3.addEventListener("click", () => {
                                        if (isAllShown3) {
                                            // Kembali ke tampilan sebelumnya
                                            tableRows3.forEach((row, index) => {
                                                if (index >= 3) {
                                                    row.classList.add(hideRowsClass3);
                                                }
                                            });
                                            tampilkanSemuaBtn3.textContent = "Tampilkan Semua";
                                        } else {
                                            // Tampilkan semua baris
                                            tableRows3.forEach(row => row.classList.remove(hideRowsClass3));
                                            tampilkanSemuaBtn3.textContent = "Kembali";
                                        }
                                        isAllShown3 = !isAllShown3;
                                    });


                                    new Chart(document.querySelector('#barChart3'), {
                                        type: 'bar',
                                        data: {
                                            labels: @json($plantNames2),
                                            datasets: [{
                                                label: 'Nilai Prioritas',
                                                data: @json($priorities2),
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)',
                                                    'rgba(255, 205, 86, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgb(255, 99, 132)',
                                                    'rgb(255, 159, 64)',
                                                    'rgb(255, 205, 86)'
                                                ],
                                                borderWidth: 2
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                });
                            </script>
                            @else
                            <p>Tidak ada data perankingan yang tersedia.</p>
                            @endif

                        </div>
                    </div>
                </div>
                <style>
                    .hide-row {
                        display: none;
                    }
                </style>


            </div><!-- End Row -->

        </div><!-- End Container -->
    </section><!-- End Content -->

</main><!-- End #main -->
@endsection
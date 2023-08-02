@extends('base.main')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>HASIL AHP TANAH KERING</h1>
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
                        <!--<div class="card-header">
                            <h2 class="card-title">Data Hasil AHP pada Tanah subur</h2>
                        </div>
                        
                        <button type="button" class="btn btn-primary" id="hitung-ahp"><i class="bi bi-grid-3x3-gap"></i> Hitung AHP</button>

                        <div id="areaChart"></div>-->

                        <!-- /.card-body -->
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Data Hasil AHP pada Tanah Kering</h3>
                        </div>
                        <div class="card-body">
                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                @if(!empty($rankingKering) && count($rankingKering) > 0)
                                <table id="example2" class="table table-bordered table-hover table-head-fixed">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Tanaman</th>
                                            <th>Prioritas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($rankingKering as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item['nama_tanaman3'] }}</td>
                                            <td>{{ $item['total_prioritas3'] }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                <p>Tidak ada data perankingan yang tersedia.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <div class="col-lg-11">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Bar Chart AHP Tanah Kering</h5>

                <!-- Bar Chart -->
                @if(!empty($rankingKering) && count($rankingKering) > 0)
                <canvas id="barChart" style="max-height: 400px; display: block; box-sizing: border-box; height: 390px; width: 781px;" width="781" height="390"></canvas>
                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        new Chart(document.querySelector('#barChart'), {
                            type: 'bar',
                            data: {
                                labels: [
                                    @foreach($rankingKering as $item)
                                    "{{ $item['nama_tanaman3'] }}",
                                    @endforeach
                                ],
                                datasets: [{
                                    label: 'Nilai Prioritas',
                                    data: [
                                        @foreach($rankingKering as $item)
                                        "{{ $item['total_prioritas3'] }}",
                                        @endforeach
                                    ],
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(255, 159, 64, 0.2)',
                                        'rgba(255, 205, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(201, 203, 207, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgb(255, 99, 132)',
                                        'rgb(255, 159, 64)',
                                        'rgb(255, 205, 86)',
                                        'rgb(75, 192, 192)',
                                        'rgb(54, 162, 235)',
                                        'rgb(153, 102, 255)',
                                        'rgb(201, 203, 207)'
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
                @php
                    session(['rankingKering' => $rankingKering]);
                    @endphp
                    <a href = "{{ route('rekomendasi') }}" > Lihat Rekomendasi </a>
                        
                @else
                <p>Tidak ada data perankingan yang tersedia.</p>
                @endif
                <!-- End Bar Chart -->
            </div>
        </div>
    </div>
</main>
</section>
@endsection
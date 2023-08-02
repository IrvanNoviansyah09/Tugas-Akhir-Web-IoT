@extends('base.main')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>HASIL SENSOR TANAH</h1>
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
                        <div class="card-header">
                            <h2 class="card-title">Data Hasil Sensor pada Tanah Kering</h2>
                            <div class="float-right">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="accordion accordion-flush" id="faq-group-2">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-1" type="button" data-bs-toggle="collapse" aria-expanded="false">
                                                        *Informasi tingkat kesuburan ideal pada suatu tanah
                                                    </button>
                                                </h2>
                                                <div id="faqsTwo-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-2" style="">
                                                    <div class="accordion-body">
                                                        Kandungan pH, kelembaban tanah, suhu udara, dan suhu tanah yang dianggap ideal dapat bervariasi tergantung pada jenis tanaman atau tanaman yang Anda pertimbangkan. Namun, berikut adalah beberapa nilai umum yang sering dianggap sebagai rentang ideal:
                                                        Rentang pH tanah yang umumnya dianggap ideal adalah antara 6,0 hingga 7,0 untuk sebagian besar tanaman, rentang kelembaban tanah yang dianggap ideal adalah sekitar 50% hingga 75%, suhu udara antara 20°C hingga 25°C, suhu tanah antara 18°C hingga 24°C. nilai-nilai tersebut hanya merupakan panduan umum. (sumber : Kompas.com)
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('tkering.deleteAll') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus semua data?')">
                                        <i class="bi bi-arrow-repeat me-1"></i>Reset Data</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <!--
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">-->
                        <div class="card-body">
                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                <table id="example2" class="table table-bordered table-hover table-head-fixed">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>pH Tanah</th>
                                            <th>Kelembaban Tanah</th>
                                            <th>Suhu Tanah</th>
                                            <!--<th>Suhu Udara</th>-->
                                            <th>Waktu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_sensor3 as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->ph_tanah }}</td>
                                            <td>{{ $item->nilai_lembab }} %</td>
                                            <td>{{ $item->nilai_stanah }} °C</td>
                                            <!--<td>{{ $item->temperature }} °C</td>-->
                                            <td>{{ $item->created_at }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
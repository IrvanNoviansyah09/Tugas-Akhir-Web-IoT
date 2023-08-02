@extends('base.main')
@section('content')

<main id="main" class="main container-fluid">
    <div class="pagetitle">
        <h1>Edit Data Solana</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('datasayuran') }}">Data Sayuran</a></li>
                <li class="breadcrumb-item active">Edit Data Solana</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Form Edit Data Solana</h2>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="/updatesolana/{{ $data_sayur_solana->id }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama Tanaman</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $data_sayur_solana->nama }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="ph">pH Tanah</label>
                                    <input type="text" class="form-control" id="ph" name="ph" value="{{ $data_sayur_solana->ph }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="kelembaban">Kelembaban Tanah</label>
                                    <input type="text" class="form-control" id="kelembaban" name="kelembaban" value="{{ $data_sayur_solana->kelembaban }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="suhu_tanah">Suhu Tanah</label>
                                    <input type="text" class="form-control" id="suhu_tanah" name="suhu_tanah" value="{{ $data_sayur_solana->suhu_tanah }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="suhu_udara">Suhu Udara</label>
                                    <input type="text" class="form-control" id="suhu_udara" name="suhu_udara" value="{{ $data_sayur_solana->suhu_udara }}" required>
                                </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{ route('datasayuran') }}" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                        <!-- /.card-body -->

                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->

@endsection

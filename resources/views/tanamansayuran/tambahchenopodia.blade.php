@extends('base.main')
@section('content')
<main id="main" class="main">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambahkan data</h5>

            <!-- Horizontal Form -->
            <form class="row g-3 needs-validation" action="{{ route('simpandatachen') }}" method="post" novalidate>
                @csrf
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Tanaman</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText" name="nama">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ph" class="col-sm-2 col-form-label">Nilai pH</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ph" name="ph">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kelembaban" class="col-sm-2 col-form-label">Kelembaban</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kelembaban" name="kelembaban">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="suhu_tanah" class="col-sm-2 col-form-label">Suhu Tanah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="suhu_tanah" name="suhu_tanah">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="suhu_udara" class="col-sm-2 col-form-label">Suhu Udara</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="suhu_udara" name="suhu_udara">
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Tambah data</button>
                    <a href="{{ route('datasayuran') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form><!-- End Horizontal Form -->
        </div>
    </div>
</main>
@endsection

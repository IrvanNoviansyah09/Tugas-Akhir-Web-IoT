@extends('base.main')
@section('content')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>VEGETABLE FAMILY</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Internet of Things Vegetable Plants</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-15">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Family Solanaceae (Terong-Terongan) </h2>
                            @auth
                            <a href="{{ route('tambahsolana') }}" class="btn btn-success"> + Tambah Data</a>
                            @endauth
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Tanaman</th>
                                        <th>pH Tanah</th>
                                        <th>Kelembaban Tanah</th>
                                        <th>Suhu Tanah</th>
                                        <!--<th>Suhu Udara</th>-->
                                        @auth
                                        <th>Aksi</th>
                                        @endauth
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_sayur_solana as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->ph }}</td>
                                        <td>{{ $item->kelembaban }} %</td>
                                        <td>{{ $item->suhu_tanah }} °C</td>
                                        <!--<td>{{ $item->suhu_udara }} °C</td>-->
                                        <td>
                                            @auth
                                            <a href="/editsolana/{{ $item->id }}" class="btn btn-primary">Perbarui</a>
                                            <a href="/deletesolana/{{ $item->id }}" class="btn btn-danger">Hapus</a>
                                            @endauth
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-15">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Family Fabaceae (Kacang-kacangan) </h2>
                            @auth
                            <a href="{{ route('tambahfabaceae') }}" class="btn btn-success"> + Tambah Data</a>
                            @endauth
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Tanaman</th>
                                        <th>pH Tanah</th>
                                        <th>Kelembaban Tanah</th>
                                        <th>Suhu Tanah</th>
                                        <!--<th>Suhu Udara</th>-->
                                        @auth
                                        <th>Aksi</th>
                                        @endauth
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_sayur_fabaceae as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->ph }}</td>
                                        <td>{{ $item->kelembaban }} %</td>
                                        <td>{{ $item->suhu_tanah }} °C</td>
                                        <!--<td>{{ $item->suhu_udara }} °C</td>-->
                                        <td>
                                            @auth
                                            <a href="/editfabaceae/{{ $item->id }}" class="btn btn-primary">Perbarui</a>
                                            <a href="/deletefabaceae/{{ $item->id }}" class="btn btn-danger">Hapus</a>
                                            @endauth
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-15">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Family Poaceae (Tumbuhan Berbunga) </h2>
                            @Auth
                            <a href="{{ route('tambahchenopodia') }}" class="btn btn-success"> + Tambah Data</a>
                            @endauth
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Tanaman</th>
                                        <th>pH Tanah</th>
                                        <th>Kelembaban Tanah</th>
                                        <th>Suhu Tanah</th>
                                        <!--<th>Suhu Udara</th>-->
                                        @auth
                                        <th>Aksi</th>
                                        @endauth
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_sayur_chenopodia as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->ph }}</td>
                                        <td>{{ $item->kelembaban }} %</td>
                                        <td>{{ $item->suhu_tanah }} °C</td>
                                        <!--<td>{{ $item->suhu_udara }} °C</td>-->
                                        <td>
                                            @auth
                                            <a href="/editchenopodia/{{ $item->id }}" class="btn btn-primary">Perbarui</a>
                                            <a href="/deletechenopodia/{{ $item->id }}" class="btn btn-danger">Hapus</a>
                                            @endauth
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-15">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">INFORMASI TANAMAN</h5>

                            <!-- Slides with captions -->
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4" class=""></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5" class=""></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6" class=""></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7" class=""></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8" class=""></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9" class=""></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10" class=""></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="10" aria-label="Slide 11" class=""></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="11" aria-label="Slide 12" class=""></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="12" aria-label="Slide 13" class=""></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="13" aria-label="Slide 14" class=""></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="14" aria-label="Slide 15" class=""></button>

                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item carousel-item-next carousel-item-start">
                                        <img src="assets/img/cabe.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>CABAI (Solanaceae)</h5>
                                            <p>Cabai memiliki kandungan vitamin C, vitamin B6, vitamin K, kalium, tembaga, serta vitamin A.
                                                Cabai juga mengandung karotenoid, antioksidan, lutein, asam sinapic, dan asam ferulic yang dapat mencegah berbagai penyakit kronis seperti kanker.
                                                Sangat cocok untuk dibudidaya, baik dataran rendah maupun dataran tinggi.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/tomat.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>TOMAT (Solanaceae)</h5>
                                            <p>Tomat merupakan salah satu jenis sayuran buah yang banyak di konsumsi untuk olahan bumbu dapur dan kaya akan vitamin A dan Vitamin C.
                                                Manfaat tomat baik untuk kesehatan kulit, mata, hingga paru-paru. Khasiat ini sebagian berasal dari kandungan likopen, vitamin C, dan serat.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/kentang.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>KENTANG (Solanaceae)</h5>
                                            <p>Kentang mengandung nutrisi penting seperti vitamin B6 dan asam folat, yang berperan dalam produksi neurotransmitter yang penting untuk fungsi otak yang sehat.
                                                Konsumsi kentang dapat membantu meningkatkan konsentrasi dan memori. Zat gizi yang terdapat dalam kentang antara lain karbohidrat, mineral (besi, fosfor, magnesium, natrium, kalsium, dan kalium),
                                                protein, serta Page 2 9 vitamin terutama vitamin C dan B1. Selain itu, kentang juga mengandung lemak dalam jumlah yang relatif kecil, yaitu 1,0 – 1,5%</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/terong.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>TERONG (Solanaceae)</h5>
                                            <p>Ada beragam nutrisi yang bisa diperoleh dari terong, yaitu kalori, protein, karbohidrat, serat, dan lemak. Selain itu, terong juga mengandung beragam vitamin dan mineral,
                                                seperti asam folat, vitamin A, vitamin C, Vitamin K, kalium, kalsium, zat besi, dan magnesium. Dapat membantu tubuh dalam mengatasi gangguan pencernaan, seperti sembelit dan perut kembung. Selain itu, sayuran ini juga dapat menjaga pencernaan tetap sehat.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/paprika.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Paprika (Solanaceae)</h5>
                                            <p>Buah paprika juga mengandung vitamin B, vitamin K, zat besi, folat, zinc, mangan, dan lutein. Tak hanya itu, paprika juga kaya akan kandungan antioksidan.
                                                Salah satu jenis tanaman yang memiliki khasiat yang tinggi dan biasanya olah sebagai campuran salad.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/jagung.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>JAGUNG (Poaceae)</h5>
                                            <p>Jagung merupakan sumber protein yang baik. Jagung juga mengandung asam folat, vitamin B12, dan zat besi yang mampu membantu pembuatan sel darah merah di dalam tubuh.
                                                Semua kandungan itu bisa membantu menurunkan risiko anemia. Serat makanan dalam jagung bermanfaat menjaga sistem pencernaan, mencegah penyakit jantung, stroke, diabetes tipe 2, dan kanker usus.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/gandum.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>GANDUM (Poaceae)</h5>
                                            <p>Gandum biasanya digunakan untuk memproduksi tepung terigu dan pakan ternak. Kandungan dalam gandum yakni asam fitat yang
                                                dapat mengikat dan mencegah mineral, seperti kalsium, zinc, zat besi, dan magnesium. Gandum mengandum banyak serat. kandungan dari gandum ini juga baik
                                                untuk para penyandang diabetes. </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/padi.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>PADI (Poaceae)</h5>
                                            <p>Padi merupakan salah satu tanaman pokok di seluruh dunia. Beras yang dihasilkan dari padi menjadi sumber karbohidrat yang penting bagi kebutuhan energi manusia.
                                                Selain itu, beras juga mengandung protein, vitamin B, dan zat besi yang diperlukan untuk menjaga kesehatan tubuh.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/sorgum.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>SORGUM (Poaceae)</h5>
                                            <p>Sorgum adalah salah satu sumber serat makanan terbaik. Satu porsi sorgum mengandung 48 persen asupan serat harian yang direkomendasikan.
                                                Seperti yang diketahui, serat sangat penting untuk fungsi sistem pencernaan. Serat dapat dapat melancarkan sistem pencernaan, sehingga dapat mencegah sembelit.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/bajra.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>BAJRA (Poaceae)</h5>
                                            <p>Bajra, juga dikenal sebagai millet pearl, adalah biji-bijian yang banyak dikonsumsi di berbagai bagian dunia, Bajra kaya akan nutrisi dan memiliki beberapa manfaat untuk kesehatan.
                                                Bajra mengandung karbohidrat kompleks yang memberikan energi tahan lama, kaya akan serat makanan, mengandung protein, mengandung mineral penting seperti zat besi, fosfor, magnesium, dan seng.
                                                Bajra rendah lemak dan kaya akan serat, yang dapat membantu menurunkan risiko penyakit jantung.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/kacangpanjang.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>KACANG PANJANG (Fabaceae)</h5>
                                            <p>Kandungan mineral dalam kacang panjang, seperti mangan, dapat membantu menurunkan gejala dismenore, sehingga juga dapat membantu mengatasi nyeri haid pada wanita.
                                                Sebagai penghasil vitamin C yang cukup tinggi, kacang panjang mampu menjaga kulit terlihat lebih sehat dan cerah.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/kacangtanah.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>KACANG TANAH (Fabaceae)</h5>
                                            <p>Kacang tanah mengandung vitamin E. vitamin E ini akan membantu mengurangi garis dan kerutan pada kulit kamu. Tidak hanya itu, di dalam kacang tanah juga
                                                terdapat kandungan vitamin B dan riboflavin. Kedua kandungan itu dapat membuat kulit menjadi lebih bersinar.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/kacangkedelai.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>KACANG KEDELAI (Fabaceae)</h5>
                                            <p>Kacang kedelai merupakan salah satu sumber kalsium, protein, dan antioksidan isoflavon yang baik. Berkat kandungan tersebut,
                                                kacang kedelai bermanfaat untuk memperkuat dan menjaga kesehatan tulang serta gigi.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/kacanghijau.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>KACANG HIJAU (Fabaceae)</h5>
                                            <p>Kacang hijau adalah makanan sehat yang kaya akan senyawa fitonutrien, Zat ini memiliki fungsi sebagai antiinflamasi.
                                                Selain itu, manfaat lainnya adalah membantu meningkatkan kekebalan tubuh. Fitonutrien juga mampu menetralkan zat-zat berbahaya di dalam tubuh, atau bakteri hingga virus.
                                                Kacang hijau tinggi akan protein serta rendah lemak jenuh, rendah sodium, dan mengandung antioksidan.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item active carousel-item-start">
                                        <img src="assets/img/kacangmerah.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>KACANG MERAH (Fabaceae)</h5>
                                            <p>Kacang merah merupakan salah satu sumber protein, karbohidrat, fosfor dan khasiat lainnya. Biasanya di olah menjadi tepung, roti. Kacang merah tidak hanya memiliki kandungan serat yang baik untuk kesehatan jantung, tapi juga antioksidan yang bisa mencegah pertumbuhan sel kanker.
                                                Studi menunjukkan bahwa mengonsumsi cukup serat dan antioksidan yang dapat diperoleh dari kacang merah, mampu mengurangi risiko terkena kanker.</p>
                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>

                            </div><!-- End Slides with captions -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->

@endsection
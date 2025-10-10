@extends('layout.app_user')

@section('content')
    <style>
        .bg-text{
            color: #2C3E50;
        }
        .text-whites{
            color: #5D6D7E;
        }
    </style>
    <!-- Hero Header Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated slideInLeft bg-text">Tentang Kami</h1>
                </div>
                <div class="col-lg-4 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-whites" href="/">Beranda</a></li>
                            <li class="breadcrumb-item text-whites">Halaman</li>
                            <li class="breadcrumb-item text-whites active" aria-current="page"><b>Tentang Kami</b></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded shadow" src="img/about-1.jpg"
                                alt="Latihan Pencak Silat UNU Yogyakarta">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid h-75 rounded shadow" src="img/about-2.jpg" alt="Kejuaraan Pencak Silat">
                            <div class="h-25 d-flex align-items-center text-center bg-primary px-4">
                                <h4 class="text-white lh-base mb-0">UKM Pagar Nusa <br>UNU Yogyakarta</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-5">
                        <span class="text-uppercase text-primary bg-light px-2">Sejarah</span> & Identitas Kami
                    </h1>
                    <p class="mb-4">
                        <strong>UKM Pencak Silat Pagar Nusa UNU Yogyakarta</strong> berdiri sebagai wadah mahasiswa untuk
                        mengasah potensi diri dalam seni bela diri khas Nusantara. Dengan semboyan
                        <em>"Membela Kiai, Membela Negeri"</em>, kami tidak hanya fokus pada teknik bela diri,
                        tetapi juga menanamkan nilai-nilai persaudaraan, kedisiplinan, dan akhlak mulia.
                    </p>
                    <p class="mb-5">
                        Selama perjalanannya, UKM Pagar Nusa UNU Yogyakarta telah berpartisipasi aktif dalam berbagai
                        kompetisi, festival budaya, hingga kejuaraan tingkat nasional. Kami bangga menjadi bagian
                        dari upaya melestarikan warisan budaya bangsa melalui pencak silat.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Komunitas Persaudaraan Erat</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Latihan Rutin & Terstruktur</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Prestasi Kejuaraan Nasional</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Pembinaan Mental & Spiritual</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-5">
                        <a class="btn btn-primary px-4 me-2" href="#pendaftaran">Gabung Sekarang</a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href="#"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href="#"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2" href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Visi & Misi Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h1><span class="text-primary text-uppercase bg-light px-2">Visi</span> & <span
                        class="text-primary text-uppercase bg-light px-2">Misi</span></h1>
                <p class="text-muted">Landasan utama yang menjadi arah perjalanan UKM Pagar Nusa</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
                    <h3 class="text-primary">Visi</h3>
                    <p>Mewujudkan generasi muda yang beriman, berakhlak mulia, sehat jasmani, kuat mental, serta berprestasi
                        di bidang pencak silat dalam skala regional, nasional, maupun internasional.</p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.4s">
                    <h3 class="text-primary">Misi</h3>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check text-primary me-2"></i>Mengembangkan potensi anggota melalui latihan rutin
                            & disiplin.</li>
                        <li><i class="fa fa-check text-primary me-2"></i>Meningkatkan prestasi di kejuaraan melalui
                            pembinaan berkelanjutan.</li>
                        <li><i class="fa fa-check text-primary me-2"></i>Menanamkan nilai-nilai persaudaraan, sportifitas,
                            dan kejujuran.</li>
                        <li><i class="fa fa-check text-primary me-2"></i>Menjadi wadah pengembangan diri mahasiswa di bidang
                            seni & olahraga.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Visi & Misi End -->
    <!-- Timeline Sejarah Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h1 class="text-uppercase text-primary bg-light px-2">Sejarah Singkat</h1>
                <p class="text-muted">Perjalanan UKM Pagar Nusa dari awal berdiri hingga kini</p>
            </div>
            <div class="timeline">
                <div class="timeline-item left wow fadeInUp" data-wow-delay="0.1s">
                    <h4>1995</h4>
                    <p>UKM Pagar Nusa resmi berdiri sebagai wadah mahasiswa pecinta pencak silat.</p>
                </div>
                <div class="timeline-item right wow fadeInUp" data-wow-delay="0.3s">
                    <h4>2005</h4>
                    <p>Meraih Juara Umum Kejuaraan Pencak Silat Tingkat Regional Jawa Timur.</p>
                </div>
                <div class="timeline-item left wow fadeInUp" data-wow-delay="0.5s">
                    <h4>2015</h4>
                    <p>Mengirim atlet ke Kejuaraan Nasional dan berhasil membawa pulang 3 medali emas.</p>
                </div>
                <div class="timeline-item right wow fadeInUp" data-wow-delay="0.7s">
                    <h4>2022</h4>
                    <p>Mencetak sejarah dengan partisipasi di kejuaraan internasional Pencak Silat di Malaysia.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Timeline Sejarah End -->


    <!-- Quote Inspiratif Start -->
    <div class="container-fluid py-5 bg-dark">
        <div class="container py-5 text-center">
            <i class="fa fa-quote-left fa-3x text-primary mb-4"></i>
            <p class="fs-4 text-white fst-italic mb-4">"Pagar Nusa bukan sekadar bela diri, tetapi jalan hidup untuk menjaga
                diri, bangsa, dan agama dengan jiwa ksatria."</p>
            <h5 class="text-white mb-0">— Ketua UKM Pagar Nusa</h5>
        </div>
    </div>
    <!-- Quote Inspiratif End -->


    <!-- Statistik Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <div class="row g-5 text-center">
                <div class="col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="text-primary mb-2" data-toggle="counter-up">250</h1>
                    <p class="mb-0">Anggota Aktif</p>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="text-primary mb-2" data-toggle="counter-up">80</h1>
                    <p class="mb-0">Kejuaraan Diikuti</p>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="text-primary mb-2" data-toggle="counter-up">120</h1>
                    <p class="mb-0">Medali Diraih</p>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                    <h1 class="text-primary mb-2" data-toggle="counter-up">30</h1>
                    <p class="mb-0">Tahun Berkarya</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Statistik End -->


@endsection
@extends('layout.app_user')

@section('content')

    <div class="container-fluid pb-5 hero-header bg-light mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center mb-5">
                <div class="col-lg-6">
                    <h1 class="display-3 mb-4 animated slideInRight">
                        UKM Pencak Silat Pagar Nusa <span class="text-primary">UNU Yogyakarta</span>
                    </h1>
                    <h5 class="d-inline-block border border-2 border-white py-3 px-5 mb-0 animated slideInRight">
                        Mencetak Generasi Tangguh, Berprestasi, dan Berakhlak Mulia
                    </h5>
                    <p class="mt-4">
                        Mari bergabung bersama <strong>UKM Pencak Silat Pagar Nusa UNU Yogyakarta</strong>!
                        Buka kesempatan untuk mahasiswa baru yang ingin mengembangkan diri dalam seni bela diri,
                        mempererat persaudaraan, serta mengukir prestasi di tingkat lokal hingga nasional.
                    </p>
                    <a href="/register" class="btn btn-primary py-3 px-5 mt-3">Daftar Sekarang</a>
                </div>
                <div class="col-lg-6">
                    <div class="owl-carousel header-carousel animated fadeIn">
                        <img class="img-fluid"
                            src="https://saungberita.com/wp-content/uploads/2020/07/IMG-20200713-WA0008.jpg"
                            alt="Latihan Pencak Silat">
                        <img class="img-fluid" src="https://cdn.antaranews.com/cache/1200x800/2020/12/17/pencak.jpg"
                            alt="Pertandingan Pencak Silat">
                        <img class="img-fluid"
                            src="https://cdn-1.timesmedia.co.id/images/2024/08/02/Atlit-UKM-Pagar-Nusa-Unisma.jpg"
                            alt="UKM Pencak Silat UNU Yogyakarta">
                    </div>
                </div>
            </div>
            <div class="row g-5 animated fadeIn">
                <div class="col-md-6 col-lg-3">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 btn-square border border-2 border-white me-3">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <h5 class="lh-base mb-0">Kebersamaan & Persaudaraan</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 btn-square border border-2 border-white me-3">
                            <i class="fa fa-dumbbell text-primary"></i>
                        </div>
                        <h5 class="lh-base mb-0">Latihan Rutin & Terprogram</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 btn-square border border-2 border-white me-3">
                            <i class="fa fa-trophy text-primary"></i>
                        </div>
                        <h5 class="lh-base mb-0">Prestasi Kejuaraan</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 btn-square border border-2 border-white me-3">
                            <i class="fa fa-heart text-primary"></i>
                        </div>
                        <h5 class="lh-base mb-0">Menguatkan Iman & Karakter</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid" src="{{url('frontend/img/about-1.jpg')}}"
                                alt="Latihan UKM Pencak Silat UNU Yogyakarta">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid h-75" src="{{url('frontend/img/mennag.jpg')}}"
                                alt="Prestasi UKM Pagar Nusa UNU Yogyakarta">
                            <div class="h-25 d-flex align-items-center text-center bg-primary px-4">
                                <h4 class="text-white lh-base mb-0">UKM Pagar Nusa<br>UNU Yogyakarta</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-5"><span class="text-uppercase text-primary bg-light px-2">Tentang</span> Kami</h1>
                    <p class="mb-4">
                        <strong>UKM Pencak Silat Pagar Nusa UNU Yogyakarta</strong> merupakan wadah mahasiswa
                        untuk mengembangkan potensi dalam bidang seni bela diri khas Nusantara.
                        Berdiri dengan semangat <em>“Membela Kiai, Membela Negeri”</em>, kami berkomitmen
                        melahirkan generasi yang tangguh, berprestasi, dan berakhlak mulia.
                    </p>
                    <p class="mb-5">
                        Selain latihan rutin, UKM ini juga aktif mengikuti berbagai kompetisi dan
                        kejuaraan, baik di tingkat regional maupun nasional. Kami percaya bahwa pencak silat
                        bukan hanya tentang teknik bertarung, tetapi juga melatih disiplin, persaudaraan,
                        serta menjaga tradisi budaya bangsa.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Latihan Rutin & Terstruktur
                            </h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Komunitas Persaudaraan Kuat
                            </h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Prestasi di Berbagai Kejuaraan
                            </h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Pembinaan Mental & Spiritual
                            </h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-5">
                        <a class="btn btn-primary px-4 me-2" href="#pendaftaran">Daftar Sekarang</a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href="#!"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href="#!"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" href="#!"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square border-2" href="#!"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="mb-5">Kenapa <span class="text-uppercase text-primary bg-light px-2">Bergabung</span> dengan
                    Kami?</h1>
                <p class="mb-4">UKM Pencak Silat Pagar Nusa UNU Yogyakarta hadir sebagai wadah untuk mengembangkan
                    potensi,
                    membangun mental, serta mempererat persaudaraan mahasiswa melalui pencak silat.</p>
            </div>
            <div class="row g-5 align-items-center text-center">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-users fa-5x text-primary mb-4"></i>
                    <h4>Persaudaraan Kuat</h4>
                    <p class="mb-0">Menjadi bagian dari keluarga besar Pagar Nusa yang menjunjung tinggi nilai persatuan
                        dan kebersamaan.</p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-dumbbell fa-5x text-primary mb-4"></i>
                    <h4>Latihan Rutin & Terarah</h4>
                    <p class="mb-0">Program latihan intensif yang terstruktur untuk mengasah kemampuan fisik, teknik,
                        dan mental.</p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-trophy fa-5x text-primary mb-4"></i>
                    <h4>Prestasi Kejuaraan</h4>
                    <p class="mb-0">Kesempatan berkompetisi di berbagai event tingkat kampus, regional, hingga nasional.
                    </p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-heart fa-5x text-primary mb-4"></i>
                    <h4>Pembinaan Mental & Spiritual</h4>
                    <p class="mb-0">Tidak hanya bela diri, tetapi juga membentuk karakter, disiplin, dan spiritual yang
                        kuat.</p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-chalkboard-teacher fa-5x text-primary mb-4"></i>
                    <h4>Pembimbing Berpengalaman</h4>
                    <p class="mb-0">Didampingi pelatih dan senior yang berpengalaman dalam seni bela diri Pencak Silat.
                    </p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-medal fa-5x text-primary mb-4"></i>
                    <h4>Bangga Menjaga Budaya</h4>
                    <p class="mb-0">Melestarikan seni bela diri warisan budaya Nusantara sebagai identitas bangsa.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature End -->


    <!-- Project Start -->
    <div class="container-fluid mt-5">
        <div class="container mt-5">
            <div class="row g-0">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column justify-content-center bg-primary h-100 p-5">
                        <h1 class="text-white mb-5">Kejuaraan <span
                                class="text-uppercase text-primary bg-light px-2">Terbaru</span></h1>
                        <h4 class="text-white mb-0"><span class="display-1">6</span> Kejuaraan yang kami ikuti</h4>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://via.placeholder.com/400x300"
                                    alt="Kejuaraan Pencak Silat UNU Yogyakarta">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Kejuaraan Nasional</h4>
                                    <small class="text-white">2023</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://via.placeholder.com/400x300"
                                    alt="Turnamen Silat DIY">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Turnamen DIY</h4>
                                    <small class="text-white">2022</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.4s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://via.placeholder.com/400x300"
                                    alt="Kejuaraan Antar PT">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Antar Perguruan Tinggi</h4>
                                    <small class="text-white">2022</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://via.placeholder.com/400x300"
                                    alt="Festival Silat Nusantara">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Festival Silat Nusantara</h4>
                                    <small class="text-white">2021</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.6s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://via.placeholder.com/400x300"
                                    alt="Kejuaraan Pagar Nusa">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Kejuaraan Pagar Nusa</h4>
                                    <small class="text-white">2021</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://via.placeholder.com/400x300"
                                    alt="Open Tournament Jawa Tengah">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Open Tournament Jateng</h4>
                                    <small class="text-white">2020</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Project End -->
    <!-- Team Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <h1 class="mb-5">Meet Our <span class="text-uppercase text-primary bg-light px-2">Official Team</span></h1>
            <div class="row g-4">
                <!-- Ketua -->
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="https://picsum.photos/400/400?random=1" alt="Ketua">
                        <div class="team-overlay">
                            <small class="mb-2">Ketua Panitia</small>
                            <h4 class="lh-base text-light">Ahmad Syafii</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wakil Ketua -->
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="https://picsum.photos/400/400?random=2" alt="Wakil Ketua">
                        <div class="team-overlay">
                            <small class="mb-2">Wakil Ketua</small>
                            <h4 class="lh-base text-light">Siti Rahmawati</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Koordinator Lomba -->
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="https://picsum.photos/400/400?random=3" alt="Koordinator">
                        <div class="team-overlay">
                            <small class="mb-2">Koordinator Lomba</small>
                            <h4 class="lh-base text-light">Budi Santoso</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sekretaris -->
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="https://picsum.photos/400/400?random=4" alt="Sekretaris">
                        <div class="team-overlay">
                            <small class="mb-2">Sekretaris</small>
                            <h4 class="lh-base text-light">Nur Aisyah</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-9">
                    <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.2s">

                        <!-- Testimonial 1 -->
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="https://picsum.photos/500/400?random=10"
                                            alt="Peserta 1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <h3>Pengalaman Luar Biasa</h3>
                                        <p>
                                            “Kejuaraan ini sangat berkesan! Panitia profesional dan pertandingan
                                            berjalan dengan sportif.
                                            Saya mendapatkan banyak pengalaman baru dan teman dari berbagai daerah.”
                                        </p>
                                        <h5 class="mb-0">Rizky Pratama – Peserta</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="https://picsum.photos/500/400?random=11"
                                            alt="Official 1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <h3>Event Terorganisir</h3>
                                        <p>
                                            “Sebagai official, saya melihat bagaimana sistem pertandingan ini berjalan
                                            dengan rapi.
                                            Jadwal jelas, wasit adil, dan suasana meriah.”
                                        </p>
                                        <h5 class="mb-0">Siti Rahma – Official</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="https://picsum.photos/500/400?random=12"
                                            alt="Penonton 1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <h3>Atmosfer Meriah</h3>
                                        <p>
                                            “Sebagai penonton, saya sangat menikmati pertandingan. Atmosfernya
                                            mendebarkan
                                            dan dukungan penonton membuat acara semakin seru.”
                                        </p>
                                        <h5 class="mb-0">Ahmad Fauzi – Penonton</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- End Carousel -->
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
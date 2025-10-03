@extends('layout.app_user')

@section('content')
<!-- Hero Header Start -->
<div class="container-fluid pb-5 bg-primary hero-header">
    <div class="container py-5">
        <div class="row g-3 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-1 mb-0 text-white animated slideInLeft">Keanggotaan</h1>
            </div>
            <div class="col-lg-6 animated slideInRight">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="/">Beranda</a></li>
                        <li class="breadcrumb-item text-white">Halaman</li>
                        <li class="breadcrumb-item text-secondary active" aria-current="page">Keanggotaan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Hero Header End -->

<!-- Membership Section Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-4">
            <!-- Anggota 1 -->
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="card shadow border-0 h-100">
                    <img src="img/member-1.jpg" class="card-img-top" alt="Ahmad Fauzi">
                    <div class="card-body text-center">
                        <h4 class="card-title mb-1">Ahmad Fauzi</h4>
                        <p class="text-muted mb-2">Angkatan 2020 - Cabang Sapeken</p>
                        <p class="mb-0"><strong>Prestasi:</strong> Juara 1 Kejuaraan Daerah 2022</p>
                    </div>
                </div>
            </div>

            <!-- Anggota 2 -->
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="card shadow border-0 h-100">
                    <img src="img/member-2.jpg" class="card-img-top" alt="Siti Rahma">
                    <div class="card-body text-center">
                        <h4 class="card-title mb-1">Siti Rahma</h4>
                        <p class="text-muted mb-2">Angkatan 2021 - Cabang Yogyakarta</p>
                        <p class="mb-0"><strong>Prestasi:</strong> Medali Perak Kejuaraan Nasional 2023</p>
                    </div>
                </div>
            </div>

            <!-- Anggota 3 -->
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="card shadow border-0 h-100">
                    <img src="img/member-3.jpg" class="card-img-top" alt="Budi Santoso">
                    <div class="card-body text-center">
                        <h4 class="card-title mb-1">Budi Santoso</h4>
                        <p class="text-muted mb-2">Angkatan 2019 - Cabang Malang</p>
                        <p class="mb-0"><strong>Prestasi:</strong> Juara 3 Piala Rektor 2021</p>
                    </div>
                </div>
            </div>

            <!-- Anggota 4 -->
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                <div class="card shadow border-0 h-100">
                    <img src="img/member-4.jpg" class="card-img-top" alt="Dewi Lestari">
                    <div class="card-body text-center">
                        <h4 class="card-title mb-1">Dewi Lestari</h4>
                        <p class="text-muted mb-2">Angkatan 2022 - Cabang Surabaya</p>
                        <p class="mb-0"><strong>Prestasi:</strong> Juara 1 Seni Tunggal Putri 2023</p>
                    </div>
                </div>
            </div>

            <!-- Anggota 5 -->
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.9s">
                <div class="card shadow border-0 h-100">
                    <img src="img/member-5.jpg" class="card-img-top" alt="Rahmat Hidayat">
                    <div class="card-body text-center">
                        <h4 class="card-title mb-1">Rahmat Hidayat</h4>
                        <p class="text-muted mb-2">Angkatan 2020 - Cabang Bandung</p>
                        <p class="mb-0"><strong>Prestasi:</strong> Medali Emas Kejurnas 2022</p>
                    </div>
                </div>
            </div>

            <!-- Anggota 6 -->
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="1.1s">
                <div class="card shadow border-0 h-100">
                    <img src="img/member-6.jpg" class="card-img-top" alt="Nur Aisyah">
                    <div class="card-body text-center">
                        <h4 class="card-title mb-1">Nur Aisyah</h4>
                        <p class="text-muted mb-2">Angkatan 2021 - Cabang Jakarta</p>
                        <p class="mb-0"><strong>Prestasi:</strong> Juara 2 Piala Rektor 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Membership Section End -->


@endsection

@extends('layout.app_user')

@section('content')
<!-- Hero Start -->
<!-- Membership / Anggota Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="text-uppercase text-primary bg-light px-2">Keanggotaan</h1>
            <p class="text-muted">Cari data anggota UKM Pagar Nusa yang sudah terverifikasi</p>
        </div>

        <!-- Search Form -->
        <div class="row justify-content-center mb-4">
            <div class="col-lg-6">
                <form class="d-flex">
                    <input type="text" class="form-control me-2" placeholder="Cari nama, NIM/NIS atau angkatan">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </form>
            </div>
        </div>

        <!-- Member List -->
        <div class="row g-4">
            <!-- Anggota 1 -->
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="https://source.unsplash.com/300x300/?man,portrait" alt="">
                    <div class="team-overlay">
                        <small class="mb-2">Angkatan 2020</small>
                        <h4 class="lh-base text-light">Ahmad Fauzi</h4>
                        <p class="text-light">Cabang: Sapeken</p>
                    </div>
                </div>
            </div>

            <!-- Anggota 2 -->
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.2s">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="https://source.unsplash.com/300x300/?woman,portrait" alt="">
                    <div class="team-overlay">
                        <small class="mb-2">Angkatan 2021</small>
                        <h4 class="lh-base text-light">Siti Rahma</h4>
                        <p class="text-light">Cabang: Yogyakarta</p>
                    </div>
                </div>
            </div>

            <!-- Anggota 3 -->
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="https://source.unsplash.com/300x300/?student,portrait" alt="">
                    <div class="team-overlay">
                        <small class="mb-2">Angkatan 2019</small>
                        <h4 class="lh-base text-light">Rizky Pratama</h4>
                        <p class="text-light">Cabang: Surabaya</p>
                    </div>
                </div>
            </div>

            <!-- Anggota 4 -->
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.4s">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="https://source.unsplash.com/300x300/?girl,student" alt="">
                    <div class="team-overlay">
                        <small class="mb-2">Angkatan 2022</small>
                        <h4 class="lh-base text-light">Nur Aisyah</h4>
                        <p class="text-light">Cabang: Bandung</p>
                    </div>
                </div>
            </div>

            <!-- Anggota 5 -->
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="https://source.unsplash.com/300x300/?man,student" alt="">
                    <div class="team-overlay">
                        <small class="mb-2">Angkatan 2018</small>
                        <h4 class="lh-base text-light">Budi Santoso</h4>
                        <p class="text-light">Cabang: Jakarta</p>
                    </div>
                </div>
            </div>

            <!-- Anggota 6 -->
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.6s">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="https://source.unsplash.com/300x300/?woman,student" alt="">
                    <div class="team-overlay">
                        <small class="mb-2">Angkatan 2020</small>
                        <h4 class="lh-base text-light">Dewi Lestari</h4>
                        <p class="text-light">Cabang: Malang</p>
                    </div>
                </div>
            </div>

            <!-- Anggota 7 -->
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="https://source.unsplash.com/300x300/?athlete,student" alt="">
                    <div class="team-overlay">
                        <small class="mb-2">Angkatan 2023</small>
                        <h4 class="lh-base text-light">Andi Kurniawan</h4>
                        <p class="text-light">Cabang: Makassar</p>
                    </div>
                </div>
            </div>

            <!-- Anggota 8 -->
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.8s">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="https://source.unsplash.com/300x300/?silat,student" alt="">
                    <div class="team-overlay">
                        <small class="mb-2">Angkatan 2021</small>
                        <h4 class="lh-base text-light">Fitri Handayani</h4>
                        <p class="text-light">Cabang: Jogja</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Membership / Anggota End -->

<!-- Hero End -->


@endsection

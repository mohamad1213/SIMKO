@extends('layout.app_user')

@section('content')
    <style>
        .bg-text {
            color: #2C3E50;
        }

        .text-whites {
            color: #5D6D7E;
        }
    </style>
    <!-- Hero Header -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated bg-text slideInLeft">Berita & Kegiatan</h1>
                </div>
                <div class="col-lg-4 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-whites" href="/">Beranda</a></li>
                            <li class="breadcrumb-item text-whites">Halaman</li>
                            <li class="breadcrumb-item text-whites active" aria-current="page"><b>Berita</b></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- List Berita -->
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary mb-3">Berita & Kegiatan Pesantren</h2>
            <p class="text-muted">Lihat berita terbaru seputar kegiatan, lomba, dan aktivitas santri.</p>
        </div>

        <div class="row g-4">
            @forelse ($beritas as $berita)
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.{{ $loop->iteration }}s">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('storage/' . $berita->gambar) }}" class="card-img-top rounded-top"
                                alt="{{ $berita->judul }}" style="object-fit: cover; height: 230px;">
                            <div class="badge bg-primary position-absolute top-0 start-0 m-3 px-3 py-2 text-white">
                                {{ $berita->tanggal ? \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') : '' }}
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $berita->judul }}</h5>
                            <p class="text-muted small mb-2">
                                <i class="fa fa-map-marker-alt me-2"></i>{{ $berita->lokasi ?? 'Pesantren' }}
                            </p>
                            <p class="card-text">{{ Str::limit(strip_tags($berita->deskripsi), 100) }}</p>
                            <a href="{{ route('berita.show', $berita->slug) }}" class="text-primary fw-semibold">
                                Baca Selengkapnya <i class="fa fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center text-muted py-5">
                    <i class="fa fa-info-circle me-2"></i>Belum ada berita yang dipublikasikan.
                </div>
            @endforelse
        </div>
    </div>
@endsection
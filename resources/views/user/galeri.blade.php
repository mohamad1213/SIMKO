@extends('layout.app_user')
@section('content')
    <style>
        .pswp__caption {
            font-size: 0.9rem;
            color: #f0f0f0;
            text-align: center;
        }
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
                    <h1 class="display-1 mb-0 animated slideInLeft bg-text">Galeri & Prestasi</h1>
                </div>
                <div class="col-lg-4 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-whites" href="/">Beranda</a></li>
                            <li class="breadcrumb-item text-whites">Halaman</li>
                            <li class="breadcrumb-item text-whites active" aria-current="page"><b>Galeri & Prestasi</b></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Header End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary mb-3">Galeri Kegiatan</h2>
                <p class="text-muted">Kumpulan dokumentasi kegiatan UKM Pencak Silat.</p>
            </div>

            <div class="row g-4" id="galeri-grid">
                @forelse ($galeris as $galeri)
                    <div class="col-md-6 col-lg-4">
                        <a href="{{ asset('storage/' . $galeri->gambar) }}" data-pswp-width="1200" data-pswp-height="800"
                            data-cropped="true" data-pswp-caption="{{ $galeri->judul }} - {{ $galeri->deskripsi }}"
                            target="_blank">
                            <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}"
                                class="img-fluid rounded shadow-sm" style="object-fit: cover; height: 250px; width: 100%;">
                        </a>
                    </div>
                @empty
                    <div class="text-center text-muted">Belum ada galeri yang ditambahkan.</div>
                @endforelse
            </div>
        </div>
    </div>

    <hr>



    <!-- Prestasi Section Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary mb-3">Prestasi UKM Pencak Silat</h2>
                <p class="text-muted">Daftar prestasi yang telah diraih oleh Pesilat.</p>
            </div>

            <div class="row g-4">
                @forelse ($prestasis as $prestasi)
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.{{ $loop->index + 1 }}s">
                        <div class="card shadow border-0 h-100">
                            @if ($prestasi->gambar)
                                <img src="{{ asset('storage/' . $prestasi->gambar) }}" class="card-img-top"
                                    alt="{{ $prestasi->nama }}" style="object-fit: cover; height: 250px;">
                            @endif
                            <div class="card-body text-center">
                                <h5 class="card-title mb-1">{{ $prestasi->nama }}</h5>
                                <p class="text-primary mb-1">{{ $prestasi->penyelenggara }}</p>
                                <p class="text-muted mb-2 small">
                                    {{ $prestasi->tingkat }} |
                                    {{ $prestasi->tahun }}
                                </p>
                                <p class="text-secondary mb-0">{{ Str::limit($prestasi->deskripsi, 80) }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center text-muted">Belum ada prestasi yang ditambahkan.</div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Prestasi Section End -->
    <script type="module">
        import PhotoSwipeLightbox from 'https://cdn.jsdelivr.net/npm/photoswipe@5/dist/photoswipe-lightbox.esm.min.js';

        const lightbox = new PhotoSwipeLightbox({
            gallery: '#galeri-grid',     // selector container
            children: 'a',               // tiap <a> di dalamnya akan jadi item
            pswpModule: () => import('https://cdn.jsdelivr.net/npm/photoswipe@5/dist/photoswipe.esm.min.js')
        });
        lightbox.init();
    </script>

@endsection
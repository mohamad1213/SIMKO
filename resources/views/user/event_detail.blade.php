@extends('layout.app_user')

@section('content')
    <!-- Hero Header -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5 text-center text-lg-start">
            <h1 class="display-3 mb-3 animated slideInLeft">{{ $berita->judul }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Beranda</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('berita.index') }}">Berita</a></li>
                    <li class="breadcrumb-item text-secondary active" aria-current="page">{{ $berita->judul }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Detail Berita -->
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    @if ($berita->gambar)
                        <img src="{{ asset('storage/' . $berita->gambar) }}" 
                             class="card-img-top rounded-top" 
                             alt="{{ $berita->judul }}" 
                             style="object-fit: cover; height: 400px;">
                    @endif
                    <div class="card-body">
                        <h2 class="fw-bold text-primary mb-3">{{ $berita->judul }}</h2>
                        <p class="text-muted small mb-2">
                            <i class="fa fa-calendar-alt me-2"></i>
                            {{ $berita->tanggal ? \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') : '' }}
                            &nbsp; | &nbsp;
                            <i class="fa fa-map-marker-alt me-2"></i>{{ $berita->lokasi ?? 'Pesantren' }}
                        </p>
                        <hr>
                        <div class="content mt-4">
                            {!! $berita->deskripsi !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <h5 class="fw-bold mb-4">Berita Lainnya</h5>
                @foreach ($recentBeritas as $b)
                    <div class="d-flex mb-3 border-bottom pb-2">
                        <img src="{{ asset('storage/' . $b->gambar) }}" 
                             class="rounded me-3" 
                             width="80" height="80" 
                             style="object-fit: cover;" 
                             alt="{{ $b->judul }}">
                        <div>
                            <a href="{{ route('berita.show', $b->slug) }}" class="text-dark fw-semibold d-block">
                                {{ Str::limit($b->judul, 50) }}
                            </a>
                            <small class="text-muted">
                                {{ $b->tanggal ? \Carbon\Carbon::parse($b->tanggal)->format('d M Y') : '' }}
                            </small>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

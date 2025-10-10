@extends('layout.app_user')

@section('content')
    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h1 class="text-uppercase text-primary bg-light px-2">Keanggotaan</h1>
                <p class="text-muted">Cari data anggota UKM Pagar Nusa yang sudah terverifikasi</p>
            </div>

            <!-- Search Form -->
            <div class="row justify-content-center mb-4">
                <div class="col-lg-6">
                    <form class="d-flex" method="GET" action="{{ route('keanggotaan') }}">
                        <input type="text" name="q" class="form-control me-2"
                            placeholder="Cari nama, NIM/NIS atau angkatan..." value="{{ request('q') }}">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </form>
                </div>
            </div>

            <!-- List Anggota -->
            <div class="row">
                @forelse($anggotas as $anggota)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm border-0 h-100">
                            <img src="{{ $anggota->foto ? asset('storage/' . $anggota->foto) : asset('default-user.png') }}"
                                class="card-img-top" alt="Foto {{ $anggota->nama }}" style="height: 250px; object-fit: cover;">
                            <div class="card-body text-center">
                                <h5 class="card-title mb-1">{{ $anggota->nama }}</h5>
                                <p class="text-muted mb-1">NIM/NIS: {{ $anggota->nik }}</p>
                                <p class="text-muted mb-1">Angkatan: {{ $anggota->angkatan }}</p>
                                <span class="badge bg-success">Terverifikasi</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted mt-4">Tidak ada data anggota ditemukan.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
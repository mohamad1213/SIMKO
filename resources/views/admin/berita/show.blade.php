@extends('layout.app')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4>{{ $berita->judul }}</h4>
                <a href="{{ route('admin.prestasi.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
            </div>
            <div class="card-body">
                <p><strong>Tanggal:</strong> {{ $berita->tanggal }}</p>
                @if($berita->gambar)
                    <img src="{{ asset('storage/' . $berita->gambar) }}" class="img-fluid mb-3" style="max-height:300px">
                @endif
                <p>{{ $berita->konten }}</p>
            </div>
        </div>
    </div>
@endsection
@extends('layout.app')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Edit Prestasi</h4>
                <a href="{{ route('admin.prestasi.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf 
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" value="{{ $berita->judul }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Konten</label>
                        <textarea name="konten" class="form-control" rows="5" required>{{ $berita->konten }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control" accept="image/*">
                        @if($berita->gambar)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $berita->gambar) }}" width="200" class="img-thumbnail">
                                <p class="text-muted">Gambar saat ini</p>
                            </div>
                        @endif
                    </div>

                    <!-- Tombol -->
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.prestasi.index') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
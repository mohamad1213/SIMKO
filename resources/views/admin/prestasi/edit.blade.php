@extends('layout.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Edit Prestasi</h4>
            <a href="{{ route('admin.prestasi.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.prestasi.update', $prestasi->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Nama -->
                <div class="mb-3">
                    <label class="form-label">Nama Prestasi</label>
                    <input type="text" name="nama" value="{{ old('nama', $prestasi->nama) }}" 
                           class="form-control @error('nama') is-invalid @enderror" required>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Penyelenggara -->
                <div class="mb-3">
                    <label class="form-label">Penyelenggara</label>
                    <input type="text" name="penyelenggara" value="{{ old('penyelenggara', $prestasi->penyelenggara) }}" 
                           class="form-control">
                </div>

                <!-- Tingkat -->
                <div class="mb-3">
                    <label class="form-label">Tingkat</label>
                    <select name="tingkat" class="form-control" required>
                        @foreach(['Sekolah','Kecamatan','Kabupaten','Provinsi','Nasional','Internasional'] as $tingkat)
                            <option value="{{ $tingkat }}" {{ $prestasi->tingkat == $tingkat ? 'selected' : '' }}>
                                {{ $tingkat }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Tahun -->
                <div class="mb-3">
                    <label class="form-label">Tahun</label>
                    <input type="number" name="tahun" value="{{ old('tahun', $prestasi->tahun) }}" 
                           class="form-control" min="2000" max="{{ date('Y') }}" required>
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3">{{ old('deskripsi', $prestasi->deskripsi) }}</textarea>
                </div>

                <!-- Gambar -->
                <div class="mb-3">
                    <label class="form-label">Gambar Bukti (Opsional)</label>
                    <input type="file" name="gambar" class="form-control" accept="image/*">
                    @if($prestasi->gambar)
                        <div class="mt-2">
                            <img src="{{ asset('storage/'.$prestasi->gambar) }}" 
                                 alt="Gambar Prestasi" class="img-thumbnail" width="200">
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

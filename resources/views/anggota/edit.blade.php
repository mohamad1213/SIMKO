@extends('layout.app')

@section('content')
    <div class="container">
        <h3>Edit Data Anggota</h3>
        <form action="{{ route('anggota.update', $anggota) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Nama --}}
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" value="{{ old('nama', $anggota->nama) }}" required>
            </div>

            {{-- Tempat & Tanggal Lahir --}}
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control"
                        value="{{ old('tempat_lahir', $anggota->tempat_lahir) }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control"
                        value="{{ old('tanggal_lahir', $anggota->tanggal_lahir) }}">
                </div>
            </div>

            {{-- Jenis Kelamin & Agama --}}
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="L" {{ old('jenis_kelamin', $anggota->jenis_kelamin) == 'L' ? 'selected' : '' }}>
                            Laki-laki</option>
                        <option value="P" {{ old('jenis_kelamin', $anggota->jenis_kelamin) == 'P' ? 'selected' : '' }}>
                            Perempuan</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Agama</label>
                    <input type="text" name="agama" class="form-control" value="{{ old('agama', $anggota->agama) }}">
                </div>
            </div>

            {{-- Alamat & No HP --}}
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control">{{ old('alamat', $anggota->alamat) }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">No HP</label>
                <input type="text" name="no_hp" class="form-control" value="{{ old('no_hp', $anggota->no_hp) }}">
            </div>

            {{-- Email & NIK --}}
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $anggota->email) }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">NIK</label>
                    <input type="text" name="nik" class="form-control" value="{{ old('nik', $anggota->nik) }}">
                </div>
            </div>

            {{-- Pendidikan & Pekerjaan --}}
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Pendidikan</label>
                    <input type="text" name="pendidikan" class="form-control"
                        value="{{ old('pendidikan', $anggota->pendidikan) }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control"
                        value="{{ old('pekerjaan', $anggota->pekerjaan) }}">
                </div>
            </div>

            {{-- Nama Sekolah --}}
            <div class="mb-3">
                <label class="form-label">Nama Sekolah</label>
                <input type="text" name="nama_sekolah" class="form-control"
                    value="{{ old('nama_sekolah', $anggota->nama_sekolah) }}">
            </div>

            {{-- Data Wali --}}
            <h5>Data Wali</h5>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nama Wali</label>
                    <input type="text" name="nama_wali" class="form-control"
                        value="{{ old('nama_wali', $anggota->nama_wali) }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">No HP Wali</label>
                    <input type="text" name="no_hp_wali" class="form-control"
                        value="{{ old('no_hp_wali', $anggota->no_hp_wali) }}">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat Wali</label>
                <textarea name="alamat_wali" class="form-control">{{ old('alamat_wali', $anggota->alamat_wali) }}</textarea>
            </div>

            {{-- Sabuk & Keanggotaan --}}
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Tingkatan Sabuk</label>
                    <input type="text" name="tingkatan_sabuk" class="form-control"
                        value="{{ old('tingkatan_sabuk', $anggota->tingkatan_sabuk) }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Status Keanggotaan</label>
                    <input type="text" name="status_keanggotaan" class="form-control"
                        value="{{ old('status_keanggotaan', $anggota->status_keanggotaan) }}">
                </div>
            </div>

            {{-- Tahun & Cabang Ranting --}}
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Tahun Mulai Latihan</label>
                    <input type="number" name="tahun_mulai_latihan" class="form-control"
                        value="{{ old('tahun_mulai_latihan', $anggota->tahun_mulai_latihan) }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Cabang/Ranting</label>
                    <input type="text" name="cabang_ranting" class="form-control"
                        value="{{ old('cabang_ranting', $anggota->cabang_ranting) }}">
                </div>
            </div>

            {{-- Upload Files --}}
            <h5>Upload Dokumen</h5>
            <div class="mb-3">
                <label class="form-label">Foto</label><br>
                @if($anggota->foto)
                    <img src="{{ asset('storage/' . $anggota->foto) }}" width="100" class="mb-2"><br>
                @endif
                <input type="file" name="foto" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">KTP</label>
                @if($anggota->ktp)
                    <a href="{{ asset('storage/' . $anggota->ktp) }}" target="_blank">Lihat File</a><br>
                @endif
                <input type="file" name="ktp" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Kartu Keluarga</label>
                @if($anggota->kartu_keluarga)
                    <a href="{{ asset('storage/' . $anggota->kartu_keluarga) }}" target="_blank">Lihat File</a><br>
                @endif
                <input type="file" name="kartu_keluarga" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Sertifikat</label>
                @if($anggota->sertifikat)
                    <a href="{{ asset('storage/' . $anggota->sertifikat) }}" target="_blank">Lihat File</a><br>
                @endif
                <input type="file" name="sertifikat" class="form-control">
            </div>

            {{-- Riwayat Penyakit & Kontak Darurat --}}
            <div class="mb-3">
                <label class="form-label">Riwayat Penyakit</label>
                <textarea name="riwayat_penyakit"
                    class="form-control">{{ old('riwayat_penyakit', $anggota->riwayat_penyakit) }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Kontak Darurat</label>
                <input type="text" name="kontak_darurat" class="form-control"
                    value="{{ old('kontak_darurat', $anggota->kontak_darurat) }}">
            </div>

            {{-- Status --}}
            <div class="mb-3">
                <label class="form-label">Status Verifikasi</label>
                @if($anggota->status == 'pending')
                    <span class="badge bg-warning">Pending</span>
                @elseif($anggota->status == 'proses')
                    <span class="badge bg-info">Proses</span>
                @else
                    <span class="badge bg-success">Terverifikasi</span>
                @endif
            </div>

            {{-- Submit --}}
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('anggota.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
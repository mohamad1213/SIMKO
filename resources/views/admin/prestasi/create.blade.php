@extends('layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title flex-wrap d-flex justify-content-between align-items-center">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tambah Prestasi</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('admin.prestasi.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3">
                                            <label>Nama Prestasi</label>
                                            <input type="text" name="nama" class="form-control" required>
                                        </div>

                                        <div class="mb-3">
                                            <label>Penyelenggara</label>
                                            <input type="text" name="penyelenggara" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label>Tingkat</label>
                                            <select name="tingkat" class="form-control" required>
                                                <option value="">--Pilih Tingkat--</option>
                                                <option value="Sekolah">Sekolah</option>
                                                <option value="Kecamatan">Kecamatan</option>
                                                <option value="Kabupaten">Kabupaten</option>
                                                <option value="Provinsi">Provinsi</option>
                                                <option value="Nasional">Nasional</option>
                                                <option value="Internasional">Internasional</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label>Tahun</label>
                                            <input type="number" name="tahun" class="form-control" required>
                                        </div>

                                        <div class="mb-3">
                                            <label>Deskripsi</label>
                                            <textarea name="deskripsi" class="form-control"></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label>Bukti Prestasi (Gambar)</label>
                                            <input type="file" name="gambar" class="form-control" accept="image/*">
                                        </div>

                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{ route('admin.prestasi.index') }}" class="btn btn-secondary">Kembali</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
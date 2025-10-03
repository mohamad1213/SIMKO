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
                                    <h4 class="card-title">Tambah Galeri</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('admin.galeri.store') }}" method="POST"
                                        enctype="multipart/form-data">

                                        @csrf

                                        <!-- Judul -->
                                        <div class="mb-3">
                                            <label class="form-label">Judul</label>
                                            <input type="text" name="judul" class="form-control" required>
                                        </div>

                                        <!-- Deskripsi -->
                                        <div class="mb-3">
                                            <label class="form-label">Deskripsi</label>
                                            <textarea name="deskripsi" class="form-control" rows="3"></textarea>
                                        </div>

                                        <!-- Upload Gambar -->
                                        <div class="mb-3">
                                            <label class="form-label">Gambar</label>
                                            <input type="file" name="gambar" class="form-control" accept="image/*" required>
                                        </div>

                                        <!-- Tombol -->
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ route('admin.galeri.index') }}"
                                                class="btn btn-secondary">Kembali</a>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
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
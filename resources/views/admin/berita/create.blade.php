@extends('layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-title flex-wrap d-flex justify-content-between align-items-center mb-3">
                    <h4 class="mb-0">Tambah Berita</h4>
                    <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">← Kembali</a>
                </div>

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Judul -->
                            <div class="mb-3">
                                <label class="form-label">Judul <span class="text-danger">*</span></label>
                                <input type="text" name="judul" class="form-control" required>
                            </div>

                            <!-- Kategori -->
                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <input type="text" name="kategori" class="form-control"
                                    placeholder="Contoh: Kegiatan, Informasi, Umum">
                            </div>

                            <!-- Tanggal -->
                            <div class="mb-3">
                                <label class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control">
                            </div>

                            <!-- Lokasi -->
                            <div class="mb-3">
                                <label class="form-label">Lokasi</label>
                                <input type="text" name="lokasi" class="form-control"
                                    placeholder="Contoh: Aula Utama, Lapangan">
                            </div>

                            <!-- Deskripsi (CKEditor) -->
                            <div class="mb-3">
                                <label class="form-label">Deskripsi / Konten <span class="text-danger">*</span></label>
                                <textarea id="deskripsi" name="deskripsi" rows="8" class="form-control"></textarea>
                            </div>

                            <!-- Gambar -->
                            <div class="mb-3">
                                <label class="form-label">Gambar</label>
                                <input type="file" name="gambar" class="form-control" accept="image/*">
                                <small class="text-muted">Format: JPG, JPEG, PNG. Maks 2MB</small>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        let editor;
        ClassicEditor
            .create(document.querySelector('#deskripsi'))
            .then(newEditor => {
                editor = newEditor;
            })
            .catch(error => {
                console.error(error);
            });

        document.querySelector('form').addEventListener('submit', function () {
            document.querySelector('textarea[name="deskripsi"]').value = editor.getData();
        });
    </script>

@endsection
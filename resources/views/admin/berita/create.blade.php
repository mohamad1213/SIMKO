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
                                    <h4 class="card-title">Tambah Berita</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('admin.berita.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3">
                                            <label class="form-label">Judul</label>
                                            <input type="text" name="judul" class="form-control" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Konten</label>
                                            <textarea name="konten" class="form-control" rows="5" required></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Gambar</label>
                                            <input type="file" name="gambar" class="form-control" accept="image/*">
                                        </div>

                                        <button type="submit" class="btn btn-primary">Simpan</button>
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
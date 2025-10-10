@extends('layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title flex-wrap d-flex justify-content-between align-items-center">
                            <div>
                                <a class="btn btn-primary" href="{{ route('admin.berita.create') }}">
                                    + New Berita
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Tabel Galeri -->
                    <div class="col-xl-12 wow fadeInUp" data-wow-delay="1.5s">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <div class="table-responsive full-data">
                            <table class="table-responsive-lg table display dataTablesCard student-tab dataTable no-footer"
                                id="example-student">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Tanggal</th>
                                        <th>Lokasi</th>
                                        <th>Gambar</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($beritas as $index => $berita)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $berita->judul }}</td>
                                            <td>{{ $berita->kategori ?? '-' }}</td>
                                            <td>{{ $berita->tanggal ? \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') : '-' }}
                                            </td>
                                            <td>{{ $berita->lokasi ?? '-' }}</td>
                                            <td>
                                                @if($berita->gambar)
                                                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="gambar"
                                                        class="img-thumbnail" width="100">
                                                @else
                                                    <span class="text-muted">Tidak ada</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('admin.berita.show', $berita->id) }}"
                                                    class="btn btn-sm btn-info">Lihat</a>
                                                <a href="{{ route('admin.berita.edit', $berita->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="POST"
                                                    class="d-inline"
                                                    onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center text-muted">Belum ada data berita</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End Table -->
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#myTable').DataTable({
            responsive: false,
            scrollX: true
        });

    </script>
@endsection
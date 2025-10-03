@extends('layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title flex-wrap d-flex justify-content-between align-items-center">
                            <div>
                                <a class="btn btn-primary" href="{{ route('admin.prestasi.create') }}">
                                    + New Prestasi
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
                                        <th>Nama Prestasi</th>
                                        <th>Penyelenggara</th>
                                        <th>Tingkat</th>
                                        <th>Tahun</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($prestasis as $index => $prestasi)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $prestasi->nama }}</td>
                                            <td>{{ $prestasi->penyelenggara ?? '-' }}</td>
                                            <td>{{ $prestasi->tingkat }}</td>
                                            <td>{{ $prestasi->tahun }}</td>
                                            <td>
                                                @if($prestasi->gambar)
                                                    <img src="{{ asset('storage/' . $prestasi->gambar) }}" alt="{{ $prestasi->nama }}"
                                                        width="80" class="img-thumbnail">
                                                @else
                                                    <span class="text-muted">Tidak ada</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.prestasi.show', $prestasi->id) }}"
                                                    class="btn btn-sm btn-info">Lihat</a>
                                                <a href="{{ route('admin.prestasi.edit', $prestasi->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                <form action="{{ route('admin.prestasi.destroy', $prestasi->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Yakin mau hapus data ini?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Belum ada data prestasi</td>
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
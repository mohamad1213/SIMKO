@extends('layout.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title flex-wrap d-flex justify-content-between align-items-center">
                        <!-- Search -->
                        <div class="input-group search-area mb-md-0 mb-3" style="max-width: 300px;">
                            <input type="text" class="form-control" placeholder="Search here...">
                            <span class="input-group-text">
                                <a href="javascript:void(0)">
                                    <svg width="15" height="15" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.5605 15.4395L13.7527 11.6317C14.5395 10.446 15 9.02625 15 7.5C15 3.3645 11.6355 0 7.5 0C3.3645 0 0 3.3645 0 7.5C0 11.6355 3.3645 15 7.5 15C9.02625 15 10.446 14.5395 11.6317 13.7527L15.4395 17.5605C16.0245 18.1462 16.9755 18.1462 17.5605 17.5605C18.1462 16.9747 18.1462 16.0252 17.5605 15.4395V15.4395ZM2.25 7.5C2.25 4.605 4.605 2.25 7.5 2.25C10.395 2.25 12.75 4.605 12.75 7.5C12.75 10.395 10.395 12.75 7.5 12.75C4.605 12.75 2.25 10.395 2.25 7.5V7.5Z"
                                            fill="#01A3FF" />
                                    </svg>
                                </a>
                            </span>
                        </div>

                        <!-- Tombol Tambah -->
                        <div>
                            <a class="btn btn-primary" href="{{ route('admin.galeri.create') }}">
                                + New Gallery
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Tabel Galeri -->
                <div class="col-xl-12 wow fadeInUp" data-wow-delay="1.5s">
                    <div class="table-responsive full-data">
                            <table class="table-responsive-lg table display dataTablesCard student-tab dataTable no-footer"
                                id="example-student">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Gambar</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($galeris as $galeri)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $galeri->judul }}</td>
                                        <td>
                                            @if($galeri->gambar)
                                                <img src="{{ asset('storage/'.$galeri->gambar) }}" 
                                                     alt="{{ $galeri->judul }}" width="100">
                                            @else
                                                <span class="text-muted">Belum ada gambar</span>
                                            @endif
                                        </td>
                                        <td>{{ $galeri->created_at->format('d M Y') }}</td>
                                        <td>
                                            <a href="{{ route('admin.galeri.show', $galeri->id) }}" class="btn btn-sm btn-info">Lihat</a>
                                            <a href="{{ route('admin.galeri.edit', $galeri->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('admin.galeri.destroy', $galeri->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Belum ada data galeri</td>
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
@extends('layout.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Detail Prestasi</h4>
            <a href="{{ route('admin.prestasi.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th width="30%">Nama Prestasi</th>
                        <td>{{ $prestasi->nama }}</td>
                    </tr>
                    <tr>
                        <th>Penyelenggara</th>
                        <td>{{ $prestasi->penyelenggara ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Tingkat</th>
                        <td>{{ $prestasi->tingkat }}</td>
                    </tr>
                    <tr>
                        <th>Tahun</th>
                        <td>{{ $prestasi->tahun }}</td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <td>{{ $prestasi->deskripsi ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Gambar Bukti</th>
                        <td>
                            @if($prestasi->gambar)
                                <img src="{{ asset('storage/'.$prestasi->gambar) }}" 
                                     alt="{{ $prestasi->nama }}" 
                                     class="img-thumbnail" width="200">
                            @else
                                <span class="text-muted">Tidak ada bukti</span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

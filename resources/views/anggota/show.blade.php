@extends('layout.app')

@section('content')
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-header">
                <h4>Detail Anggota</h4>
            </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th width="30%">Nama Lengkap</th>
                                <td>{{ $anggota->nama }}</td>
                            </tr>
                            <tr>
                                <th>Tempat & Tanggal Lahir</th>
                                <td>{{ $anggota->tempat_lahir }},
                                    {{ \Carbon\Carbon::parse($anggota->tanggal_lahir)->format('d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{ $anggota->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                            </tr>
                            <tr>
                                <th>Agama</th>
                                <td>{{ $anggota->agama }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $anggota->alamat }}</td>
                            </tr>
                            <tr>
                                <th>No HP / WhatsApp</th>
                                <td>{{ $anggota->no_hp }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $anggota->email ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>NIK / KTP</th>
                                <td>{{ $anggota->nik ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Pendidikan Terakhir</th>
                                <td>{{ $anggota->pendidikan ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Pekerjaan</th>
                                <td>{{ $anggota->pekerjaan ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Sekolah / Kampus</th>
                                <td>{{ $anggota->nama_sekolah ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Nama Wali</th>
                                <td>{{ $anggota->nama_wali ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>No HP Wali</th>
                                <td>{{ $anggota->no_hp_wali ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Alamat Wali</th>
                                <td>{{ $anggota->alamat_wali ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Tingkatan Sabuk</th>
                                <td>{{ $anggota->tingkatan_sabuk  ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Status Keanggotaan</th>
                                <td>{{ ucfirst($anggota->status_keanggotaan) }}</td>
                            </tr>
                            <tr>
                                <th>Tahun Mulai Latihan</th>
                                <td>{{ $anggota->tahun_mulai_latihan ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Cabang / Ranting</th>
                                <td>{{ $anggota->cabang_ranting ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Pas Foto</th>
                                <td>
                                    @if($anggota->foto)
                                        <img src="{{ asset('storage/' . $anggota->foto) }}" alt="Foto" width="100"
                                            class="img-thumbnail">
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Scan KTP / Kartu Pelajar</th>
                                <td>
                                    @if($anggota->ktp)
                                        <a href="{{ asset('storage/' . $anggota->ktp) }}" target="_blank">Lihat Dokumen</a>
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Kartu Keluarga</th>
                                <td>
                                    @if($anggota->kartu_keluarga)
                                        <a href="{{ asset('storage/' . $anggota->kartu_keluarga) }}" target="_blank">Lihat Dokumen</a>
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Sertifikat / Piagam</th>
                                <td>
                                    @if($anggota->sertifikat)
                                        <a href="{{ asset('storage/' . $anggota->sertifikat) }}" target="_blank">Lihat Dokumen</a>
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Riwayat Penyakit</th>
                                <td>{{ $anggota->riwayat_penyakit ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Kontak Darurat</th>
                                <td>{{ $anggota->kontak_darurat ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Status Verifikasi</th>
                                <td>
                                    @if($anggota->status == 'pending')
                                        <span class="badge bg-warning">Pending</span>
                                    @elseif($anggota->status == 'proses')
                                        <span class="badge bg-info">Proses</span>
                                    @else
                                        <span class="badge bg-success">Terverifikasi</span>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <a href="{{ route('anggota.index') }}" class="btn btn-secondary mt-3">Kembali</a>
                </div>

        </div>
    </div>
@endsection
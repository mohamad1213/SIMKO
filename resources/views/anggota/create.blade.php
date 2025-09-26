@extends('layout.app')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Pendaftaran Anggota</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('anggota.store') }}" method="POST" enctype="multipart/form-data"
                            id="smartwizardForm">
                            @csrf
                            <div id="smartwizard" class="form-wizard order-create">
                                <!-- Wizard Steps -->
                                <ul class="nav nav-wizard">
                                    <li><a class="nav-link" href="#step1"><span></span>
                                            <p class="mt-2 mb-0">Data Pribadi</p>
                                        </a></li>
                                    <li><a class="nav-link" href="#step2"><span></span>
                                            <p class="mt-2 mb-0">Pendidikan & Pekerjaan</p>
                                        </a></li>
                                    <li><a class="nav-link" href="#step3"><span></span>
                                            <p class="mt-2 mb-0">Data Wali</p>
                                        </a></li>
                                    <li><a class="nav-link" href="#step4"><span></span>
                                            <p class="mt-2 mb-0">Keanggotaan Pencak Silat</p>
                                        </a></li>
                                    <li><a class="nav-link" href="#step5"><span></span>
                                            <p class="mt-2 mb-0">Dokumen Pendukung </p>
                                        </a></li>
                                    <li><a class="nav-link" href="#step6"><span></span>
                                            <p class="mt-2 mb-0">Kesehatan & Keamanan</p>
                                        </a></li>
                                </ul>

                                <!-- Wizard Content -->
                                <div class="tab-content">
                                    <!-- Step 1: Data Pribadi -->
                                    <div id="step1" class="tab-pane" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Nama Lengkap</label>
                                                <input type="text" name="nama" class="form-control" required>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Tempat Lahir</label>
                                                <input type="text" name="tempat_lahir" class="form-control" required>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Tanggal Lahir</label>
                                                <input type="date" name="tanggal_lahir" class="form-control" required>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Jenis Kelamin</label>
                                                <select name="jenis_kelamin" class="form-control" required>
                                                    <option value="">Pilih</option>
                                                    <option value="L">Laki-laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Agama</label>
                                                <input type="text" name="agama" class="form-control" required>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Alamat</label>
                                                <textarea name="alamat" class="form-control" rows="2"
                                                    required></textarea>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">No HP / WhatsApp</label>
                                                <input type="text" name="no_hp" class="form-control" required>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Email (Opsional)</label>
                                                <input type="email" name="email" class="form-control">
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">NIK / KTP (Opsional)</label>
                                                <input type="text" name="nik" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Step 2: Pendidikan & Pekerjaan -->
                                    <div id="step2" class="tab-pane" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-4 mb-3">
                                                <label class="form-label">Pendidikan Terakhir</label>
                                                <input type="text" name="pendidikan" class="form-control">
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <label class="form-label">Pekerjaan / Profesi</label>
                                                <input type="text" name="pekerjaan" class="form-control">
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <label class="form-label">Nama Sekolah / Kampus</label>
                                                <input type="text" name="nama_sekolah" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Step 3: Data Wali -->
                                    <div id="step3" class="tab-pane" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-4 mb-3">
                                                <label class="form-label">Nama Wali</label>
                                                <input type="text" name="nama_wali" class="form-control" required>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <label class="form-label">No HP Wali</label>
                                                <input type="text" name="no_hp_wali" class="form-control" required>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <label class="form-label">Alamat Wali</label>
                                                <textarea name="alamat_wali" class="form-control" rows="2"
                                                    required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Step 4: Keanggotaan Pencak Silat -->
                                    <div id="step4" class="tab-pane" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-3 mb-3">
                                                <label class="form-label">Tingkatan Sabuk</label>
                                                <input type="text" name="tingkatan_sabuk" class="form-control">
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                                <label class="form-label">Status Keanggotaan</label>
                                                <select name="status_keanggotaan" class="form-control" required>
                                                    <option value="baru">Baru</option>
                                                    <option value="pindahan">Pindahan</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                                <label class="form-label">Tahun Mulai Latihan</label>
                                                <input type="number" name="tahun_mulai_latihan" class="form-control"
                                                    required>
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                                <label class="form-label">Cabang / Ranting</label>
                                                <input type="text" name="cabang_ranting" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Step 5: Dokumen -->
                                    <div id="step5" class="tab-pane" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-3 mb-3">
                                                <label class="form-label">Pas Foto</label>
                                                <input type="file" name="foto" class="form-control">
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                                <label class="form-label">Scan KTP / Kartu Pelajar</label>
                                                <input type="file" name="ktp" class="form-control">
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                                <label class="form-label">Kartu Keluarga</label>
                                                <input type="file" name="kartu_keluarga" class="form-control">
                                            </div>
                                            <div class="col-lg-3 mb-3">
                                                <label class="form-label">Sertifikat / Piagam</label>
                                                <input type="file" name="sertifikat" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Step 6: Kesehatan & Keamanan -->
                                    <div id="step6" class="tab-pane" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Riwayat Penyakit</label>
                                                <textarea name="riwayat_penyakit" class="form-control"
                                                    rows="2"></textarea>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Kontak Darurat</label>
                                                <input type="text" name="kontak_darurat" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="text-end mt-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(document).ready(function () {
        $('#smartwizard').smartWizard({
            selected: 0,
            theme: 'dots',
            autoAdjustHeight: true,
            backButtonSupport: true,
            transitionEffect: 'fade'
        });
    });
</script>
@endsection
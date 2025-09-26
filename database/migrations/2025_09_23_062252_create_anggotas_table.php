<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();

            // 1. Data Pribadi
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L','P']);
            $table->string('agama');
            $table->text('alamat');
            $table->string('no_hp');
            $table->string('email')->nullable();
            $table->string('nik')->nullable();

            // 2. Pendidikan & Pekerjaan
            $table->string('pendidikan')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('nama_sekolah')->nullable();

            // 3. Keluarga / Wali
            $table->string('nama_wali');
            $table->string('no_hp_wali');
            $table->text('alamat_wali');

            // 4. Keanggotaan Pencak Silat
            $table->string('tingkatan_sabuk')->nullable();
            $table->enum('status_keanggotaan', ['baru','pindahan'])->default('baru');
            $table->year('tahun_mulai_latihan');
            $table->string('cabang_ranting');

            // 5. Dokumen Pendukung
            $table->string('foto')->nullable();
            $table->string('ktp')->nullable();
            $table->string('kartu_keluarga')->nullable();
            $table->string('sertifikat')->nullable();

            // 6. Kesehatan & Keamanan
            $table->text('riwayat_penyakit')->nullable();
            $table->string('kontak_darurat');

            $table->enum('status', ['pending','proses','terverifikasi'])->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};

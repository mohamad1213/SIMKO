<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'alamat', 'no_hp', 'email', 'nik',
        'pendidikan', 'pekerjaan', 'nama_sekolah',
        'nama_wali', 'no_hp_wali', 'alamat_wali',
        'tingkatan_sabuk', 'status_keanggotaan', 'tahun_mulai_latihan', 'cabang_ranting',
        'foto', 'ktp', 'kartu_keluarga', 'sertifikat',
        'riwayat_penyakit', 'kontak_darurat',
        'status'
    ];
}

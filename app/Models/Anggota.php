<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;


    // Field yang boleh diisi mass-assignment
    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'foto',
        'riwayat_prestasi',
        'status',
    ];
}

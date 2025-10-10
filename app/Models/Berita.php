<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'beritas'; 
    protected $fillable = [
        'judul',
        'slug',
        'kategori',
        'tanggal',
        'lokasi',
        'deskripsi',
        'gambar',
    ];

    protected static function booted()
    {
        static::creating(function ($berita) {
            $berita->slug = Str::slug($berita->judul);
        });

        static::updating(function ($berita) {
            $berita->slug = Str::slug($berita->judul);
        });
    }
}


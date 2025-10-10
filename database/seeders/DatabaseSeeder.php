<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Berita::create([
        'judul' => 'Kegiatan Kenaikan Tingkat UKM Pagar Nusa 2025',
        'kategori' => 'Kegiatan',
        'tanggal' => '2025-10-10',
        'lokasi' => 'Aula Utama Universitas PGRI Yogyakarta',
        'deskripsi' => '<p>UKM Pagar Nusa sukses menyelenggarakan acara kenaikan tingkat dengan suasana penuh semangat dan kebersamaan.</p>
                        <p>Acara dihadiri oleh Ketua UKM, pelatih senior, serta tamu undangan dari berbagai cabang Pagar Nusa.</p>',
        'gambar' => 'app/public/frontend/img/about-2.jpg'
    ]);
    }

}

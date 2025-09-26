<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnggotaController extends Controller
{
    // Menampilkan semua anggota
    public function index()
    {
        $anggotas = Anggota::all();
        return view('anggota.index', compact('anggotas'));
    }

    // Form wizard pendaftaran anggota
    public function create()
    {
        return view('anggota.create');
    }

    // Simpan data anggota baru
    public function store(Request $request)
    {
        $request->validate([
            // 1. Data Pribadi
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'agama' => 'required|string|max:50',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:20',
            'email' => 'nullable|email|unique:anggotas,email',
            'nik' => 'nullable|string|max:20',

            // 2. Pendidikan & Pekerjaan
            'pendidikan' => 'nullable|string|max:50',
            'pekerjaan' => 'nullable|string|max:50',
            'nama_sekolah' => 'nullable|string|max:100',

            // 3. Data Wali
            'nama_wali' => 'required|string|max:255',
            'no_hp_wali' => 'required|string|max:20',
            'alamat_wali' => 'required|string',

            // 4. Keanggotaan
            'tingkatan_sabuk' => 'nullable|string|max:50',
            'status_keanggotaan' => 'required|in:baru,pindahan',
            'tahun_mulai_latihan' => 'required|digits:4|integer',
            'cabang_ranting' => 'required|string|max:100',

            // 5. Dokumen
            'foto' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'ktp' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'kartu_keluarga' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'sertifikat' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',

            // 6. Kesehatan & Keamanan
            'riwayat_penyakit' => 'nullable|string',
            'kontak_darurat' => 'required|string|max:255',
        ]);

        $data = $request->all();

        // Upload file
        foreach(['foto','ktp','kartu_keluarga','sertifikat'] as $file){
            if($request->hasFile($file)){
                $data[$file] = $request->file($file)->store('anggotas/'.$file,'public');
            }
        }

        Anggota::create($data);

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil ditambahkan.');
    }

    // Detail anggota
    public function show(Anggota $anggota)
    {
        $anggotas = Anggota::all();
        return view('anggota.show', compact('anggotas'));
    }

    // Form edit anggota
    public function edit(Anggota $anggota)
    {
        return view('anggota.edit', compact('anggota'));
    }

    // Update data anggota
    public function update(Request $request, Anggota $anggota)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'agama' => 'required|string|max:50',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:20',
            'email' => 'nullable|email|unique:anggotas,email,'.$anggota->id,
            'nik' => 'nullable|string|max:20',
            'pendidikan' => 'nullable|string|max:50',
            'pekerjaan' => 'nullable|string|max:50',
            'nama_sekolah' => 'nullable|string|max:100',
            'nama_wali' => 'required|string|max:255',
            'no_hp_wali' => 'required|string|max:20',
            'alamat_wali' => 'required|string',
            'tingkatan_sabuk' => 'nullable|string|max:50',
            'status_keanggotaan' => 'required|in:baru,pindahan',
            'tahun_mulai_latihan' => 'required|digits:4|integer',
            'cabang_ranting' => 'required|string|max:100',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'ktp' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'kartu_keluarga' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'sertifikat' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'riwayat_penyakit' => 'nullable|string',
            'kontak_darurat' => 'required|string|max:255',
        ]);

        $data = $request->all();

        // Upload file baru dan hapus file lama jika ada
        foreach(['foto','ktp','kartu_keluarga','sertifikat'] as $file){
            if($request->hasFile($file)){
                if($anggota->$file){
                    Storage::disk('public')->delete($anggota->$file);
                }
                $data[$file] = $request->file($file)->store('anggotas/'.$file,'public');
            }
        }

        $anggota->update($data);

        return redirect()->route('anggota.index')->with('success', 'Data anggota berhasil diperbarui.');
    }

    // Hapus anggota
    public function destroy(Anggota $anggota)
    {
        foreach(['foto','ktp','kartu_keluarga','sertifikat'] as $file){
            if($anggota->$file){
                Storage::disk('public')->delete($anggota->$file);
            }
        }

        $anggota->delete();

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil dihapus.');
    }
}

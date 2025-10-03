<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasis = Prestasi::latest()->get();
        return view('admin.prestasi.index', compact('prestasis'));
    }

    public function create()
    {
        return view('admin.prestasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'penyelenggara' => 'nullable|string|max:255',
            'tingkat' => 'required|in:Sekolah,Kecamatan,Kabupaten,Provinsi,Nasional,Internasional',
            'tahun' => 'required|digits:4|integer',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $request->file('gambar') 
            ? $request->file('gambar')->store('prestasi', 'public') 
            : null;

        Prestasi::create([
            'nama' => $request->nama,
            'penyelenggara' => $request->penyelenggara,
            'tingkat' => $request->tingkat,
            'tahun' => $request->tahun,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path,
        ]);

        return redirect()->route('admin.prestasi.index')->with('success', 'Prestasi berhasil ditambahkan.');
    }

    public function show($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('admin.prestasi.show', compact('prestasi'));
    }

    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('admin.prestasi.edit', compact('prestasi'));
    }

    public function update(Request $request, $id)
    {
        $prestasi = Prestasi::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'penyelenggara' => 'nullable|string|max:255',
            'tingkat' => 'required|in:Sekolah,Kecamatan,Kabupaten,Provinsi,Nasional,Internasional',
            'tahun' => 'required|digits:4|integer',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['nama','penyelenggara','tingkat','tahun','deskripsi']);

        if ($request->hasFile('gambar')) {
            if ($prestasi->gambar && Storage::disk('public')->exists($prestasi->gambar)) {
                Storage::disk('public')->delete($prestasi->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('prestasi', 'public');
        }

        $prestasi->update($data);

        return redirect()->route('admin.prestasi.index')->with('success', 'Prestasi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);

        if ($prestasi->gambar && Storage::disk('public')->exists($prestasi->gambar)) {
            Storage::disk('public')->delete($prestasi->gambar);
        }

        $prestasi->delete();

        return redirect()->route('admin.prestasi.index')->with('success', 'Prestasi berhasil dihapus.');
    }
}

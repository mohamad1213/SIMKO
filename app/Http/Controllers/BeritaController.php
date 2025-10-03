<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $request->hasFile('gambar')
            ? $request->file('gambar')->store('berita', 'public')
            : null;

        Berita::create([
            'judul'   => $request->judul,
            'konten'  => $request->konten,
            'gambar'  => $path,
            'tanggal' => now(),
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function show(Berita $berita)
    {
        return view('admin.berita.show', compact('berita'));
    }

    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $berita->gambar;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('berita', 'public');
        }

        $berita->update([
            'judul'   => $request->judul,
            'konten'  => $request->konten,
            'gambar'  => $path,
            'tanggal' => now(),
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(Berita $berita)
    {
        $berita->delete();
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->get();
        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $request->file('gambar')->store('galeri', 'public');

        Galeri::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path,
            'tanggal' => now(),
        ]);

        return redirect()->route('admin.galeri.index')->with('success', 'Gambar berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.show', compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('galeri', 'public');
            $data['gambar'] = $path;
        }

        $galeri->update($data);

        return redirect()->route('admin.galeri.index')->with('success', 'Data galeri berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        // hapus gambar dari storage (opsional)
        if ($galeri->gambar && \Storage::disk('public')->exists($galeri->gambar)) {
            \Storage::disk('public')->delete($galeri->gambar);
        }

        $galeri->delete();

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil dihapus.');
    }
}

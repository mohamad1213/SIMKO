<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
        // 🔹 Validasi input
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'nullable|string|max:100',
            'tanggal' => 'nullable|date',
            'lokasi' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // 🔹 Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('berita', 'public');
        }

        // 🔹 Tambahkan slug otomatis dari judul
        $validated['slug'] = Str::slug($request->judul);

        // 🔹 Isi tanggal default jika kosong
        if (empty($validated['tanggal'])) {
            $validated['tanggal'] = now();
        }

        // 🔹 Simpan ke database
        Berita::create($validated);

        // 🔹 Redirect dengan pesan sukses
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan!');
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
            'judul' => 'required|string|max:255',
            'kategori' => 'nullable|string|max:100',
            'tanggal' => 'nullable|date',
            'lokasi' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'tanggal' => $request->tanggal ?? now(),
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
        ];

        // ganti gambar jika upload baru
        if ($request->hasFile('gambar')) {
            if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
                Storage::disk('public')->delete($berita->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('berita', 'public');
        }

        $berita->update($data);

        return redirect()->route('admin.berita.index')
            ->with('success', 'Berita berhasil diperbarui.');
    }
    public function destroy(Berita $berita)
    {
        if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
            Storage::disk('public')->delete($berita->gambar);
        }

        $berita->delete();

        return redirect()->route('admin.berita.index')
            ->with('success', 'Berita berhasil dihapus.');
    }
    public function index_frontend()
    {
        $beritas = Berita::latest()->get();
        return view('user.event', compact('beritas'));
    }

    public function show_frontend($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        $recentBeritas = Berita::where('id', '!=', $berita->id)->latest()->take(4)->get();
        return view('user.event_detail', compact('berita', 'recentBeritas'));
    }
}

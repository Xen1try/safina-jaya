<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio; // <-- IMPORT MODEL
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // <-- IMPORT STORAGE

class PortfolioController extends Controller
{
    /**
     * Menampilkan daftar portfolio.
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->get(); // Ambil semua data, urutkan dari terbaru
        return view('admin.portfolio.index', compact('portfolios'));
    }

    /**
     * Menampilkan form tambah data.
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

    /**
     * Menyimpan data baru ke database.
     */
    public function store(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Wajib ada gambar
        ]);

        // 2. Simpan Gambar
        // Gambar akan disimpan di 'storage/app/public/portfolio'
        // 'portfolio' adalah nama foldernya, 'public' adalah disk-nya
        $imagePath = $request->file('image')->store('portfolio', 'public');

        // 3. Simpan data ke Database
        Portfolio::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        // 4. Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.portfolio.index')
                         ->with('success', 'Proyek portfolio baru berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit data.
     */
    public function edit(Portfolio $portfolio) // <-- Model-View Binding
    {
        // Laravel otomatis akan mencari Portfolio berdasarkan ID
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    /**
     * Mengupdate data di database.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        // 1. Validasi Input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Gambar opsional (nullable)
        ]);

        $imagePath = $portfolio->image; // Gunakan gambar lama sebagai default

        // 2. Cek jika ada gambar baru di-upload
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            Storage::disk('public')->delete($portfolio->image);
            
            // Simpan gambar baru
            $imagePath = $request->file('image')->store('portfolio', 'public');
        }

        // 3. Update data di Database
        $portfolio->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        // 4. Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.portfolio.index')
                         ->with('success', 'Proyek portfolio berhasil diperbarui.');
    }

    /**
     * Menghapus data dari database.
     */
    public function destroy(Portfolio $portfolio)
    {
        // 1. Hapus gambar dari storage
        Storage::disk('public')->delete($portfolio->image);

        // 2. Hapus data dari database
        $portfolio->delete();

        // 3. Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.portfolio.index')
                         ->with('success', 'Proyek portfolio berhasil dihapus.');
    }
}

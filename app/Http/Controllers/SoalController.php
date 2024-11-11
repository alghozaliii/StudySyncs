<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SoalController extends Controller
{
    // Menampilkan daftar soal di dashboard
    public function index()
    {
        // Ambil semua soal dan tampilkan di dashboard
        $soals = Soal::all();
        return Inertia::render('Dashboard', [
            'soals' => $soals,
        ]);
    }

    // Menampilkan form untuk membuat soal baru
    public function create()
    {
        return Inertia::render('Soals/AddSoal');
    }

    // Menyimpan soal baru
    public function store(Request $request)
    {
        // Validasi input soal dan jawaban
        $validated = $request->validate([
            'soal' => 'required|string|max:255',
            'jawaban_1' => 'required|string|max:255',
            'jawaban_2' => 'required|string|max:255',
            'jawaban_3' => 'required|string|max:255',
            'gaya_belajar_1' => 'required|in:Kinestetik,Visual,Auditori',
            'gaya_belajar_2' => 'required|in:Kinestetik,Visual,Auditori',
            'gaya_belajar_3' => 'required|in:Kinestetik,Visual,Auditori',
        ]);

        // Menyimpan soal baru ke dalam database
        Soal::create($validated);

        // Kembali ke dashboard dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'Soal berhasil ditambahkan!');
    }

    // Menampilkan form edit soal
    public function edit(Soal $soal)
    {
        return Inertia::render('Soals/EditSoal', [
            'soal' => $soal,
        ]);
    }

    // Mengupdate soal
    public function update(Request $request, Soal $soal)
    {
        // Validasi input soal dan jawaban
        $validated = $request->validate([
            'soal' => 'required|string|max:255',
            'jawaban_1' => 'required|string|max:255',
            'jawaban_2' => 'required|string|max:255',
            'jawaban_3' => 'required|string|max:255',
            'gaya_belajar_1' => 'required|in:Kinestetik,Visual,Auditori',
            'gaya_belajar_2' => 'required|in:Kinestetik,Visual,Auditori',
            'gaya_belajar_3' => 'required|in:Kinestetik,Visual,Auditori',
        ]);

        // Mengupdate soal dengan data yang sudah divalidasi
        $soal->update($validated);

        // Kembali ke dashboard dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'Soal berhasil diupdate!');
    }

    // Menghapus soal
    public function destroy($id)
    {
        try {
            // Cari soal berdasarkan ID
            $soal = Soal::findOrFail($id);

            // Hapus soal dari database
            $soal->delete();

            // Kembali ke index soal dengan pesan sukses
            return redirect()->route('dashboard')->with('success', 'Soal berhasil dihapus!');
        } catch (\Exception $e) {
            // Pesan kesalahan jika terjadi masalah
            return redirect()->route('dashboard')->with('error', 'Terjadi kesalahan saat menghapus soal!');
        }
    }
}

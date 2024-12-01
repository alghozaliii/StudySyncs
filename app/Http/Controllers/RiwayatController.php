<?php

namespace App\Http\Controllers;

use App\Models\HasilGayaBelajar;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    // Menampilkan riwayat tes gaya belajar untuk pengguna
    public function index()
    {
        $user = auth()->user(); // Ambil data pengguna yang sedang login

        // Ambil riwayat tes gaya belajar berdasarkan user_id
        $learningHistory = HasilGayaBelajar::where('user_id', $user->id)
            ->orderBy('created_at', 'desc') // Mengurutkan berdasarkan tanggal terbaru
            ->get();

        // Kirim data pengguna dan riwayat tes gaya belajar ke tampilan menggunakan Inertia
        return inertia('RiwayatTest/Index', [
            'user' => $user,
            'learningHistory' => $learningHistory
        ]);
    }

    // Menampilkan detail riwayat tes gaya belajar
    public function show($id)
    {
        $user = auth()->user();
        
        // Ambil riwayat tes gaya belajar berdasarkan ID
        $history = HasilGayaBelajar::findOrFail($id);
        
        // Kirim data ke tampilan menggunakan Inertia
        return inertia('RiwayatTest/Show', [
            'user' => $user,
            'history' => $history
        ]);
    }
}



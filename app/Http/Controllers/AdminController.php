<?php

namespace App\Http\Controllers;

// TAMBAHKAN DUA 'USE' STATEMENT INI
use App\Models\ContactMessage;
use App\Models\Portfolio;
// -----------------------------

use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Menampilkan halaman dashboard admin.
     */
    public function dashboard(): View
    {
        // 1. Ambil data statistik
        $totalPortfolio = Portfolio::count();
        $totalMessages = ContactMessage::count();
        // (Anda bisa tambahkan $unreadMessages nanti jika mau)

        // 2. Kirim data ke view
        return view('admin.dashboard', [
            'totalPortfolio' => $totalPortfolio,
            'totalMessages' => $totalMessages,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

// ...
class ContactController extends Controller
{
    /**
     * Simpan data form kontak baru.
     */
    public function store(Request $request)
    {
        // 1. Validasi Input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        // 2. Simpan ke Database
        ContactMessage::create($validated);

        // 3. Redirect kembali ke halaman kontak
        //    dengan pesan sukses (session flash)
        return Redirect::route('contact')
               ->with('success', 'Pesan Anda telah berhasil terkirim! Kami akan segera menghubungi Anda.');
    }
}

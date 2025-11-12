<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage; // <-- IMPORT MODEL
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    /**
     * Menampilkan daftar pesan.
     */
    public function index()
    {
        // Ambil semua pesan, urutkan dari yang terbaru
        $messages = ContactMessage::latest()->get(); 

        return view('admin.messages.index', compact('messages'));
    }

    /**
     * Menghapus pesan dari database.
     */
    public function destroy(ContactMessage $contactMessage)
    {
        $contactMessage->delete();

        return redirect()->route('admin.messages.index')
                         ->with('success', 'Pesan berhasil dihapus.');
    }
}

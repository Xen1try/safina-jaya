<?php

use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Ganti rute bawaan dengan rute halaman statis kita
Route::view('/', 'pages.home')->name('home');
Route::view('/services', 'pages.services')->name('services');
// Portfolio
Route::get('/portfolio', function () {
    $portfolios = Portfolio::latest()->get(); // Ambil data portfolio
    return view('pages.portfolio', compact('portfolios'));
})->name('portfolio');
//
Route::view('/contact', 'pages.contact')->name('contact');
// Controller untuk fungsi contact
Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');


// Rute untuk Auth (Login/Register) yang dibuat oleh Breeze.
// Kita biarkan saja untuk Phase 2 (CMS) nanti.
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

// ===================================
// RUTE ADMIN (CMS)
// ===================================
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {

    // Rute untuk /admin/dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Rute untuk CRUD portfolio
    Route::resource('portfolio', PortfolioController::class);

    // Hanya untuk melihat (index) dan menghapus (destroy)
    Route::get('messages', [ContactMessageController::class, 'index'])->name('messages.index');
    Route::delete('messages/{contactMessage}', [ContactMessageController::class, 'destroy'])->name('messages.destroy');


});

// Baris ini harus ada di paling bawah
require __DIR__.'/auth.php';

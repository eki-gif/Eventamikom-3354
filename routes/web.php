<?php

use Illuminate\Support\Facades\Route;

// Import Controllers untuk halaman User/Guest
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;

// Import Controllers untuk halaman Admin
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
// Gunakan alias 'EventAdminController' agar tidak bentrok dengan EventController milik User
use App\Http\Controllers\Admin\EventController as EventAdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\TransactionController;

/*
|--------------------------------------------------------------------------
| RUTE HALAMAN DEPAN (GUEST / USER)
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/event/1', [EventController::class, 'show'])->name('events.show');
Route::get('/checkout', [EventController::class, 'checkout'])->name('checkout');
Route::get('/my-ticket', [EventController::class, 'ticket'])->name('ticket');

Route::get('/tentang', function () {
    return '<h1>Ini adalah halaman tentang aplikasi Event Hub</h1>';
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/profile', function () {
    return view('profil');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/bantuan', function () {
    return view('bantuan');
});

/*
|--------------------------------------------------------------------------
| RUTE HALAMAN ADMIN (AUTHENTICATION & MIDDLEWARE)
|--------------------------------------------------------------------------
*/

// Arahkan jika ada yang mengakses /login langsung ke halaman login admin
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

Route::prefix('admin')->name('admin.')->group(function () {
    
    // 1. Rute Auth (Bebas Akses untuk proses Login)
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // 2. Rute yang Dilindungi (Wajib Login & Wajib Admin)
    Route::middleware(['auth', 'admin'])->group(function () {
        
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        
        // Rute Resource untuk manajemen data
        Route::resource('events', EventAdminController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('partners', PartnerController::class);
        
        // Rute Transaksi (Berdasarkan modul 8)
        Route::get('transactions', [TransactionController::class, 'index'])->name('transactions.index');
        
    });
});
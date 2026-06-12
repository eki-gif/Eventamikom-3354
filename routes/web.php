<?php

use Illuminate\Support\Facades\Route;

// Import Controllers untuk halaman User/Guest
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CheckoutController; // <-- Tambahan Baru dari Modul 10

// Import Controllers untuk halaman Admin
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
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

Route::get('/event/{event}', [EventController::class, 'show'])->name('events.show');

// Rute Checkout Baru dari Modul 10
Route::get('/checkout/{event}', [CheckoutController::class, 'create'])->name('checkout.create');
Route::post('/checkout/{event}', [CheckoutController::class, 'store'])->name('checkout.store');

Route::get('/my-ticket', [EventController::class, 'ticket'])->name('ticket');

Route::get('/tentang', function () { return '<h1>Ini adalah halaman tentang aplikasi Event Hub</h1>'; });
Route::get('/kontak', function () { return view('kontak'); });
Route::get('/profile', function () { return view('profil'); });
Route::get('/katalog', function () { return view('katalog'); });
Route::get('/bantuan', function () { return view('bantuan'); });

/*
|--------------------------------------------------------------------------
| RUTE HALAMAN ADMIN (AUTHENTICATION & MIDDLEWARE)
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

Route::prefix('admin')->name('admin.')->group(function () {
    
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware(['auth', 'admin'])->group(function () {
        
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        
        Route::resource('events', EventAdminController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('partners', PartnerController::class);
        
        // Rute Transaksi (Berdasarkan modul 8 & 10)
        Route::get('transactions', [TransactionController::class, 'index'])->name('transactions.index');
        
    });
});
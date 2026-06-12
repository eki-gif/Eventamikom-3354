<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // 1. Ambil semua data kategori untuk dikirim ke view (Ini yang bikin error tadi!)
        $categories = Category::all();

        // 2. Ambil data event yang jadwalnya belum lewat
        $query = Event::with('category')
                    ->where('date', '>=', now())
                    ->orderBy('date', 'asc');

        // 3. Logika filter jika user mengklik tab kategori
        if ($request->has('category') && $request->category != '') {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // 4. Eksekusi query
        $events = $query->get();

        // 5. Kirim data $events dan $categories ke halaman welcome.blade.php
        return view('welcome', compact('events', 'categories'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; // Wajib ditambahkan agar sistem mengenali tabel Event

class EventController extends Controller
{
    public function show($id)
    {
        // 1. Ambil data event dari database berdasarkan ID yang diklik
        $event = Event::findOrFail($id);
        
        // 2. Kirim data (paket) $event tersebut ke halaman view event-detail
        return view('event-detail', compact('event'));
    }
}
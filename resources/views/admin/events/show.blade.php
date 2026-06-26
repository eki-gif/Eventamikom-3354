@extends('layouts.app')

@section('title', $event->title)

@section('content')
<main class="max-w-4xl mx-auto px-6 py-20">
    <a href="{{ url('/') }}" class="text-indigo-600 font-bold flex items-center gap-2 mb-6 w-max hover:text-indigo-800 transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        Kembali
    </a>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 mt-8">
        
        <div class="lg:col-span-2">
            <img src="{{ ($event->poster_path && Storage::disk('public')->exists($event->poster_path)) 
                        ? asset('storage/' . $event->poster_path) 
                        : 'https://placehold.co/800x400' }}" 
                 alt="{{ $event->title }}" 
                 class="w-full rounded-3xl object-cover mb-8 aspect-video border border-slate-100 shadow-sm">
            
            <h1 class="text-4xl font-extrabold mb-4">{{ $event->title }}</h1>
            
            <div class="flex gap-6 mb-8 border-b pb-8 text-slate-500">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span class="font-medium">{{ \Carbon\Carbon::parse($event->date)->format('d M Y, H:i') }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.243-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    <span class="font-medium">{{ $event->location }}</span>
                </div>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-4">Deskripsi Acara</h3>
                <p class="text-slate-600 leading-relaxed whitespace-pre-line">{{ $event->description }}</p>
            </div>
        </div>

        <div class="lg:col-span-1">
            <div class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm sticky top-8">
                <p class="text-slate-500 font-bold uppercase tracking-wider text-sm mb-2">Harga Tiket</p>
                <h3 class="text-4xl font-black text-indigo-600 mb-6">Rp {{ number_format($event->price, 0, ',', '.') }}</h3>
                
                <div class="flex items-center justify-between mb-8 pb-8 border-b border-slate-100">
                    <span class="text-slate-500 font-medium">Ketersediaan</span>
                    <span class="font-bold text-slate-800 bg-slate-100 px-3 py-1 rounded-lg">Sisa {{ $event->stock }} tiket</span>
                </div>

                @if($event->stock > 0)
                    <a href="{{ route('checkout.create', $event->id) }}" class="w-full block text-center py-4 bg-indigo-600 text-white rounded-2xl font-black text-xl shadow-xl shadow-indigo-200 hover:bg-indigo-700 active:scale-95 transition-all">
                        Beli Tiket
                    </a>
                @else
                    <button disabled class="w-full block text-center py-4 bg-slate-300 text-slate-500 rounded-2xl font-black text-xl cursor-not-allowed">
                        Tiket Habis
                    </button>
                @endif
            </div>
        </div>
        
    </div>
</main>
@endsection
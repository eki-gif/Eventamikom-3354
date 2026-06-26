@extends('layouts.app')
@section('content')
<main class="min-h-screen bg-indigo-600 flex items-center justify-center p-6">
    <div class="bg-white rounded-3xl w-full max-w-sm p-8 shadow-2xl">
        <p class="text-center text-xs font-bold text-indigo-400 tracking-widest uppercase mb-2">E-TICKET RESMI</p>
        <h2 class="text-center text-xl font-black mb-8">{{ $transaction->event->title }}</h2>
        
        <div class="space-y-4">
            <div class="flex justify-between border-b border-dashed border-slate-200 pb-4">
                <div><p class="text-xs text-slate-400">NAMA PEMBELI</p><p class="font-bold">{{ $transaction->customer_name }}</p></div>
                <div><p class="text-xs text-slate-400">WAKTU</p><p class="font-bold">{{ date('d M, H:i', strtotime($transaction->event->date)) }}</p></div>
            </div>
            <div class="flex justify-between">
                <div><p class="text-xs text-slate-400">ORDER ID</p><p class="font-bold">{{ $transaction->order_id }}</p></div>
                <div><p class="text-xs text-slate-400">LOKASI</p><p class="font-bold">{{ $transaction->event->location }}</p></div>
            </div>
        </div>

        <div class="mt-8 bg-slate-50 p-6 rounded-2xl text-center">
            <p class="font-mono text-sm bg-white border p-2">{{ $transaction->order_id }}</p>
        </div>

        <button onclick="window.print()" class="w-full mt-6 py-4 bg-indigo-600 text-white rounded-2xl font-bold">Cetak / Simpan PDF</button>
        <a href="{{ route('home') }}" class="block text-center mt-4 text-slate-400 text-sm font-bold">Kembali ke Beranda</a>
    </div>
</main>
@endsection
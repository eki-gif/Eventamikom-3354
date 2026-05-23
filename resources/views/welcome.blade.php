@extends('layouts.app')

@section('content')
<section class="max-w-7xl mx-auto px-6 py-20 flex flex-col md:flex-row items-center gap-12">
    <div class="flex-1 space-y-8">
        <span class="inline-block px-4 py-1.5 bg-indigo-100 text-indigo-700 rounded-full text-sm font-bold uppercase tracking-wider">
            #1 Event Platform
        </span>

        <h1 class="text-5xl md:text-7xl font-extrabold leading-tight">
            Temukan & Pesan <span class="text-indigo-600">Tiket Event</span> Impianmu.
        </h1>

        <p class="text-lg text-slate-500 max-w-lg leading-relaxed">
            Dari konser musik hingga workshop teknologi, semua ada di genggamanmu.
            AmikomEventHub membantu pengunjung menemukan event, kategori, dan partner pendukung.
        </p>

        <div class="flex gap-4">
            <a href="#categories"
               class="px-8 py-4 bg-indigo-600 text-white rounded-2xl font-bold text-lg shadow-xl shadow-indigo-200 hover:scale-105 transition-transform">
                Lihat Kategori
            </a>

            <a href="#partners"
               class="px-8 py-4 border-2 border-slate-200 rounded-2xl font-bold text-lg hover:border-indigo-600 hover:text-indigo-600 transition">
                Lihat Partner
            </a>
        </div>
    </div>

    <div class="flex-1 relative">
        <img src="{{ asset('assets/concert.png') }}"
             alt="Concert"
             class="rounded-[2rem] shadow-2xl relative z-10 w-full object-cover aspect-[4/5] object-center">
    </div>
</section>

<section id="events" class="max-w-7xl mx-auto px-6 py-20">
    <div class="flex justify-between items-end mb-12">
        <div>
            <h2 class="text-3xl font-extrabold mb-2">
                Event Terdekat
            </h2>

            <p class="text-slate-500 font-medium">
                Jangan sampai ketinggalan acara seru minggu ini!
            </p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="group bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden">
            <div class="relative overflow-hidden aspect-[3/4]">
                <img src="{{ asset('assets/concert.png') }}"
                     alt="Jazz Night"
                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">

                <div class="absolute top-4 left-4 px-3 py-1 bg-white/90 backdrop-blur rounded-lg text-xs font-bold uppercase text-indigo-600">
                    Musik
                </div>
            </div>

            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 group-hover:text-indigo-600 transition">
                    Jazz Night 2024
                </h3>

                <p class="text-slate-500 text-sm mb-4">
                    Event musik dan hiburan untuk mahasiswa.
                </p>
            </div>
        </div>

        <div class="group bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden">
            <div class="relative overflow-hidden aspect-[3/4]">
                <img src="{{ asset('assets/workshop.png') }}"
                     alt="Workshop"
                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">

                <div class="absolute top-4 left-4 px-3 py-1 bg-white/90 backdrop-blur rounded-lg text-xs font-bold uppercase text-indigo-600">
                    Workshop
                </div>
            </div>

            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 group-hover:text-indigo-600 transition">
                    Laravel Bootcamp
                </h3>

                <p class="text-slate-500 text-sm mb-4">
                    Workshop teknologi untuk meningkatkan skill digital.
                </p>
            </div>
        </div>

        <div class="group bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden">
            <div class="relative overflow-hidden aspect-[3/4]">
                <img src="{{ asset('assets/hackathon.png') }}"
                     alt="Hackathon"
                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">

                <div class="absolute top-4 left-4 px-3 py-1 bg-white/90 backdrop-blur rounded-lg text-xs font-bold uppercase text-indigo-600">
                    Coding
                </div>
            </div>

            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 group-hover:text-indigo-600 transition">
                    Hackathon 2024
                </h3>

                <p class="text-slate-500 text-sm mb-4">
                    Kompetisi pengembangan aplikasi digital.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="categories" class="max-w-7xl mx-auto px-6 py-20">
    <div class="text-center mb-12">
        <span class="inline-block px-4 py-1.5 bg-indigo-100 text-indigo-700 rounded-full text-sm font-bold uppercase tracking-wider mb-4">
            Kategori
        </span>

        <h2 class="text-3xl md:text-4xl font-extrabold mb-3">
            Kategori Platform AmikomEventHub
        </h2>

        <p class="text-slate-500 font-medium max-w-2xl mx-auto">
            Kategori membantu pengunjung menemukan event sesuai kebutuhan, seperti seminar,
            workshop, lomba, hiburan, dan kegiatan kampus lainnya.
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @forelse($categories as $category)
            <div class="bg-white rounded-3xl border border-slate-100 shadow-sm p-6 text-center hover:shadow-xl transition">
                <div class="w-14 h-14 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-4 font-black text-xl">
                    {{ strtoupper(substr($category->name, 0, 1)) }}
                </div>

                <h3 class="text-lg font-black text-slate-800">
                    {{ $category->name }}
                </h3>

                <p class="text-sm text-slate-500 mt-2">
                    Bagian kategori event pada platform AmikomEventHub.
                </p>
            </div>
        @empty
            <div class="col-span-full bg-white rounded-3xl border border-slate-100 shadow-sm p-10 text-center text-slate-500 font-bold">
                Belum ada data kategori.
            </div>
        @endforelse
    </div>
</section>

<section id="partners" class="max-w-7xl mx-auto px-6 py-20">
    <div class="text-center mb-12">
        <span class="inline-block px-4 py-1.5 bg-indigo-100 text-indigo-700 rounded-full text-sm font-bold uppercase tracking-wider mb-4">
            Partner
        </span>

        <h2 class="text-3xl md:text-4xl font-extrabold mb-3">
            Partner Pendukung Kami
        </h2>

        <p class="text-slate-500 font-medium max-w-2xl mx-auto">
            Daftar partner yang mendukung pengembangan dan pelaksanaan event pada AmikomEventHub.
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @forelse($partners as $partner)
            <div class="bg-white rounded-3xl border border-slate-100 shadow-sm p-6 text-center hover:shadow-xl transition">
                <div class="h-24 flex items-center justify-center mb-4">
                    @if($partner->logo_url)
                        <img src="{{ $partner->logo_url }}"
                             alt="{{ $partner->name }}"
                             class="max-h-20 max-w-full object-contain">
                    @else
                        <div class="w-20 h-20 bg-slate-100 text-slate-500 rounded-2xl flex items-center justify-center font-black">
                            Logo
                        </div>
                    @endif
                </div>

                <h3 class="text-lg font-black text-slate-800">
                    {{ $partner->name }}
                </h3>
            </div>
        @empty
            <div class="col-span-full bg-white rounded-3xl border border-slate-100 shadow-sm p-10 text-center text-slate-500 font-bold">
                Belum ada data partner.
            </div>
        @endforelse
    </div>
</section>
@endsection
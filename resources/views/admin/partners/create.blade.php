@extends('layouts.admin', ['title' => 'Tambah Partner'])

@section('content')
<header class="mb-10">
    <h1 class="text-3xl font-black">Tambah Partner</h1>
    <p class="text-slate-500 font-medium">
        Masukkan data partner pendukung AmikomEventHub.
    </p>
</header>

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm p-8 max-w-2xl">
    <form action="{{ route('admin.partners.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label class="block mb-2 font-bold text-slate-700">
                Nama Partner
            </label>

            <input type="text"
                   name="name"
                   value="{{ old('name') }}"
                   placeholder="Contoh: Universitas AMIKOM Yogyakarta"
                   class="w-full px-5 py-3 rounded-2xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                   required>

            @error('name')
                <p class="text-rose-600 text-sm mt-2 font-bold">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div>
            <label class="block mb-2 font-bold text-slate-700">
                Logo URL
            </label>

            <input type="text"
                   name="logo_url"
                   value="{{ old('logo_url') }}"
                   placeholder="https://example.com/logo.png"
                   class="w-full px-5 py-3 rounded-2xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">

            @error('logo_url')
                <p class="text-rose-600 text-sm mt-2 font-bold">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="flex gap-3">
            <button type="submit"
                    class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold hover:bg-indigo-700 transition">
                Simpan
            </button>

            <a href="{{ route('admin.partners.index') }}"
               class="px-6 py-3 bg-slate-100 text-slate-700 rounded-2xl font-bold hover:bg-slate-200 transition">
                Kembali
            </a>
        </div>
    </form>
</div>
@endsection
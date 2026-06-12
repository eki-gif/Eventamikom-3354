@extends('layouts.admin', ['title' => 'Kelola Partner'])

@section('content')
<header class="flex flex-col md:flex-row md:justify-between md:items-center gap-4 mb-10">
    <div>
        <h1 class="text-3xl font-black">Kelola Partner</h1>
        <p class="text-slate-500 font-medium">
            Tambah, ubah, hapus, dan cari data partner.
        </p>
    </div>

    <a href="{{ route('admin.partners.create') }}"
       class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg hover:bg-indigo-700 transition text-center">
        + Tambah Partner
    </a>
</header>

@if(session('success'))
    <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-2xl font-bold">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white rounded-[2rem] border border-slate-100 shadow-sm p-6 mb-6">
    <form method="GET" action="{{ route('admin.partners.index') }}" class="flex flex-col md:flex-row gap-3">
        <input type="text"
               name="search"
               value="{{ $search ?? '' }}"
               placeholder="Cari partner berdasarkan nama..."
               class="flex-1 px-5 py-3 rounded-2xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">

        <button type="submit"
                class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold hover:bg-indigo-700 transition">
            Search
        </button>

        <a href="{{ route('admin.partners.index') }}"
           class="px-6 py-3 bg-slate-100 text-slate-700 rounded-2xl font-bold hover:bg-slate-200 transition text-center">
            Reset
        </a>
    </form>
</div>

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                <tr>
                    <th class="px-8 py-4">ID</th>
                    <th class="px-8 py-4">Nama Partner</th>
                    <th class="px-8 py-4">Logo</th>
                    <th class="px-8 py-4">Created At</th>
                    <th class="px-8 py-4">Updated At</th>
                    <th class="px-8 py-4">Aksi</th>
                </tr>
            </thead>

            <tbody class="divide-y border-t">
                @forelse($partners as $partner)
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="px-8 py-6 font-bold text-slate-400">
                            {{ $partner->id }}
                        </td>

                        <td class="px-8 py-6 font-black text-slate-800">
                            {{ $partner->name }}
                        </td>

                        <td class="px-8 py-6">
                            @if($partner->logo_url)
                                <img src="{{ $partner->logo_url }}"
                                     alt="{{ $partner->name }}"
                                     class="w-20 h-20 object-contain bg-slate-50 rounded-xl border">
                            @else
                                <span class="text-slate-400 font-bold">
                                    Tidak ada logo
                                </span>
                            @endif
                        </td>

                        <td class="px-8 py-6 text-sm text-slate-500">
                            {{ $partner->created_at }}
                        </td>

                        <td class="px-8 py-6 text-sm text-slate-500">
                            {{ $partner->updated_at }}
                        </td>

                        <td class="px-8 py-6 flex gap-2">
                            <a href="{{ route('admin.partners.edit', $partner->id) }}"
                               class="px-4 py-2 bg-indigo-50 text-indigo-600 rounded-xl font-bold hover:bg-indigo-600 hover:text-white transition">
                                Edit
                            </a>

                            <form action="{{ route('admin.partners.destroy', $partner->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus partner ini?')">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="px-4 py-2 bg-rose-50 text-rose-600 rounded-xl font-bold hover:bg-rose-600 hover:text-white transition">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-8 py-10 text-center text-slate-500 font-bold">
                            Data partner tidak ditemukan.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="mt-6">
    {{ $partners->links() }}
</div>
@endsection
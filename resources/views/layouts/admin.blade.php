<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 flex min-h-screen">

    <aside class="w-64 min-h-screen bg-[#2c297e] text-white flex flex-col justify-between sticky top-0 h-screen">
        
        <div>
            <div class="flex items-center gap-3 px-6 py-8">
                <div class="bg-white text-[#2c297e] font-black text-xl px-2 py-1 rounded-xl">AH</div>
                <span class="text-xl font-bold tracking-wide">AmikomEventHub</span>
            </div>

            <nav class="px-4 space-y-1">
                <p class="px-2 text-[11px] font-bold text-indigo-300 uppercase tracking-widest mb-4">Main Menu</p>

                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-3 rounded-xl transition-all duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-[#3b35a5] font-bold shadow-sm' : 'font-medium text-gray-300 hover:bg-white/5 hover:text-white' }}">
                    Dashboard
                </a>

                <a href="{{ route('admin.events.index') }}" class="block px-4 py-3 rounded-xl transition-all duration-200 {{ request()->routeIs('admin.events.*') ? 'bg-[#3b35a5] font-bold shadow-sm' : 'font-medium text-gray-300 hover:bg-white/5 hover:text-white' }}">
                    Kelola Event
                </a>

                <a href="{{ route('admin.categories.index') }}" class="block px-4 py-3 rounded-xl transition-all duration-200 {{ request()->routeIs('admin.categories.*') ? 'bg-[#3b35a5] font-bold shadow-sm' : 'font-medium text-gray-300 hover:bg-white/5 hover:text-white' }}">
                    Kelola Kategori
                </a>

                <a href="{{ route('admin.partners.index') }}" class="block px-4 py-3 rounded-xl transition-all duration-200 {{ request()->routeIs('admin.partners.*') ? 'bg-[#3b35a5] font-bold shadow-sm' : 'font-medium text-gray-300 hover:bg-white/5 hover:text-white' }}">
                    Kelola Partner
                </a>

                <div class="pt-4 mt-2 border-t border-[#3b35a5]/50">
                    <p class="px-2 text-[11px] font-bold text-indigo-300 uppercase tracking-widest mb-4">Laporan</p>
                    <a href="{{ route('admin.transactions.index') }}" class="block px-4 py-3 rounded-xl transition-all duration-200 {{ request()->routeIs('admin.transactions.index') ? 'bg-[#3b35a5] font-bold shadow-sm' : 'font-medium text-gray-300 hover:bg-white/5 hover:text-white' }}">
                        Semua Transaksi
                    </a>
                    <a href="{{ route('admin.transactions.success') }}" class="block px-4 py-3 rounded-xl transition-all duration-200 {{ request()->routeIs('admin.transactions.success') ? 'bg-[#3b35a5] font-bold shadow-sm' : 'font-medium text-gray-300 hover:bg-white/5 hover:text-white' }}">
                        Transaksi Sukses
                    </a>
                </div>
            </nav>
        </div>

        <div class="p-4 mb-4 border-t border-[#3b35a5] pt-4 mt-4">
            <a href="{{ url('/') }}" class="block px-4 py-3 rounded-xl transition-all duration-200 font-medium text-gray-300 hover:text-white hover:bg-white/5 mb-2">
                Kembali ke Website
            </a>

            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-red-300 hover:text-white hover:bg-red-500/20 transition-all duration-200 font-medium text-left">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    Keluar
                </button>
            </form>
        </div>
    </aside>

    <main class="flex-1 p-10 overflow-y-auto w-full">
        <header class="flex justify-between items-center mb-10 w-full col-span-full">
            <div>
                <h1 class="text-3xl font-black">@yield('page_title', 'Dashboard')</h1>
                <p class="text-slate-500 font-medium">@yield('page_subtitle', 'Selamat datang kembali, Admin!')</p>
            </div>
            <div class="flex items-center gap-4">
                <div class="text-right hidden md:block">
                    <p class="font-bold">Admin</p>
                    <p class="text-xs text-slate-400">Penyelenggara Utama</p>
                </div>
                <div class="w-12 h-12 bg-white rounded-2xl shadow-sm border flex items-center justify-center p-1">
                    <img src="https://ui-avatars.com/api/?name=admin&background=6366f1&color=fff" class="rounded-xl" alt="Admin Avatar">
                </div>
            </div>
        </header>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded-xl mb-6 font-bold text-sm">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
        
    </main>

</body>
</html>
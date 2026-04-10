<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home - EventHub Amikom</title>
</head>
<body class="bg-gray-100 flex">

    <aside class="w-64 bg-white min-h-screen p-6 shadow-xl border-r border-gray-100 flex flex-col fixed left-0 top-0">
        <div class="mb-10 text-center">
            <h1 class="text-2xl font-bold text-blue-700">Event<span class="text-black">Hub</span></h1>
            <p class="text-[10px] text-gray-400 uppercase tracking-widest">Amikom Platform</p>
        </div>
        
        <nav class="space-y-2 flex-grow">
            <a href="/" class="flex items-center gap-3 p-3 bg-blue-600 text-white rounded-xl shadow-lg transition">
                <span>🏠</span> Home
            </a>
            <a href="/profil" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-xl transition group">
                <span class="group-hover:scale-120 transition">👤</span> Profil Saya
            </a>
            <a href="/katalog" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-xl transition group">
                <span class="group-hover:scale-120 transition">📂</span> Katalog Event
            </a>
            <a href="/bantuan" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-xl transition group">
                <span class="group-hover:scale-120 transition">❓</span> Bantuan
            </a>
        </nav>

        <div class="mt-auto p-4 bg-gray-50 rounded-2xl text-center">
            <p class="text-xs text-gray-500 font-medium">Praktikum Digital Bisnis</p>
            <p class="text-[10px] text-gray-400">Versi 2026.1</p>
        </div>
    </aside>

    <main class="ml-64 w-full min-h-screen flex items-center justify-center p-8">
        
        <div class="max-w-5xl w-full bg-blue-700 rounded-[3rem] p-16 text-white shadow-2xl relative overflow-hidden">
            <div class="absolute top-[-10%] right-[-10%] w-64 h-64 bg-blue-600 rounded-full opacity-50"></div>
            <div class="absolute bottom-[-5%] left-[-5%] w-32 h-32 bg-blue-800 rounded-full opacity-50"></div>

            <div class="relative z-10 text-center">
                <span class="bg-blue-800/50 px-4 py-1 rounded-full text-sm font-medium border border-blue-400/30">
                    Selamat Datang 👋
                </span>
                
                <h2 class="text-6xl font-black mt-6 tracking-tight">
                    Event<span class="text-blue-300">Hub</span> Amikom
                </h2>
                
                <p class="mt-6 text-blue-100 text-xl max-w-2xl mx-auto leading-relaxed opacity-90">
                    Kelola dan temukan berbagai event menarik di Universitas Amikom. Platform terbaik untuk kolaborasi, kreativitas, dan inovasi mahasiswa.
                </p>
                
                <div class="mt-12 flex flex-wrap justify-center gap-4">
                    <a href="/katalog" class="bg-white text-blue-700 px-10 py-4 rounded-2xl font-bold shadow-xl hover:bg-gray-100 hover:-translate-y-1 transition-all active:scale-95">
                        Jelajahi Event →
                    </a>
                    <a href="/profil" class="bg-blue-900/40 backdrop-blur-md text-white border border-blue-400/30 px-10 py-4 rounded-2xl font-bold hover:bg-blue-800/60 transition-all">
                        Lengkapi Profil
                    </a>
                </div>
            </div>
        </div>

    </main>

</body>
</html>
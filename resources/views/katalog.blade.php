<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Katalog Event - EventHub</title>
</head>
<body class="bg-gray-50 flex">

    <aside class="w-64 bg-white min-h-screen p-6 shadow-xl border-r border-gray-100 flex flex-col fixed left-0 top-0">
        <div class="mb-10 text-center">
            <h1 class="text-2xl font-bold text-blue-700">Event<span class="text-black">Hub</span></h1>
            <p class="text-[10px] text-gray-400 uppercase tracking-widest">Amikom Platform</p>
        </div>
        <nav class="space-y-2 flex-grow">
            <a href="/" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-xl transition group">
                <span>🏠</span> Home
            </a>
            <a href="/profil" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-xl transition group">
                <span>👤</span> Profil Saya
            </a>
            <a href="/katalog" class="flex items-center gap-3 p-3 bg-blue-600 text-white rounded-xl shadow-lg transition">
                <span>📂</span> Katalog Event
            </a>
            <a href="/bantuan" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-xl transition group">
                <span>❓</span> Bantuan
            </a>
        </nav>
    </aside>

    <main class="ml-64 w-full p-12">
        <header class="mb-10">
            <h2 class="text-4xl font-extrabold text-gray-900">Katalog Event 📂</h2>
            <p class="text-gray-500 mt-2 text-lg">Temukan workshop dan seminar terbaik untuk tingkatkan skill kamu.</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="group bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mb-6 text-xl group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    💻
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Workshop Laravel 11</h3>
                <p class="text-gray-500 leading-relaxed mb-6">Kuasai framework PHP paling populer. Dari instalasi hingga deploy proyek nyata.</p>
                <div class="flex items-center justify-between mt-auto">
                    <span class="text-sm font-semibold text-blue-600 bg-blue-50 px-3 py-1 rounded-full italic">Terbatas</span>
                    <button class="text-gray-900 font-bold hover:text-blue-600 transition">Detail →</button>
                </div>
            </div>

            <div class="group bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-2xl flex items-center justify-center mb-6 text-xl group-hover:bg-purple-600 group-hover:text-white transition-colors">
                    🎨
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Seminar UI/UX Modern</h3>
                <p class="text-gray-500 leading-relaxed mb-6">Pelajari cara membuat antarmuka aplikasi yang intuitif dan disukai oleh pengguna.</p>
                <div class="flex items-center justify-between mt-auto">
                    <span class="text-sm font-semibold text-purple-600 bg-purple-50 px-3 py-1 rounded-full italic">Gratis</span>
                    <button class="text-gray-900 font-bold hover:text-purple-600 transition">Detail →</button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
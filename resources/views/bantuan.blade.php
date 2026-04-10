<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bantuan - EventHub</title>
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
            <a href="/katalog" class="flex items-center gap-3 p-3 text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-xl transition group">
                <span>📂</span> Katalog Event
            </a>
            <a href="/bantuan" class="flex items-center gap-3 p-3 bg-blue-600 text-white rounded-xl shadow-lg transition">
                <span>❓</span> Bantuan
            </a>
        </nav>
    </aside>

    <main class="ml-64 w-full p-12 flex flex-col items-center">
        <div class="max-w-4xl w-full">
            <header class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-gray-900">Pusat Bantuan ❓</h2>
                <p class="text-gray-500 mt-3 text-lg">Ada kendala? Cari jawaban untuk pertanyaan kamu di sini.</p>
            </header>

            <div class="space-y-4">
                <details class="group bg-white rounded-[1.5rem] border border-gray-100 shadow-sm overflow-hidden transition-all duration-300 open:shadow-md">
                    <summary class="flex justify-between items-center p-6 cursor-pointer list-none font-bold text-gray-800 text-lg">
                        Bagaimana cara mendaftar event?
                        <span class="text-blue-600 transition-transform group-open:rotate-180">▼</span>
                    </summary>
                    <div class="p-6 pt-0 text-gray-600 border-t border-gray-50 leading-relaxed">
                        Anda dapat masuk ke menu <strong>Katalog Event</strong>, pilih salah satu workshop atau seminar yang tersedia, lalu tekan tombol detail untuk melakukan pendaftaran melalui formulir yang disediakan.
                    </div>
                </details>

                <details class="group bg-white rounded-[1.5rem] border border-gray-100 shadow-sm overflow-hidden transition-all duration-300 open:shadow-md">
                    <summary class="flex justify-between items-center p-6 cursor-pointer list-none font-bold text-gray-800 text-lg">
                        Apakah saya akan mendapatkan sertifikat?
                        <span class="text-blue-600 transition-transform group-open:rotate-180">▼</span>
                    </summary>
                    <div class="p-6 pt-0 text-gray-600 border-t border-gray-50 leading-relaxed">
                        Tentu saja! E-Sertifikat resmi dari Universitas Amikom akan dikirimkan secara otomatis melalui email atau muncul di dashboard profil Anda maksimal 3 hari setelah acara selesai.
                    </div>
                </details>

                <details class="group bg-white rounded-[1.5rem] border border-gray-100 shadow-sm overflow-hidden transition-all duration-300 open:shadow-md">
                    <summary class="flex justify-between items-center p-6 cursor-pointer list-none font-bold text-gray-800 text-lg">
                        Siapa yang bisa mengikuti event ini?
                        <span class="text-blue-600 transition-transform group-open:rotate-180">▼</span>
                    </summary>
                    <div class="p-6 pt-0 text-gray-600 border-t border-gray-50 leading-relaxed">
                        Seluruh mahasiswa aktif Universitas Amikom Yogyakarta dapat mengikuti event yang tertera di katalog secara gratis maupun berbayar tergantung jenis kegiatannya.
                    </div>
                </details>
            </div>
        </div>
    </main>
</body>
</html>
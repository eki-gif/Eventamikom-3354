<!DOCTYPE html>
<html lang="id">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Profil - EventHub</title>
</head>
<body class="bg-gray-100 flex">
    <aside class="w-64 bg-white min-h-screen p-6 shadow-xl border-r fixed left-0 top-0">
        <h1 class="text-2xl font-bold text-blue-700 mb-10 text-center">EventHub</h1>
        <nav class="space-y-2">
            <a href="/" class="block p-3 text-gray-600 hover:bg-gray-100 rounded-lg">🏠 Home</a>
            <a href="/profil" class="block p-3 bg-blue-600 text-white rounded-lg shadow">👤 Profil Saya</a>
            <a href="/katalog" class="block p-3 text-gray-600 hover:bg-gray-100 rounded-lg">📂 Katalog Event</a>
            <a href="/bantuan" class="block p-3 text-gray-600 hover:bg-gray-100 rounded-lg">❓ Bantuan</a>
        </nav>
    </aside>

    <main class="ml-64 w-full min-h-screen flex items-center justify-center p-12">
        <div class="bg-white p-10 rounded-2xl shadow-xl max-w-2xl w-full border border-gray-200">
            <h2 class="text-3xl font-bold mb-6 text-gray-800 text-center">Data Praktikan</h2>
            <div class="flex items-center gap-6 border-b pb-6 mb-6">
                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold text-2xl">DB</div>
                <div>
                    <h3 class="text-xl font-bold text-gray-900">[Isi Nama Anda]</h3>
                    <p class="text-gray-500 font-medium">S1 Sistem Informasi - Amikom</p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 text-lg">
                <p class="text-gray-400">NIM:</p><p class="font-bold text-gray-800 text-right">3354</p>
                <p class="text-gray-400">Status:</p><p class="font-bold text-green-600 text-right">Aktif</p>
            </div>
        </div>
    </main>
</body>
</html>
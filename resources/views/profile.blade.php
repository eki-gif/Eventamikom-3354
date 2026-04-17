<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="max-w-[58%] mx-auto mt-5">
  <header class="flex justify-between items-center">
    <section>
      <h1 class="font-semibold text-gray-800 underline">Eki Gantengk</h1>
    </section>

    <section class="flex gap-3 underline text-gray-500">
      <a href="{{ url('/') }}">Home</a>
      <a href="{{ url('/katalog') }}">Katalog</a>
      <a href="{{ url('/bantuan') }}">Bantuan</a>
      <a href="{{ url('/profile') }}">Profile</a>
    </section>
  </header>
  <main>
    <section class="mt-24">
      <img src="https://images.genpi.co/uploads/arsip/normal/2022/04/20/aktor-jefri-nichol-foto-instagram-jefrinicholfansbase-oqcn.jpg" alt="" class="w-[12%] h-[12%] rounded-md">
      <p class="mt-3 font-semibold text-gray-800">Ahmad Firza Ananda</p>
      <p class="font-semibold text-gray-600">Fullstack Developer</p>
    </section>

    <section class="space-y-5 mt-6 leading-loose">
      <p>
        I’m Eki Ganteng, a 18-year-old currently exploring the world of entrepreneurship and business.
      </p>
    </section>

    <section class="mt-10">
      <h1 class="mb-4 font-semibold text-gray-600">Let's connect</h1>
      <div class="flex gap-6 underline">
        <a>Instagram</a>
        <a>Email</a>
        <a>Github</a>
        <a>Facebook</a>
      </div>
    </section>
  </main>
</body>
</html>
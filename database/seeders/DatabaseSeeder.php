<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | 1. Akun Admin
        |--------------------------------------------------------------------------
        */

        \App\Models\User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        /*
        |--------------------------------------------------------------------------
        | 2. 3 Kategori Event
        |--------------------------------------------------------------------------
        */

        $category1 = \App\Models\Category::create([
            'name' => 'Seminar IT',
            'slug' => 'seminar-it',
        ]);

        $category2 = \App\Models\Category::create([
            'name' => 'Entertainment',
            'slug' => 'entertainment',
        ]);

        $category3 = \App\Models\Category::create([
            'name' => 'Workshop',
            'slug' => 'workshop',
        ]);

        /*
        |--------------------------------------------------------------------------
        | 3. 6 Data Event
        |--------------------------------------------------------------------------
        */

        \App\Models\Event::create([
            'category_id' => $category1->id,
            'title' => 'UI/UX Masterclass',
            'description' => 'Belajar desain modern UI/UX bersama mentor profesional.',
            'date' => '2026-05-01 09:00:00',
            'location' => 'Lab Multimedia',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event1.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category1->id,
            'title' => 'AI Future Tech Summit',
            'description' => 'Seminar teknologi AI dan masa depan digital.',
            'date' => '2026-05-03 13:00:00',
            'location' => 'Cinema Unit 6',
            'price' => 75000,
            'stock' => 150,
            'poster_path' => 'posters/event2.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category2->id,
            'title' => 'Jazz Night Concert',
            'description' => 'Nikmati malam indah bersama alunan musik jazz.',
            'date' => '2026-05-05 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 100000,
            'stock' => 200,
            'poster_path' => 'posters/event3.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category2->id,
            'title' => 'E-Sport U-Champ',
            'description' => 'Turnamen e-sport antar mahasiswa nasional.',
            'date' => '2026-05-08 10:00:00',
            'location' => 'Auditorium Kampus',
            'price' => 25000,
            'stock' => 300,
            'poster_path' => 'posters/event4.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category3->id,
            'title' => 'Laravel Bootcamp',
            'description' => 'Workshop intensif Laravel untuk pemula hingga mahir.',
            'date' => '2026-05-10 08:00:00',
            'location' => 'Lab Programming',
            'price' => 60000,
            'stock' => 80,
            'poster_path' => 'posters/event5.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category3->id,
            'title' => 'Public Speaking Workshop',
            'description' => 'Pelatihan berbicara di depan umum dengan percaya diri.',
            'date' => '2026-05-12 14:00:00',
            'location' => 'Ruang Seminar',
            'price' => 40000,
            'stock' => 120,
            'poster_path' => 'posters/event6.png',
        ]);
    }
}
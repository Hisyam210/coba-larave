<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Event;
use App\Models\Category;
use App\Models\Pilar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::create([
            'name' => 'Hisyam',
            'email' => 'hisyam@gmail.com',
            'password' => bcrypt(12345)
        ]);

        // User::create([
        //     'name' => 'Sholihin',
        //     'email' => 'sholihin@gmail.com',
        //     'password' => bcrypt(123456)
        // ]);
        User::factory(5)->create();

        Category::create([
            'name' => 'Programing',
            'slug' => 'programing'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Cerpen',
            'slug' => 'ceritapend'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, accusamus ducimus blanditiis alias quod harum laudantium optio libero. Quo, nisi. Cupiditate eaque officia sapiente consectetur voluptas expedita velit, quos iusto corporis ut atque tempora sed magni, odio ullam non quas consequuntur praesentium laudantium soluta! In quas veritatis dolorem quisquam iusto!',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, accusamus ducimus blanditiis alias quod harum laudantium optio libero. Quo, nisi. Cupiditate eaque officia sapiente consectetur voluptas expedita velit, quos iusto corporis ut atque tempora sed magni, odio ullam non quas consequuntur praesentium laudantium soluta! In quas veritatis dolorem quisquam iusto!',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, accusamus ducimus blanditiis alias quod harum laudantium optio libero. Quo, nisi. Cupiditate eaque officia sapiente consectetur voluptas expedita velit, quos iusto corporis ut atque tempora sed magni, odio ullam non quas consequuntur praesentium laudantium soluta! In quas veritatis dolorem quisquam iusto!',
            'category_id' => 2,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, accusamus ducimus blanditiis alias quod harum laudantium optio libero. Quo, nisi. Cupiditate eaque officia sapiente consectetur voluptas expedita velit, quos iusto corporis ut atque tempora sed magni, odio ullam non quas consequuntur praesentium laudantium soluta! In quas veritatis dolorem quisquam iusto!',
            'category_id' => 2,
            'user_id' => 2
        ]);

        // Tentang::create([
        //     'title' => 'Kurikulum',
        //     'content' => 'Montesari dan Kurikulum Ananda mentari'
        // ]);
        // Tentang::create([
        //     'title' => 'Fasilitas',
        //     'content' => 'Ruangan kelas ber-AC, sarana & prasarana lengkap, makan siang dan snack 2 kali sehari, field trip, flexible-seating classroom, dsb.'
        // ]);
        // Tentang::create([
        //     'title' => 'filosofi',
        //     'content' => 'Sehat - Cerdas - Ceria'
        // ]);
        // Tentang::create([
        //     'title' => 'Guru Yang Kopenten dan Handal',
        //     'content' => 'Guru-guru di Ananda Mentari adalah pendidik, komunikator, dan motivator untuk setiap murid. Kita tidak hanya mendidik, tetapi kita juga sadar bahwa kita harus bisa menjadi role model dan orang tua kedua bagi murid.'
        // ]);
        // Tentang::create([
        //     'title' => 'Welcome To Ananda Mentari',
        //     'content' => 'is a unique program thas offers a mix of reguler full day and half-day early chilhood services for children.'
        // ]);

        // Pilar::create([
        //     'pilar' => 'intelligent',
        //     'content' => 'Multiple Intelligence, Learning Style, Brain-based Learning, Local Wisdom, Nationalism and Internationalism.'
        // ]);
        // Pilar::create([
        //     'pilar' => 'Strong Character',
        //     'content' => 'every child gets the best stimulation with fun, interesting play and exploration to develop their motor skills, self, pre-reading skills, early thinking math.'
        // ]);
        // Pilar::create([
        //     'pilar' => 'Globally Oriented',
        //     'content' => 'has an English program to prepare future generations to become citizens of the world.'
        // ]);

        // Fasilitas::create([
        //     'fasilitas' => 'Ruang Kepala Sekolah'
        // ]);
        // Fasilitas::create([
        //     'fasilitas' => 'Kelas Belajar'
        // ]);
        // Fasilitas::create([
        //     'fasilitas' => 'Perpustakaan'
        // ]);
        // Fasilitas::create([
        //     'fasilitas' => 'Tempat Bermain kanak-kanak'
        // ]);

        // Event::create([
        //     'title' => 'Memasak Bersama',
        //     'content' => 'Memasak Disekolah dengan di dampingi oleh orang tua.'
        // ]);
        // Event::create([
        //     'title' => 'Drumband',
        //     'content' => 'Belajar drumbend.'
        // ]);
        // Event::create([
        //     'title' => 'File trip',
        //     'content' => 'Study Tour.'
        // ]);
        // Event::create([
        //     'title' => 'Reading Time',
        //     'content' => 'Membaca Di waktu Luang'
        // ]);
    }
}

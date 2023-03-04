<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'INFOKOM IMATA',
            'username' => 'infokom2022',
            'email' => 'infokom@gmail.com',
            'password' => bcrypt('infokom2022'),
            'is_admin' => '1',
        ]);

        // Category::create([
        //     'name' => 'Pelatihan',
        //     'slug' => 'pelatihan',
        // ]);

        // Category::create([
        //     'name' => 'Webinar',
        //     'slug' => 'webinar',
        // ]);

        // Category::create([
        //     'name' => 'Acara',
        //     'slug' => 'acara',
        // ]);

        // Category::create([
        //     'name' => 'Seminar',
        //     'slug' => 'seminar',
        // ]);

        // Tag::create([
        //     'name' => 'Pelatihan',
        //     'slug' => 'pelatihan',
        // ]);

        // Tag::create([
        //     'name' => 'Webinar',
        //     'slug' => 'webinar',
        // ]);

        // Tag::create([
        //     'name' => 'Acara',
        //     'slug' => 'acara',
        // ]);

        // Tag::create([
        //     'name' => 'Seminar',
        //     'slug' => 'seminar',
        // ]);

        // Tag::create([
        //     'name' => 'Kegiatan',
        //     'slug' => 'kegiatan',
        // ]);

        // Tag::factory(10)->create();
        // Category::factory(10)->create();
        // Post::factory(20)->create();
        // Product::factory(10)->create();

        // Comment::factory(100)->create();
    }
}

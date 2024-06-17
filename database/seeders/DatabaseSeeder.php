<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Pengurus;
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
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            ProductSeeder::class
        ]);

        $posts = Post::factory(20)->recycle([
            User::all(),
            Category::all(),
            Tag::all(),
        ])->create();

        Comment::factory(100)->recycle($posts)->create();
    }
}

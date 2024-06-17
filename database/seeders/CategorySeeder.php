<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Pelatihan',
            'slug' => 'pelatihan',
        ]);

        Category::create([
            'name' => 'Webinar',
            'slug' => 'webinar',
        ]);

        Category::create([
            'name' => 'Acara',
            'slug' => 'acara',
        ]);

        Category::create([
            'name' => 'Seminar',
            'slug' => 'seminar',
        ]);
    }
}

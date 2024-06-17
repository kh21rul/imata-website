<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name' => 'Pelatihan',
            'slug' => 'pelatihan',
        ]);

        Tag::create([
            'name' => 'Webinar',
            'slug' => 'webinar',
        ]);

        Tag::create([
            'name' => 'Acara',
            'slug' => 'acara',
        ]);

        Tag::create([
            'name' => 'Seminar',
            'slug' => 'seminar',
        ]);

        Tag::create([
            'name' => 'Kegiatan',
            'slug' => 'kegiatan',
        ]);
    }
}

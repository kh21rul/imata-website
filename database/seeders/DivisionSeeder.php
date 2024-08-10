<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Division::factory(20)->create();

        Division::create([
            'title' => 'Teras',
            'slug' => 'teras',
            'sort' => 1
        ]);

        Division::create([
            'title' => 'Koordinator',
            'slug' => 'koordinator',
            'sort' => 2
        ]);

        Division::create([
            'title' => 'Agama',
            'slug' => 'agama',
            'sort' => 3
        ]);

        Division::create([
            'title' => 'Kaderisasi',
            'slug' => 'kaderisasi',
            'sort' => 4
        ]);

        Division::create([
            'title' => 'Kesekretariatan',
            'slug' => 'kesekretariatan',
            'sort' => 5
        ]);

        Division::create([
            'title' => 'Informasi dan Komunikasi',
            'slug' => 'informasi-dan-komunikasi',
            'sort' => 6
        ]);

        Division::create([
            'title' => 'Hubungan Masyarakat',
            'slug' => 'hubungan-masyarakat',
            'sort' => 7
        ]);

        Division::create([
            'title' => 'Kewirausahaan',
            'slug' => 'kewirausahaan',
            'sort' => 8
        ]);

        Division::create([
            'title' => 'Seni dan Budaya',
            'slug' => 'seni-dan-budaya',
            'sort' => 9
        ]);

        Division::create([
            'title' => 'Pemuda dan Olahraga',
            'slug' => 'pemuda-dan-olahraga',
            'sort' => 10
        ]);
    }
}

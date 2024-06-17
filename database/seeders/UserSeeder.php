<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
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

        User::factory(10)->create();
    }
}

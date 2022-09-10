<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        \App\Models\Pasien::factory(10)->create();
        \App\Models\Diagnosa::factory(10)->create();
        \App\Models\Obat::factory(10)->create();
        \App\Models\Rekammedis::factory(10)->create();
    }
}

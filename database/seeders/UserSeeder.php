<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        User::factory()->create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'level'=>'admin',
            'password'=> bcrypt('password')
        ]);
        
        User::factory()->create([
            'name'=>'Dokter',
            'email'=>'dokter@gmail.com',
            'level'=>'dokter',
            'password'=> bcrypt('password')
=======
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'level' => 'admin',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Dokter',
            'email' => 'dokter@gmail.com',
            'level' => 'dokter',
            'password' => bcrypt('password')
>>>>>>> 95d76bd (merge)
        ]);
    }
}

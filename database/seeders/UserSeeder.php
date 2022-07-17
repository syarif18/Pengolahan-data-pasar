<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Admin Dinas',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
            'username' => 'admindinas',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60)
        ]);
        User::create([
            'name' => 'Kepala Bidang',
            'level' => 'kabid',
            'email' => 'kabid@gmail.com',
            'username' => 'kepalabidang',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60)
        ]);
        User::create([
            'name' => 'Ahmad',
            'level' => 'user',
            'email' => 'ahmad@gmail.com',
            'username' => 'ahmad',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60)
        ]);

    }
}

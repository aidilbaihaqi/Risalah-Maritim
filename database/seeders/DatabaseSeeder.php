<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Data Admin
        User::create([
            'name' => 'admin-tekin',
            'email' => 'admintekin@risalahmaritim.com',
            'password' => Hash::make('@#$admintek1n@#$')
        ]);
        User::create([
            'name' => 'rivandi-ismanto',
            'email' => 'rivandick@risalahmaritim.com',
            'password' => Hash::make('rivandi666')
        ]);
        User::create([
            'name' => 'amelia',
            'email' => 'amelia@risalahmaritim.com',
            'password' => Hash::make('kak4melia')
        ]);

        $this->call([
            MemberSeeder::class,
            CategorySeeder::class
        ]); 
    }
}

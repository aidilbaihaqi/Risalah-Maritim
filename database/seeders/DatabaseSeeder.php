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
            'email' => 'admin-tekin@risalahmaritim.com',
            'password' => Hash::make('@#$admintek1n@#$')
        ]);

        // Kepala Divisi
        Member::create([
            'nim' => '2301020006',
            'name' => 'Aidil Baihaqi',
            'semester' => '3',
            'position' => 'Ketua Divisi',
            'division' => 'Teknologi Informasi',
            'major' => 'Teknik Informatika',
            'campus' => 'FTTK'
        ]);

        // ntar ko lanjutin data anggota seterusnya
    }
}

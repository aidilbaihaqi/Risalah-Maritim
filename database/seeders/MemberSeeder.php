<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::create([
            'nim' => '2301020006',
            'name' => 'Aidil Baihaqi',
            'semester' => '3',
            'position' => 'Ketua Divisi',
            'division' => 'Teknologi Informasi',
            'major' => 'Teknik Informatika',
            'campus' => 'FTTK'
        ]);
    }
}

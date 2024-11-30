<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Acara']);
        Category::create(['name' => 'Akademik dan Pendidikan']);
        Category::create(['name' => 'Featured']);
        Category::create(['name' => 'Straight']);
        Category::create(['name' => 'Kegiatan Mahasiswa']);
        Category::create(['name' => 'Lingkungan dan Sosial']);
        Category::create(['name' => 'Opini']);
        Category::create(['name' => 'Pengumuman']);
        Category::create(['name' => 'Prestasi']);
        Category::create(['name' => 'Seni dan Budaya']);
        Category::create(['name' => 'Teknologi dan Inovasi']);
        Category::create(['name' => 'Wawancara dan Podcast']);
    }
}

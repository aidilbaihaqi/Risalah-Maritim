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
        Category::class(['name' => 'Acara']);
        Category::class(['name' => 'Akademik dan Pendidikan']);
        Category::class(['name' => 'Featured']);
        Category::class(['name' => 'Straight']);
        Category::class(['name' => 'Kegiatan Mahasiswa']);
        Category::class(['name' => 'Lingkungan dan Sosial']);
        Category::class(['name' => 'Opini']);
        Category::class(['name' => 'Pengumuman']);
        Category::class(['name' => 'Prestasi']);
        Category::class(['name' => 'Seni dan Budaya']);
        Category::class(['name' => 'Teknologi dan Inovasi']);
        Category::class(['name' => 'Wawancara dan Podcast']);
    }
}

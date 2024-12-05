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
            'nim' => '2303010009',
            'name' => 'Sri Fadhila Amalia',
            'semester' => '3',
            'position' => 'Ketua',
            'division' => NULL,
            'major' => 'Pendidikan Bahasa dan Sastra Indonesia',
            'campus' => 'FKIP'
        ]);
        Member::create([
            'nim' => '2303010067',
            'name' => 'Rivaldo Paian Imanuel Lubis',
            'semester' => '3',
            'position' => 'Wakil Ketua',
            'division' => NULL,
            'major' => 'Pendidikan Bahasa Dan Sastra Indonesia',
            'campus' => 'FIKP'
        ]);
        Member::create([
            'nim' => '2303010007',
            'name' => 'Nur Melisa Putri',
            'semester' => '3',
            'position' => 'Sekretaris',
            'division' => NULL,
            'major' => 'Pendidikan Bahasa dan Sastra Indonesia',
            'campus' => 'FKIP'
        ]);
        Member::create([
            'nim' => '2304010113',
            'name' => 'Dwi Hermayanti',
            'semester' => '3',
            'position' => 'Pengatur Finansial',
            'division' => NULL,
            'major' => 'Akuntansi',
            'campus' => 'FEBM'
        ]);
        Member::create([
            'nim' => '2301020064',
            'name' => 'Larasati Anditta Putri',
            'semester' => '3',
            'position' => 'Ketua Divisi',
            'division' => 'Isak Senja',
            'major' => 'Teknik Informatika',
            'campus' => 'FTTK'
        ]);
        Member::create([
            'nim' => '2304020168',
            'name' => 'Rizky Arfahni Simanungkalit',
            'semester' => '3',
            'position' => 'Ketua Divisi',
            'division' => 'Tim Kreatif',
            'major' => 'Manajemen',
            'campus' => 'FEBM'

        ]);
        Member::create([
            'nim' => '2305040003',
            'name' => 'Muhamad Syafiq Gusmalianto',
            'semester' => '3',
            'position' => 'Ketua Divisi',
            'division' => 'Redaksi',
            // 'division' => 'Sastra',
            // 'division' => 'Hubungan Masyarakat',
            'major' => 'Ilmu Hukum',
            'campus' => 'FISIP'
        ]);
        Member::create([
            'nim' => '2303010001',
            'name' => 'Boston Chrisdelson Hutauruk',
            'semester' => '3',
            'position' => 'Ketua Divisi',
            'division' => 'Reporter',
            'major' => 'Pendidikan Bahasa dan Sastra Indonesia',
            'campus' => 'FKIP'
        ]);
        Member::create([
            'nim' => '2301020006',
            'name' => 'Aidil Baihaqi',
            'semester' => '3',
            'position' => 'Ketua Divisi',
            'division' => 'Teknologi Informasi',
            'major' => 'Teknologi Informatika',
            'campus' => 'FTTK'
        ]);
        Member::create([
            'nim' => '2205010114',
            'name' => 'Nugraha Kamarullah',
            'semester' => '5',
            'position' => 'Anggota',
            'division' => 'Berita',
            'major' => 'Ilmu Pemerintahan',
            'campus' => 'FISIP'
        ]);
        Member::create([
            'nim' => '2303020032',
            'name' => 'Raja Muhammad Duta Mulya Pasha',
            'semester' => '3',
            'position' => 'Anggota',
            'division' => 'Berita',
            'major' => 'Pendidikan Matematika',
            'campus' => 'FKIP'
        ]);
        Member::create([
            'nim' => '2305050054',
            'name' => 'Vira Septemberia',
            'semester' => '3',
            'position' => 'Anggota',
            'division' => 'Berita',
            'major' => 'Ilmu Hubungan Internasional',
            'campus' => 'FISIP'
        ]);
        Member::create([
            'nim' => '2105050001',
            'name' => 'Mimi Audia Zulha',
            'semester' => '7',
            'position' => 'Anggota',
            'division' => 'Hubungan Masyarakat',
            'major' => 'Ilmu Hubungan Internasional',
            'campus' => 'FISIP'
        ]);
        Member::create([
            'nim' => '2301020023',
            'name' => 'Sabriyah',
            'semester' => '3',
            'position' => 'Anggota',
            'division' => 'Isak Senja',
            'major' => 'Teknik Informatika',
            'campus' => 'FTTK'
        ]);
        Member::create([
            'nim' => '2301020013',
            'name' => 'Aurel Jihan Fahristy',
            'semester' => '3',
            'position' => 'Anggota',
            'division' => 'Isak Senja',
            'major' => 'Teknik Informatika',
            'campus' => 'FTTK'
        ]);
        Member::create([
            'nim' => '2306010003',
            'name' => 'Ken Ayu B.',
            'semester' => '3',
            'position' => 'Anggota',
            'division' => 'Isak Senja',
            'major' => 'FK',
            'campus' => 'FK'
        ]);
        Member::create([
            'nim' => '2205010017',
            'name' => 'Putri Nabila',
            'semester' => '5',
            'position' => 'Anggota',
            'division' => 'Isak Senja',
            'major' => 'Ilmu Pemerintahan',
            'campus' => 'FISIP'
        ]);
        Member::create([
            'nim' => '2301020014',
            'name' => 'Hifzul Aqli',
            'semester' => '3',
            'position' => 'Anggota',
            'division' => 'Tim Kreatif',
            'major' => 'Teknik Informatika',
            'campus' => 'FTTK'
        ]);
        Member::create([
            'nim' => '2304030007',
            'name' => 'Patar Marbun',
            'semester' => '3',
            'position' => 'Anggota',
            'division' => 'Reporter',
            'major' => 'Bisnis Digital',
            'campus' => 'FEBM'
        ]);
        Member::create([
            'nim' => '2405050005',
            'name' => 'Annisa Muna Hafizhah',
            'semester' => '1',
            'position' => 'Anggota',
            'division' => 'Reporter',
            'major' => 'Hubungan International',
            'campus' => 'FISIP'
        ]);
        Member::create([
            'nim' => '2303050095',
            'name' => 'Putri Silviana Oktavia',
            'semester' => '3',
            'position' => 'Anggota',
            'division' => 'Reporter',
            'major' => 'Pendidikan Bahasa Inggris',
            'campus' => 'FKIP'
        ]);
        Member::create([
            'nim' => '2405010028',
            'name' => 'Agan Tama Wijaya',
            'semester' => '1',
            'position' => 'Anggota',
            'division' => 'Reporter',
            'major' => 'Ilmu Pemerintahan',
            'campus' => 'FISIP'
        ]);
        Member::create([
            'nim' => '2301020053',
            'name' => 'Ester Faninta',
            'semester' => '3',
            'position' => 'Anggota',
            'division' => 'Reporter',
            'major' => 'Teknik Informatika',
            'campus' => 'FTTK'
        ]);
        Member::create([
            'nim' => '2304030006',
            'name' => 'Nur Intan Ratuloli',
            'semester' => '3',
            'position' => 'Anggota',
            'division' => 'Sastra',
            'major' => 'Bisnis Digital',
            'campus' => 'FEBM'
        ]);
        Member::create([
            'nim' => '2203050077',
            'name' => 'Bianca Naluri Firmansyah',
            'semester' => '5',
            'position' => 'Anggota',
            'division' => 'Sastra',
            'major' => 'Pendidikan Bahasa Inggris',
            'campus' => 'FKIP'
        ]);
        Member::create([
            'nim' => '2404020237',
            'name' => 'Gaufa Desrini Zal Putri',
            'semester' => '1',
            'position' => 'Anggota',
            'division' => 'Sastra',
            'major' => 'Manajemen',
            'campus' => 'FEBM'
        ]);
        Member::create([
            'nim' => '2305020053',
            'name' => 'Ririn Deswita Putri',
            'semester' => '3',
            'position' => 'Anggota',
            'division' => 'Sastra',
            'major' => 'Ilmu Administrasi Negara',
            'campus' => 'FISIP'
        ]);
        Member::create([
            'nim' => '2205010120',
            'name' => 'Fauzan Lidra Ramadhani',
            'semester' => '5',
            'position' => 'Anggota',
            'division' => 'Sastra',
            'major' => 'Ilmu Pemerintahan',
            'campus' => 'FISIP'
        ]);
        Member::create([
            'nim' => '2301020101',
            'name' => 'Rivandi Ismanto Panggabean',
            'semester' => '3',
            'position' => 'Anggota',
            'division' => 'Teknologi Informasi',
            'major' => 'Teknologi Informatika',
            'campus' => 'FTTK'
        ]);
    }
}

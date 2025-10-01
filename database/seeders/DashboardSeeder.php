<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dashboard;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hero Section
        Dashboard::create([
            'section' => 'hero',
            'title1' => 'DESA WISATA',
            'title2' => ' DESA BAWOMATALUO',
            'background' => 'images/bg1.jpg',
        ]);

        // Tentang Desa Wisata
        Dashboard::create([
            'section' => 'tentang',
            'title1' => 'Desa Wisata',
            'title2' => ' Bawomataluo',
            'konten' => 'Desa Bawõmataluo merupakan salah satu desa yang sudah ada sejak berabad-abad lalu, yang terletak di Kecamatan Fanayama, Kabupaten Nias Selatan, Sumatra Utara. Menurut catatan sejarah, nama desa Bawõmataluo berasal dari bahasa Nias yaitu Bawõ yang berarti "Bukit" dan Mataluo yang berarti "Matahari". Nama ini sesuai dengan lokasinya yang terletak di atas bukit dengan ketinggian 324 meter diatas permukaan laut (dpl).',
            'background' => 'images/bawomataluo2.jpg',
        ]);

        // Destinasi Wisata Section
        Dashboard::create([
            'section' => 'destinasi',
            'title1' => 'Destinasi Wisata Bawomataluo',
            'konten' => 'Objek Wisata Desa Bawomataluo adalah Desa Adat Bawomataluo, Desa Adat Hilisimaetano, dan Pantai Sorake dan Teluk Lagundri',
        ]);

        // Paket Wisata Section
        Dashboard::create([
            'section' => 'paket',
            'title1' => 'Paket Wisata Pilihan',
        ]);
    }
}

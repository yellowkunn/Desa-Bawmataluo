<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DestinasiWisata;

class DestinasiWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Destinasi Wisata',
                'background' => 'images/bg2.jpeg',
                'cardTitle' => 'Desa Adat Bawomataluo',
                'gambar' => 'images/destinasi/destinasi1.jpg',
                'cardContent' => "Pusat arsitektur Nias kuno. Tempat utama untuk menyaksikan ritual Fahombo (Lompat Batu) dan Tari Perang (Faluaya) di kompleks Omo Sebua (Rumah Adat Raja). Suasana desa di puncak bukit menawarkan pemandangan spektakuler."
            ],
            [
                'title' => 'Destinasi Wisata',
                'background' => 'images/bg2.jpeg',
                'cardTitle' => 'Desa Adat Hilisimaetano.',
                'gambar' => 'images/destinasi/destinasi2.jpg',
                'cardContent' => "Desa adat yang lebih otentik dan tenang dibandingkan Bawomataluo, dengan deretan Omo Sebua yang padat dan terawat. Cocok untuk field trip budaya, fotografi arsitektur, dan memahami tatanan sosial masyarakat Nias."
            ],
            [
                'title' => 'Destinasi Wisata',
                'background' => 'images/bg2.jpeg',
                'cardTitle' => 'Pantai Sorake dan Teluk Lagundri.',
                'gambar' => 'images/destinasi/destinasi3.jpg',
                'cardContent' => "Pantai terkenal dengan ombak kanan (right-hand break) terbaik di dunia, menjadi tuan rumah acara selancar internasional (Nias Pro). Teluk Lagundri adalah area yang tenang, ideal untuk berenang, menikmati sunset, dan melihat para peselancar beraksi dari bibir Pantai."
            ],
        ];

        foreach ($data as $item) {
            DestinasiWisata::create($item);
        }
    }
}

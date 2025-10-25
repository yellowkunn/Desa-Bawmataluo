<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutUs;

class TentangKamiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
 public function run(): void
    {
        AboutUs::create([
            'title' => 'Desa Wisata Bawomataluo',
            'background' => 'images/bg2.jpeg',
            'content' => "Desa Bawõmataluo merupakan salah satu desa bersejarah yang terletak di Kecamatan Fanayama, Kabupaten Nias Selatan, Sumatra Utara. Nama Bawõmataluo berasal dari bahasa Nias: 'Bawõ' berarti Bukit dan 'Mataluo' berarti Matahari. Sesuai namanya, desa ini berada di atas bukit setinggi 324 meter dpl, sehingga menawarkan panorama alam dan budaya yang unik. Desa ini terkenal dengan rumah adat (omo hada) yang masih kokoh, batu-batu megalit, serta tradisi adat yang lestari hingga saat ini.",
            'visi' => 'Visi',
            'visiContent' => 'Menjadi desa wisata budaya kelas dunia yang melestarikan tradisi lompat batu, rumah adat, dan nilai megalitik Nias untuk generasi mendatang.',
            'misi' => 'Misi',
            'misiContent' => json_encode([
                'Melestarikan rumah adat tradisional Omo Hada dan Omo Sebua.',
                'Menjadikan tradisi lompat batu dan tarian perang sebagai atraksi wisata utama.',
                'Mengembangkan produk wisata budaya dan kerajinan khas Nias.',
                'Meningkatkan kesejahteraan masyarakat melalui pengelolaan wisata berbasis komunitas.',
                'Mendorong pengakuan internasional Bawomataluo sebagai warisan dunia UNESCO.',
            ]),
            'gambar' => 'images/bawomataluo.jpg'
        ]);
    }
}




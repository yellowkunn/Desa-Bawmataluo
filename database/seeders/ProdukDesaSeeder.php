<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProdukDesa;

class ProdukDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProdukDesa::create([
            'title' => 'Produk Desa',
            'background' => 'images/bg2.jpeg',
            'deskripsi' => 'Produk desa merupakan olahan Masyarakat lokal yang mencerminkan pemanfaatan sumber daya alam serta keterampilan tradisional. Produk-produk ini menjadi bagian penting dari identitas desa dan berkontribusi pada perekonomian melalui kegiatan UMKM.',
        ]);

        // Produk-produk UMKM
        $produk = [
            ['cardTitle' => 'Miniatur Omo Sebua & Fahombo', 'gambar' => 'images/produkdesa/p1.jpg'],
            ['cardTitle' => 'Pakaian adat UMKM', 'gambar' => 'images/produkdesa/p2.jpg'],
            ['cardTitle' => 'Minyak Kelapa Nias & Olahan Laut', 'gambar' => 'images/produkdesa/p3.jpg'],
            ['cardTitle' => 'Köfö-köfö, Olahan makanan khas Nias', 'gambar' => 'images/produkdesa/p4.jpg'],
        ];

        foreach ($produk as $item) {
            ProdukDesa::create($item);
        }
    }
}

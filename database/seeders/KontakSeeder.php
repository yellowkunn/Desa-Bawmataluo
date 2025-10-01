<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kontak;

class KontakSeeder extends Seeder
{
    public function run(): void
    {
        Kontak::create([
            'title' => 'Kontak',
            'background' => 'images/bg2.jpeg',
            'lokasi' => 'Bawömataluo, Kec. Fanayama, Kabupaten Nias Selatan, Sumatera Utara',
            'maps'   => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31916.686612790814!2d97.76707602963145!3d0.6185414598592721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30288020d8d08c0b%3A0x8954966da06e7a63!2sBawomataluo%2C%20Kec.%20Fanayama%2C%20Kabupaten%20Nias%20Selatan%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1759313285729!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'whatsapp'     => '082167817319',
            'email'  => 'deriusmanao45@gmail.com',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaketWisata2;
use App\Models\Itinerary;

class PaketWisata2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ============================
        // PAKET WISATA 3D2N
        // ============================
        $paket3d2n = PaketWisata2::create(['label' => '3D2N']);

        $itineraries3d2n = [
            ['Hari 1', '14.00 – 14.30', 'Berkumpul di Lapangan Merdeka Medan, registrasi peserta, briefing singkat perjalanan'],
            ['Hari 1', '14.30 – 18.00', 'Perjalanan menuju Parapat'],
            ['Hari 1', '18.00 – 21.30', 'Perjalanan menuju Tarutung dan makan malam di restoran lokal'],
            ['Hari 1', '21.30 – 22.00', 'Tiba di Pelabuhan ASP/Pelindo Sibolga'],
            ['Hari 1', '22.00 – 06.00', 'Menyeberang dari Sibolga menuju Gunungsitoli dengan ferry, istirahat di kapal'],
            ['Hari 2', '06.00 – 07.00', 'Tiba di Gunungsitoli, sarapan'],
            ['Hari 2', '07.00 – 10.30', 'Perjalanan menuju Desa Bawomataluo, singgah untuk foto panorama tebing & pantai'],
            ['Hari 2', '10.30 – 12.00', 'Desa Adat Bawomataluo – melihat rumah adat besar khas Nias, atraksi Fahombo (lompat batu), interaksi dengan penduduk'],
            ['Hari 2', '12.00 – 13.00', 'Makan siang di restoran lokal'],
            ['Hari 2', '13.00 – 13.30', 'Perjalanan menuju Desa Hilimaetano'],
            ['Hari 2', '13.30 – 14.30', 'Desa Hilimaetano – menjelajahi rumah adat kecil & otentik, belajar sejarah & budaya dari kepala desa/pemandu'],
            ['Hari 2', '14.30 – 15.00', 'Perjalanan menuju Pantai Sorake'],
            ['Hari 2', '15.00 – 17.00', 'Pantai Sorake & Pantai Lagundri – pantai surfing terbaik dunia, menikmati laut atau berenang santai'],
            ['Hari 2', '17.00 – 20.30', 'Kembali ke Pelabuhan Gunungsitoli'],
            ['Hari 2', '20.30 – 22.00', 'Makan malam di Pelabuhan Gunungsitoli (Pelindo)'],
            ['Hari 2', '22.00 – 06.00', 'Menyeberang kembali ke Pelabuhan ASP/Pelindo Sibolga, istirahat di ferry'],
            ['Hari 3', '06.00 – 07.00', 'Tiba di Sibolga, sarapan dengan pemandangan'],
            ['Hari 3', '07.00 – 14.00', 'Perjalanan menuju Sidikalang, makan siang di restoran lokal'],
            ['Hari 3', '14.00 – 18.30', 'Melanjutkan perjalanan menuju Medan'],
            ['Hari 3', '18.30 – Selesai', 'Perjalanan selesai'],
        ];

        foreach ($itineraries3d2n as $data) {
            Itinerary::create([
                'paket_wisata2_id' => $paket3d2n->id,
                'hari' => $data[0],
                'waktu' => $data[1],
                'deskripsi' => $data[2],
            ]);
        }

        // ============================
        // PAKET WISATA 2D1N
        // ============================
        $paket2d1n = PaketWisata2::create(['label' => '2D1N']);

        $itineraries2d1n = [
            ['Hari 1', '07.00 – 07.30', 'Berkumpul di Gunungsitoli, registrasi peserta, briefing singkat perjalanan'],
            ['Hari 1', '07.30 – 11.00', 'Perjalanan menuju Desa Bawomataluo'],
            ['Hari 1', '11.00 – 12.30', 'Desa Bawomataluo – melihat rumah adat megah khas Nias, mendengarkan sejarah desa, menyaksikan atraksi lompat batu (fahombo)'],
            ['Hari 1', '12.30 – 13.30', 'Makan siang di restoran lokal'],
            ['Hari 1', '13.30 – 14.00', 'Perjalanan menuju Desa Hilimaetano'],
            ['Hari 1', '14.00 – 14.30', 'Desa Hilimaetano – menikmati suasana desa tradisional, rumah adat, interaksi dengan warga lokal'],
            ['Hari 1', '14.30 – 15.00', 'Perjalanan menuju Pantai Sorake'],
            ['Hari 1', '15.00 – 18.00', 'Pantai Sorake – menikmati pantai dengan ombak surfing kelas dunia, foto, bersantai, berjalan ke Pantai Lagundri'],
            ['Hari 1', '18.00 – 18.30', 'Perjalanan menuju hotel Sorake / Teluk Dalam'],
            ['Hari 1', '18.30 – Malam', 'Check-in hotel, makan malam, free program'],
            ['Hari 2', '06.00 – 08.00', 'Sarapan dengan pemandangan sunrise di Pantai Sorake'],
            ['Hari 2', '08.00 – 12.00', 'Perjalanan kembali ke Gunungsitoli'],
            ['Hari 2', '12.00 – 13.00', 'Makan siang di restoran lokal'],
            ['Hari 2', '13.00 – 14.00', 'Wisata singkat di Museum Pustaka Nias – storytelling asal-usul suku Nias dan peninggalan pustaka Nias'],
            ['Hari 2', '14.00 – 14.30', 'Pengantaran ke pelabuhan / hotel'],
            ['Hari 2', '14.30', 'Perjalanan selesai'],
        ];

        foreach ($itineraries2d1n as $data) {
            Itinerary::create([
                'paket_wisata2_id' => $paket2d1n->id,
                'hari' => $data[0],
                'waktu' => $data[1],
                'deskripsi' => $data[2],
            ]);
        }

        // ============================
        // PAKET WISATA 1D
        // ============================
        $paket1d = PaketWisata2::create(['label' => '1D']);

        $itineraries1d = [
            ['Hari 1', '06.00 – 07.00', 'Berkumpul di Gunungsitoli, registrasi peserta, briefing singkat perjalanan'],
            ['Hari 1', '07.00 – 10.30', 'Perjalanan dari Gunungsitoli menuju Desa Bawomataluo, berhenti sebentar untuk foto pemandangan tebing dan pantai'],
            ['Hari 1', '10.30 – 12.00', 'Desa Adat Bawomataluo – melihat rumah adat besar khas Nias, menyaksikan atraksi fahombo (lompat batu), interaksi dengan penduduk lokal'],
            ['Hari 1', '12.00 – 13.00', 'Makan siang di restoran lokal'],
            ['Hari 1', '13.00 – 13.30', 'Perjalanan menuju Desa Hilimaetano'],
            ['Hari 1', '13.30 – 14.30', 'Desa Hilimaetano – menjelajahi rumah adat kecil dan otentik, belajar sejarah & budaya dari kepala desa atau pemandu lokal'],
            ['Hari 1', '14.30 – 15.00', 'Perjalanan menuju Pantai Sorake'],
            ['Hari 1', '15.00 – 17.00', 'Pantai Sorake – pantai surfing kelas dunia, menikmati pemandangan laut, berenang santai, atau berjalan kaki ke Pantai Lagundri'],
            ['Hari 1', '17.00 – 20.30', 'Kembali ke hotel Gunungsitoli'],
        ];

        foreach ($itineraries1d as $data) {
            Itinerary::create([
                'paket_wisata2_id' => $paket1d->id,
                'hari' => $data[0],
                'waktu' => $data[1],
                'deskripsi' => $data[2],
            ]);
        }
    }
}

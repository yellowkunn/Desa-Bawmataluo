<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Peta;

class PetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Peta::create([
            'title' => 'Peta',
            'background' => 'images/bg2.jpeg',
            'gambar' => 'images/Peta/Peta.jpg',
        ]);
    }
}

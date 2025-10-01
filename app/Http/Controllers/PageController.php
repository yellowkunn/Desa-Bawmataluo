<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\DestinasiWisata;
use App\Models\ProdukDesa;
use App\Models\PaketWisata;
use App\Models\Peta;
use App\Models\Kontak;
use App\Models\Dashboard;
use App\Models\PaketWisata2;

class PageController extends Controller
{
    public function dashboard()
    {
        $hero = Dashboard::where('section', 'hero')->first();
        $tentang = Dashboard::where('section', 'tentang')->first();
        $destinasi = Dashboard::where('section', 'destinasi')->first();
        $paket = Dashboard::where('section', 'paket')->first();

        $wisataRow1 = DestinasiWisata::latest()->take(3)->get();
        $wisataRow2 = DestinasiWisata::latest()->skip(3)->take(1)->first();
        $paketwisata = PaketWisata::latest()->skip(1)->take(4)->get();

        return view('pages.dashboard', compact(
            'hero',
            'tentang',
            'destinasi',
            'paket',
            'wisataRow1',
            'wisataRow2',
            'paketwisata'
        ));
    }

    public function tentangKami()
    {
        $about = AboutUs::first();
        return view('pages.tentangkami', compact('about'));
    }

    public function destinasiWisata()
    {
        $wisata = DestinasiWisata::latest()->get();
        $title = DestinasiWisata::latest()->value('title');
        $background = DestinasiWisata::latest()->value('background');
        return view('pages.destinasiwisata', compact('wisata', 'title', 'background'));
    }

    public function produkDesa()
    {
        $produkdesa = ProdukDesa::whereNotNull('cardTitle')->latest()->get();
        $title = ProdukDesa::latest()->value('title');
        $background = ProdukDesa::latest()->value('background');
        $deskripsi = ProdukDesa::latest()->value('deskripsi');
        return view('pages.produkdesa', compact('produkdesa', 'title', 'deskripsi', 'background'));
    }

    public function paketWisata()
    {
        $paketwisata = PaketWisata::whereNotNull('cardTitle')->latest()->get();
        $pakets = PaketWisata2::with('itineraries')
            ->get()
            ->unique('label');
        $title = PaketWisata::latest()->value('title');
        $background = PaketWisata::latest()->value('background');
        $deskripsi = PaketWisata::latest()->value('deskripsi');

        return view('pages.paketwisata', compact('paketwisata', 'title', 'deskripsi', 'background', 'pakets'));
    }

    public function peta()
    {
        $peta = Peta::latest()->get();
        $title = Peta::latest()->value('title');
        $background = Peta::latest()->value('background');
        return view('pages.peta', compact('peta', 'title', 'peta', 'background'));
    }

    public function informasiKontak()
    {
        $title = Kontak::latest()->value('title');
        $kontak = Kontak::first();
        return view('pages.informasikontak', compact('title', 'kontak'));
    }

    public function Kontak()
    {
        $kontak = Kontak::latest()->first();
        return view('components.kontak', compact('kontak'));
    }

    public function sbadmin()
    {
        return view('pages.sbadmin');
    }
}

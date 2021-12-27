<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Keliling extends Controller
{
    private $views      = 'keliling';
    private $url        = 'keliling';
    private $title      = '';

    public function __construct()
    {
        
    }

    public function index()
    {
        $data = [
            'title' => 'Keliling Bangun Datar',
            'url' => '',
            'data' => '',
        ];
        return view("$this->views/home", $data);
    }

    public function kelilingPersegi(Request $request)
    {
        if ($request->has('sisi')) {
            $hasil = 4 * $request->get('sisi');
        }

        $rows = [
            'hasil' => $hasil ?? null,
        ];

        $data = [
            'title' => 'Keliling Persegi / Bujur Sangkar',
            'url' => '',
            'rows' => $rows,
        ];
        return view("$this->views/persegi", $data);
    }

    public function kelilingPersegiPanjang(Request $request)
    {
        if ($request->has('panjang') && $request->has('lebar')) {
            $hasil = 2 * ($request->get('panjang') + $request->get('lebar'));
        }

        $rows = [
            'hasil' => $hasil ?? null,
        ];

        $data = [
            'title' => 'Keliling Persegi Panjang',
            'url' => '',
            'rows' => $rows,
        ];
        return view("$this->views/persegi_panjang", $data);
    }

    public function kelilingSegitiga(Request $request)
    {
        if ($request->has('sisi-1') && $request->has('sisi-2') && $request->has('sisi-3')) {
            $hasil = $request->get('sisi-1') + $request->get('sisi-2') + $request->get('sisi-3');
        }

        $rows = [
            'hasil' => $hasil ?? null,
        ];

        $data = [
            'title' => 'Keliling Segitiga',
            'url' => '',
            'rows' => $rows,
        ];
        return view("$this->views/segitiga", $data);
    }

    public function kelilingTrapesium(Request $request)
    {
        if ($request->has('a') && $request->has('b') && $request->has('tinggi')) {
            $hasil = 0.5 * ($request->get('a') + $request->get('b')) * $request->get('tinggi');
        }

        $rows = [
            'hasil' => $hasil ?? null,
        ];

        $data = [
            'title' => 'Keliling Trapesium',
            'url' => '',
            'rows' => $rows,
        ];
        return view("$this->views/trapesium", $data);
    }

    public function kelilingJajarGenjang(Request $request)
    {
        if ($request->has('alas') && $request->has('tinggi')) {
            $hasil = $request->get('alas') * $request->get('tinggi');
        }

        $rows = [
            'hasil' => $hasil ?? null,
        ];

        $data = [
            'title' => 'Keliling Jajar Genjang',
            'url' => '',
            'rows' => $rows,
        ];
        return view("$this->views/jajar_genjang", $data);
    }

    public function kelilingBelahKetupat(Request $request)
    {
        if ($request->has('d1') && $request->has('d2')) {
            $hasil = 0.5 * $request->get('d1') * $request->get('d2');
        }

        $rows = [
            'hasil' => $hasil ?? null,
        ];

        $data = [
            'title' => 'Keliling Belah Ketupat',
            'url' => '',
            'rows' => $rows,
        ];
        return view("$this->views/belah_ketupat", $data);
    }

    public function kelilingLayangan(Request $request)
    {
        if ($request->has('d1') && $request->has('d2')) {
            $hasil = 0.5 * $request->get('d1') * $request->get('d2');
        }

        $rows = [
            'hasil' => $hasil ?? null,
        ];

        $data = [
            'title' => 'Keliling Layang-Layang',
            'url' => '',
            'rows' => $rows,
        ];
        return view("$this->views/layangan", $data);
    }

    public function kelilingLingkaran(Request $request)
    {
        if ($request->has('jari')) {
            $hasil = round(22/7 * (pow($request->get('jari'), 2)), 2);
        }

        $rows = [
            'hasil' => $hasil ?? null,
        ];

        $data = [
            'title' => 'Keliling Lingkaran',
            'url' => '',
            'rows' => $rows,
        ];
        return view("$this->views/lingkaran", $data);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuasController extends Controller
{
    private $views      = 'luas';
    private $url        = 'luas';
    private $title      = '';

    public function __construct()
    {
        
    }

    public function index()
    {
        $data = [
            'title' => 'Luas Bangun Datar',
            'url' => '',
            'data' => '',
        ];
        return view("$this->views/home", $data);
    }

    public function luasPersegi(Request $request)
    {
        if ($request->has('sisi1')) {
            $sisi1 = $request->get('sisi1') * $request->get('sisi1');
        }

        $rows = [
            'sisi1' => $sisi1 ?? null,
        ];

        $data = [
            'title' => 'Luas Persegi / Bujur Sangkar',
            'url' => '',
            'rows' => $rows,
        ];
        return view("$this->views/persegi", $data);
    }

    public function luasPersegiPanjang(Request $request)
    {
        if ($request->has('panjang') && $request->has('lebar')) {
            $hasil = $request->get('panjang') * $request->get('lebar');
        }

        $rows = [
            'hasil' => $hasil ?? null,
        ];

        $data = [
            'title' => 'Luas Persegi Panjang',
            'url' => '',
            'rows' => $rows,
        ];
        return view("$this->views/persegi_panjang", $data);
    }

    public function luasSegitiga(Request $request)
    {
        if ($request->has('alas') && $request->has('tinggi')) {
            $hasil = 0.5 * $request->get('alas') * $request->get('tinggi');
        }

        $rows = [
            'hasil' => $hasil ?? null,
        ];

        $data = [
            'title' => 'Luas Segitiga',
            'url' => '',
            'rows' => $rows,
        ];
        return view("$this->views/segitiga", $data);
    }

    public function luasTrapesium(Request $request)
    {
        if ($request->has('a') && $request->has('b') && $request->has('tinggi')) {
            $hasil = 0.5 * ($request->get('a') + $request->get('b')) * $request->get('tinggi');
        }

        $rows = [
            'hasil' => $hasil ?? null,
        ];

        $data = [
            'title' => 'Luas Trapesium',
            'url' => '',
            'rows' => $rows,
        ];
        return view("$this->views/trapesium", $data);
    }

    public function luasJajarGenjang(Request $request)
    {
        if ($request->has('alas') && $request->has('tinggi')) {
            $hasil = $request->get('alas') * $request->get('tinggi');
        }

        $rows = [
            'hasil' => $hasil ?? null,
        ];

        $data = [
            'title' => 'Luas Jajar Genjang',
            'url' => '',
            'rows' => $rows,
        ];
        return view("$this->views/jajar_genjang", $data);
    }

    public function luasBelahKetupat(Request $request)
    {
        if ($request->has('d1') && $request->has('d2')) {
            $hasil = 0.5 * $request->get('d1') * $request->get('d2');
        }

        $rows = [
            'hasil' => $hasil ?? null,
        ];

        $data = [
            'title' => 'Luas Belah Ketupat',
            'url' => '',
            'rows' => $rows,
        ];
        return view("$this->views/belah_ketupat", $data);
    }

    public function luasLayangan(Request $request)
    {
        if ($request->has('d1') && $request->has('d2')) {
            $hasil = 0.5 * $request->get('d1') * $request->get('d2');
        }

        $rows = [
            'hasil' => $hasil ?? null,
        ];

        $data = [
            'title' => 'Luas Layang-Layang',
            'url' => '',
            'rows' => $rows,
        ];
        return view("$this->views/layangan", $data);
    }

    public function luasLingkaran(Request $request)
    {
        if ($request->has('jari')) {
            $hasil = round(22/7 * (pow($request->get('jari'), 2)), 2);
        }

        $rows = [
            'hasil' => $hasil ?? null,
        ];

        $data = [
            'title' => 'Luas Lingkaran',
            'url' => '',
            'rows' => $rows,
        ];
        return view("$this->views/lingkaran", $data);
    }
}
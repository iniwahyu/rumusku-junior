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
        // $sisi1 = 0;
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
        return view("$this->views/luas-persegi", $data);
    }

    public function luasPersegiPanjang(Request $request)
    {
        // $sisi1 = 0;
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
}
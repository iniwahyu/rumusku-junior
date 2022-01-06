<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Presentase extends Controller
{
    private $views      = 'presentase';
    private $url        = 'presentase';
    private $title      = '';

    public function __construct()
    {
        
    }

    public function index(Request $request)
    {
        if ($request->has('jumlahx') && $request->has('jumlahy')) {
            $hasil = $request->get('jumlahx') / $request->get('jumlahy') * 100;
        }
        if ($request->has('jumlaha') && $request->has('jumlahb')) {
            $hasil2 = $request->get('jumlaha') * $request->get('jumlahb') / 100;
        }

        $rows = [
            'hasil' => $hasil ?? null,
            'hasil2' => $hasil2 ?? null,
        ];

        $data = [
            'title' => 'Presentase',
            'url' => '',
            'rows' => $rows,
        ];
        return view("$this->views/home", $data);
    }
}
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

        $rows = [
            'hasil' => $hasil ?? null,
        ];

        $data = [
            'title' => 'Presentase',
            'url' => '',
            'rows' => $rows,
        ];
        return view("$this->views/home", $data);
    }
}
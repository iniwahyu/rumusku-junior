<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Load Library

// Load Model

class Homepage extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $data = [
            'title' => 'Belajar Rumus',
            'url' => '',
        ];
        return view("homepage", $data);
    }
}
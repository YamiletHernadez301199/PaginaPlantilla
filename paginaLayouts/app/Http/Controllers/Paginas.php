<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Paginas extends Controller
{
    public function index()
    {
        $titulo = 'Inicio';
        return view('inicio', compact('titulo'));
    }
}

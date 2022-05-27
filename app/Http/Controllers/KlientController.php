<?php

namespace App\Http\Controllers;

use App\Models\Przesylka;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Klient;

class KlientController extends Controller
{
    //
    public function index(): View
    {
        return view("klient.hello",);
    }

    public function mapa1(): View
    {
        return view("klient.mapa1",);
    }

}


<?php

namespace App\Http\Controllers;

use App\Models\Przesylka;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Kurier;

class KurierController extends Controller
{
    //
    public function index(): View
    {
        return view("deliveryman.hello",);
    }

    public function przesylka(): View
    {
        return view("deliveryman.przesylka",);
    }

    public function mapa(): View
    {
        return view("deliveryman.mapa",);
    }

    public function powiadomienie(): View
    {
        return view("deliveryman.powiadomienie",);
    }
}

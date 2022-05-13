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
}

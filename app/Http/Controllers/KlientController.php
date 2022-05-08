<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klient;

class KlientController extends Controller
{
    //
    function getData()
    {
        return Klient::all();
    }
}

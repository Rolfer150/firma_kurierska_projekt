<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurier;

class KurierController extends Controller
{
    //
    function getData()
    {
        return Kurier::all();
    }
}

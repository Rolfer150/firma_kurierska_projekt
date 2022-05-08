<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Magazynier;

class MagazynierController extends Controller
{
    //
    function getData()
    {
        return Magazynier::all();
    }
}

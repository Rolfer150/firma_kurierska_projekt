<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Magazynier;
use Illuminate\Contracts\View\View;

class MagazynierController extends Controller
{
    //
    function getData()
    {
        return Magazynier::all();
    }

    public function index(): View
    {
        return view("adminmain",);
    }
}

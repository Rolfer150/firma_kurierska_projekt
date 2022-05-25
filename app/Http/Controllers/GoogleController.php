<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoogleController extends Controller
{
    /**
     * Write code on Method
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View()
     */
    public function mapa()
    {
        return view('kuriers/mapa');
    }
}

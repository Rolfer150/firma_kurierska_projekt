<?php

namespace App\Http\Controllers;

use App\Models\Adres;
use App\Models\Przesylka;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class AdresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view("Adres.create", [

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $adres = new Adres($request->all());
        $adres->save();
        return redirect(route('Przesylkas.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adres  $adres
     * @return \Illuminate\Http\Response
     */
    public function show(Adres $adres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adres  $adres
     * @return \Illuminate\Http\Response
     */
    public function edit(Adres $adres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adres  $adres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adres $adres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adres  $adres
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adres $adres)
    {
        //
    }
}

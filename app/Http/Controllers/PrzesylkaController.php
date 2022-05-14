<?php

namespace App\Http\Controllers;

use App\Models\Przesylka;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PrzesylkaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view("Przesylkas.index",[
            'przesylkas' => Przesylka::paginate(10)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view("Przesylkas.create", [

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
        $przesylka = new Przesylka($request->all());
        $przesylka->save();
        return redirect(route('Przesylkas.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Przesylka  $przesylka
     * @return \Illuminate\Http\Response
     */
    public function show(Przesylka $przesylka)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Przesylka  $przesylka
     * @return View
     */
    public function edit(Przesylka $przesylka): View
    {
        return view("Przesylkas.edit", [
            'przesylkas' => $przesylka

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Przesylka  $przesylka
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Przesylka $przesylka)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Przesylka  $przesylka
     * @return \Illuminate\Http\Response
     */
    public function destroy(Przesylka $przesylka)
    {
        //
    }
}

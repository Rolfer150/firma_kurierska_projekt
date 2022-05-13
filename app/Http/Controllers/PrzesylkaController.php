<?php

namespace App\Http\Controllers;

use App\Models\Przesylka;
use Illuminate\Contracts\View\View;
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
        return view("przesylkas.index",[
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
        return view("przesylkas.create", [

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @param  \App\Models\Przesylka  $przesylka
     * @return \Illuminate\Http\Response
     */
    public function edit(Przesylka $przesylka)
    {
        //
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

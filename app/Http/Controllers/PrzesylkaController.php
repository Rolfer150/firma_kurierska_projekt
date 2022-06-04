<?php

namespace App\Http\Controllers;

use App\Models\Paczkomat;
use App\Models\Przesylka;
use App\Models\Rodzaj_dostawy;
use App\Models\Wielkosc_paczki;
use Exception;
use App\Models\Rodzaj_platnosci;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
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
            'przesylkas' => Przesylka::paginate(10),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view("Przesylkas.create", [
            'platnosci' => Rodzaj_platnosci::all(),
            'dostawy' => Rodzaj_dostawy::all(),
            'wielkosci' => Wielkosc_paczki::all(),
            'paczkomaty' => Paczkomat::all(),
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
        $request->user()->przesylkas()->save($przesylka);
        return redirect(route('Przesylkas.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Przesylka  $przesylka
     * @return View
     */
    public function show(Przesylka $przesylka): View
    {
        return view("Przesylkas.show", [
        'przesylka' => $przesylka
    ]);
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
            'przesylka' => $przesylka
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Przesylka  $przesylka
     * @return RedirectResponse
     */
    public function update(Request $request, Przesylka $przesylka): RedirectResponse
    {
        $przesylka->fill($request->all());
        $przesylka->save();
        return redirect(route('Przesylkas.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Przesylka  $przesylka
     * @return JsonResponse
     */
    public function destroy(Przesylka $przesylka): JsonResponse
    {
            try {
                $przesylka->delete();
                return response()->json([
                    'status' => 'success'
                ]);
            } catch (Exception $e) {
                return Response()->json([
                    'status' => 'error',
                    'message' => 'Wystąpił błąd!'
                ])->setStatusCode(500);
            }
    }
}

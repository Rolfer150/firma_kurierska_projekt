<?php

namespace App\Http\Controllers;

use App\Models\Paczkomat;
use App\Models\Powiat;
use App\Models\Przesylka;
use App\Models\Rodzaj_dostawy;
use App\Models\Status_przesylki;
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

    public function indexklient(): View
    {
        return view("Przesylkas.indexklient",[
            'przesylkas' => Przesylka::paginate(10),

        ]);
    }

    public function indexkurier(): View
    {
        return view("Przesylkas.indexkurier",[
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
            'powiaty' => Powiat::all(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */

    public function createklient(): View
    {
        return view("Przesylkas.createklient", [
            'platnosci' => Rodzaj_platnosci::all(),
            'dostawy' => Rodzaj_dostawy::all(),
            'wielkosci' => Wielkosc_paczki::all(),
            'paczkomaty' => Paczkomat::all(),
            'powiaty' => Powiat::all(),
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Przesylka  $przesylka
     * @return View
     */
    public function editkurier(Przesylka $przesylka): View
    {
        return view("Przesylkas.editkurier", [
            'przesylka' => $przesylka,

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
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */

    public function storeklient(Request $request): RedirectResponse
    {
        $przesylka = new Przesylka($request->all());
        $request->user()->przesylkas()->save($przesylka);
        return redirect(route('Przesylkas.indexklient'));
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
     * Display the specified resource.
     *
     * @param  Przesylka  $przesylka
     * @return View
     */
    public function showklient(Przesylka $przesylka): View
    {
        return view("Przesylkas.showklient", [
            'przesylka' => $przesylka
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Przesylka  $przesylka
     * @return View
     */
    public function showkurier(Przesylka $przesylka): View
    {
        return view("Przesylkas.showkurier", [
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
            'przesylka' => $przesylka,
            'platnosci' => Rodzaj_platnosci::all(),
            'dostawy' => Rodzaj_dostawy::all(),
            'wielkosci' => Wielkosc_paczki::all(),
            'paczkomaty' => Paczkomat::all(),
            'powiaty' => Powiat::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Przesylka  $przesylka
     * @return View
     */
    public function editdata(Przesylka $przesylka): View
    {
        return view("Przesylkas.editdata", [
            'przesylka' => $przesylka,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Przesylka  $przesylka
     * @return View
     */
    public function editklient(Przesylka $przesylka): View
    {
        return view("Przesylkas.editklient", [
            'przesylka' => $przesylka,
            'platnosci' => Rodzaj_platnosci::all(),
            'dostawy' => Rodzaj_dostawy::all(),
            'wielkosci' => Wielkosc_paczki::all(),
            'paczkomaty' => Paczkomat::all(),
            'powiaty' => Powiat::all(),
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
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Przesylka  $przesylka
     * @return RedirectResponse
     */
    public function updateklient(Request $request, Przesylka $przesylka): RedirectResponse
    {
        $przesylka->fill($request->all());
        $przesylka->save();
        return redirect(route('Przesylkas.indexklient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Przesylka  $przesylka
     * @return RedirectResponse
     */
    public function updatekurier(Request $request, Przesylka $przesylka): RedirectResponse
    {
        $przesylka->fill($request->all());
        $przesylka->save();
        return redirect(route('Przesylkas.indexkurier'));
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

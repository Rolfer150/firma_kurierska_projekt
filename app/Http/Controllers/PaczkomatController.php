<?php

namespace App\Http\Controllers;

use App\Models\Paczkomat;
use App\Models\Powiat;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class PaczkomatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('paczkomat.index', [
            'paczkomaty' => Paczkomat::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view("paczkomat.create", [
            'powiaty' => Powiat::all(),

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
        $paczkomat = new Paczkomat($request->all());
        $paczkomat->save();
        return redirect(route('paczkomat.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Paczkomat  $paczkomat
     * @return View
     */
    public function show(Paczkomat $paczkomat): View
    {
        return view("paczkomat.show", [
            'paczkomat' => $paczkomat
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Paczkomat  $paczkomat
     * @return View
     */
    public function edit(Paczkomat $paczkomat): View
    {
        return view("paczkomat.edit", [
            'paczkomat' => $paczkomat,
            'powiaty' => Powiat::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Paczkomat  $paczkomat
     * @return RedirectResponse
     */
    public function update(Request $request, Paczkomat $paczkomat): RedirectResponse
    {
        $paczkomat->fill($request->all());
        $paczkomat->save();
        return redirect(route('paczkomat.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Paczkomat  $paczkomat
     * @return JsonResponse
     */
    public function destroy(Paczkomat $paczkomat): JsonResponse
    {
        try {
            $paczkomat->delete();
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

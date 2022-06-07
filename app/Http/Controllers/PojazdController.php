<?php

namespace App\Http\Controllers;

use App\Models\Pojazd;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Exception;

class PojazdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        return view('pojazd.index', [
            'pojazdy' => Pojazd::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Pojazd  $pojazd
     * @return \Illuminate\Http\Response
     */
    public function show(Pojazd $pojazd): View
    {
        return view("pojazd.show", [
            'pojazd' => $pojazd
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pojazd  $pojazd
     * @return \Illuminate\Http\Response
     */
    public function edit(Pojazd $pojazd): View
    {
        return view("pojazd.edit", [
            'pojazd' => $pojazd
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Pojazd  $pojazd
     * @return RedirectResponse
     */
    public function update(Request $request, Pojazd $pojazd): RedirectResponse
    {
        $pojazd->fill($request->all());
        $pojazd->save();
        return redirect(route('pojazd.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Pojazd  $pojazd
     * @return JsonResponse
     */
    public function destroy(Pojazd $pojazd): JsonResponse
    {
        try {
            $pojazd->delete();
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

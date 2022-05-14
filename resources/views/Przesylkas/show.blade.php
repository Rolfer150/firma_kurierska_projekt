@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Podgląd przesyłki</div>

                    <div class="card-body">
                            <div class="row mb-3">
                                <label for="id_przesylki" class="col-md-4 col-form-label text-md-end">Id przesyłki</label>

                                <div class="col-md-6">
                                    <input id="id_przesylki" type="text" class="form-control" name="name" value="{{ $przesylka->name }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Rodzaj płatności</label>

                                <div class="col-md-6">
                                    <input id="rodzaj_platnosci" type="text" class="form-control" name="rodzaj_platnosci" value="{{ $przesylka->rodzaj_platnosci }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Data dostarczenia</label>

                                <div class="col-md-6">
                                    <textarea id="data_dostarczenia" type="date" class="form-control" name="data_dostarczenia" disabled>{{ $przesylka->data_dostarczenia }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Rodzaj przesyłki</label>

                                <div class="col-md-6">
                                    <input id="rodzaj_przesylki" type="text" class="form-control" name="rodzaj_przesylki" value="{{ $przesylka->rodzaj_przesylki }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="cena" class="col-md-4 col-form-label text-md-end">Cena (w złotówkach)</label>

                                <div class="col-md-6">
                                    <input id="cena" type="number" step="0.01" min="0" class="form-control" name="cena" value="{{ $przesylka->cena }}" disabled>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

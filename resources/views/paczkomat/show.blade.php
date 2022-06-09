@extends('layouts.navbar')

@section('zawartosc')
    <link rel="stylesheet" type="text/css" href="{{asset('css/mapa.css')}}" />
    <script type="module" src="{{asset('js/paczkomatpkt.js')}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><strong>Podgląd paczkomatów</strong></div>

                    <div class="card-body">
                            <div class="row mb-3">
                                <label for="id_paczkomatu" class="col-md-4 col-form-label text-md-end">Id paczkomatów</label>

                                <div class="col-md-6">
                                    <input id="id_paczkomatu" type="text" class="form-control" name="id_paczkomatu" value="{{ $paczkomat->id }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="lat" class="col-md-4 col-form-label text-md-end">Szerokość geograficzna</label>

                                <div class="col-md-6">
                                    <input id="lat" type="text" class="form-control" name="lat" value="{{ $paczkomat->lat }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="lng" class="col-md-4 col-form-label text-md-end">Długość geograficzna</label>

                                <div class="col-md-6">
                                    <input id="lng" type="text" class="form-control" name="lng" value="{{ $paczkomat->lng }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="opis_paczkomat" class="col-md-4 col-form-label text-md-end">Opis</label>

                                <div class="col-md-6">
                                    <input id="opis_paczkomat" type="text" class="form-control" name="opis_paczkomat" value="{{ $paczkomat->opis_paczkomat }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="miasto_paczkomat" class="col-md-4 col-form-label text-md-end">Miasto</label>

                                <div class="col-md-6">
                                    <input id="miasto_paczkomat" type="text" class="form-control" name="miasto_paczkomat" value="{{ $paczkomat->miasto_paczkomat }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="ulica_paczkomat" class="col-md-4 col-form-label text-md-end">Ulicy</label>

                                <div class="col-md-6">
                                    <input id="ulica_paczkomat" type="text" class="form-control" name="ulica_paczkomat" value="{{ $paczkomat->ulica_paczkomat }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="numer_ulicy_paczkomat" class="col-md-4 col-form-label text-md-end">Numer ulicy</label>

                                <div class="col-md-6">
                                    <input id="numer_ulicy_paczkomat" type="number" min="0" class="form-control" name="numer_ulicy_paczkomat" value="{{ $paczkomat->numer_ulicy_paczkomat }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="kod_pocztowy_paczkomat" class="col-md-4 col-form-label text-md-end">Kod pocztowy</label>

                                <div class="col-md-6">
                                    <input id="kod_pocztowy_paczkomat" type="text" class="form-control" name="kod_pocztowy_paczkomat" value="{{ $paczkomat->kod_pocztowy_paczkomat }}" disabled>
                                </div>
                            </div>

                    </div>
                </div>




                <div class="card">
                    <div class="card-header"><strong>Mapa</strong></div>
                    <div id="map" style="width: auto; height: 500px;">
                </div>



                    <script
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChoSm7vMADJiut434Gld8tRP4TjD8Al9U&callback=initMap&v=weekly"
                        defer
                    ></script>
            </div>
        </div>
    </div>
@endsection
@section('js-files')
    <script src="{{ asset('js/paczkomatpkt.js') }}"></script>
@endsection

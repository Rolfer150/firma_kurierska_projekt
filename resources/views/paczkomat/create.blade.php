@extends('layouts.navbar')

@section('zawartosc')
    <link rel="stylesheet" type="text/css" href="{{asset('css/mapa.css')}}" />
    <script type="module" src="{{asset('js/mapa2.js')}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dodawanie paczkomatu</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('paczkomat.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="powiat" class="col-md-4 col-form-label text-md-end">Powiat</label>

                                <div class="col-md-6">
                                    <select id="powiat_id" class="form-control @error('powiat_id') is-invalid @enderror" name="powiat_id" required>
                                        <option>Brak</option>
                                        @foreach($powiaty as $powiat)
                                            <option value="{{$powiat->id}}">{{$powiat->powiat}}</option>
                                        @endforeach
                                    </select>

                                    @error('powiat_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="lat" class="col-md-4 col-form-label text-md-end">Szerokość geograficzna</label>

                                <div class="col-md-6">
                                    <input id="lat" type="text" class="form-control @error('lat') is-invalid @enderror" name="lat" value="{{ old('lat') }}" required autocomplete="lat" autofocus>

                                    @error('lat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="lng" class="col-md-4 col-form-label text-md-end">Długość geograficzna</label>

                                <div class="col-md-6">
                                    <input id="lng" type="text" class="form-control @error('lng') is-invalid @enderror" name="lng" value="{{ old('lng') }}" required autocomplete="lng" autofocus>

                                    @error('lng')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="opis_paczkomat" class="col-md-4 col-form-label text-md-end">Opis</label>

                                <div class="col-md-6">
                                    <input id="opis_paczkomat" type="text" class="form-control @error('opis_paczkomat') is-invalid @enderror" name="opis_paczkomat" autofocus>

                                    @error('opis_paczkomat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="miasto_paczkomat" class="col-md-4 col-form-label text-md-end">Miasto</label>

                                <div class="col-md-6">
                                    <input id="miasto_paczkomat" type="text" class="form-control @error('miasto_paczkomat') is-invalid @enderror" name="miasto_paczkomat" required>

                                    @error('miasto_paczkomat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="ulica_paczkomat" class="col-md-4 col-form-label text-md-end">Ulica</label>

                                <div class="col-md-6">
                                    <input id="ulica_paczkomat" type="text" class="form-control @error('ulica_paczkomat') is-invalid @enderror" name="ulica_paczkomat" required>

                                    @error('ulica_paczkomat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="numer_ulicy_paczkomat" class="col-md-4 col-form-label text-md-end">Numer ulicy</label>

                                <div class="col-md-6">
                                    <input id="numer_ulicy_paczkomat" type="number" class="form-control @error('numer_ulicy_paczkomat') is-invalid @enderror" name="numer_ulicy_paczkomat" required>

                                    @error('numer_ulicy_paczkomat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="kod_pocztowy_paczkomat" class="col-md-4 col-form-label text-md-end">Kod pocztowy</label>

                                <div class="col-md-6">
                                    <input id="kod_pocztowy_paczkomat" type="text" class="form-control @error('kod_pocztowy_paczkomat') is-invalid @enderror" name="kod_pocztowy_paczkomat" required>

                                    @error('kod_pocztowy_paczkomat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Zapisz wszystko
                                    </button>
                                </div>
                            </div>
                        </form>
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
    </div>

@endsection
@section('js-files')
    <script src="{{ asset('js/mapa2.js') }}"></script>
@endsection

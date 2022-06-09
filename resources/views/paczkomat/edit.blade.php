@extends('layouts.navbar')

@section('zawartosc')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><strong>Edycja paczkomatów</strong></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('paczkomat.update', $paczkomat->id) }}">
                            @csrf


                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">Powiat</label>

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
                                    <label for="name" class="col-md-4 col-form-label text-md-end">Szerokość geograficzna</label>

                                    <div class="col-md-6">
                                        <input id="lat" type="text" class="form-control @error('lat') is-invalid @enderror" name="lat" value="{{ $paczkomat->lat }}" required autocomplete="lat" autofocus>

                                        @error('lat')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">Długość geograficzna</label>

                                    <div class="col-md-6">
                                        <input id="lng" type="text" class="form-control @error('lng') is-invalid @enderror" name="lng" value="{{ $paczkomat->lng }}" required autocomplete="lng" autofocus>
                                        @error('lng')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">Opis</label>

                                    <div class="col-md-6">
                                        <input id="opis_paczkomat" type="text" class="form-control @error('opis_paczkomat') is-invalid @enderror" name="opis_paczkomat" value="{{ $paczkomat->opis_paczkomat }}" required autocomplete="opis_paczkomat" autofocus>
                                        @error('opis_paczkomat')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">Miasto</label>

                                    <div class="col-md-6">
                                        <input id="miasto_paczkomat" type="text" class="form-control @error('miasto_paczkomat') is-invalid @enderror" name="miasto_paczkomat" value="{{ $paczkomat->miasto_paczkomat }}" required autocomplete="miasto_paczkomat" autofocus>
                                        @error('miasto_paczkomat')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">Ulica</label>

                                    <div class="col-md-6">
                                        <input id="ulica_paczkomat" type="text" class="form-control @error('ulica_paczkomat') is-invalid @enderror" name="ulica_paczkomat" value="{{ old('ulica_paczkomat') }}" required autocomplete="ulica_paczkomat" autofocus>
                                        @error('imie_odbiorca')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">Numer ulicy</label>

                                    <div class="col-md-6">
                                        <input id="numer_ulicy_paczkomat" type="text" class="form-control @error('numer_ulicy_paczkomat') is-invalid @enderror" name="numer_ulicy_paczkomat" value="{{ old('numer_ulicy_paczkomat') }}" required autocomplete="numer_ulicy_paczkomat" autofocus>
                                        @error('numer_ulicy_paczkomat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">Kod pocztowy</label>

                                    <div class="col-md-6">
                                        <input id="kod_pocztowy_paczkomat" type="text" class="form-control @error('kod_pocztowy_paczkomat') is-invalid @enderror" name="kod_pocztowy_paczkomat" value="{{ old('kod_pocztowy_paczkomat') }}" required autocomplete="kod_pocztowy_paczkomat" autofocus>
                                        @error('kod_pocztowy_paczkomat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-secondary">
                                            Zapisz wszystko
                                        </button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

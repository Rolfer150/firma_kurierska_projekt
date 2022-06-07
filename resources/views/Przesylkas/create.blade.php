@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{ route('Przesylkas.store') }}">
                <div class="card">
                    <div class="card-header">Dodawanie przesyłek</div>
                        <div class="card-body">
                            @csrf

                            <div class="banner-text">
                                <label class="col-md-3">Właściwości przesyłki</label>

                                <div class="row mb-3">
                                    <label for="platnosc" class="col-md-4 col-form-label text-md-end">Rodzaj płatności</label>
                                    <div class="col-md-6">
                                        <select id="platnosc_id" class="form-control @error('platnosc_id') is-invalid @enderror" name="platnosc_id" required>
                                            <option>Brak</option>
                                            @foreach($platnosci as $platnosc)
                                                <option value="{{$platnosc->id}}">{{$platnosc->platnosc}}</option>
                                            @endforeach
                                        </select>

                                        @error('platnosc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="dostawa" class="col-md-4 col-form-label text-md-end">Rodzaj dostawy</label>

                                    <div class="col-md-6">
                                        <select id="dostawa_id" class="form-control @error('dostawa_id') is-invalid @enderror" name="dostawa_id" required>
                                            <option>Brak</option>
                                            @foreach($dostawy as $dostawa)
                                                <option value="{{$dostawa->id}}">{{$dostawa->dostawa}}</option>
                                            @endforeach
                                        </select>
                                        @error('rodzaj_platnosci')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="wielkosc" class="col-md-4 col-form-label text-md-end">Wielkosc paczki</label>

                                    <div class="col-md-6">
                                        <select id="wielkosc_id" class="form-control @error('wielkosc_id') is-invalid @enderror" name="wielkosc_id" required>
                                            <option>Brak</option>
                                            @foreach($wielkosci as $wielkosc)
                                                <option value="{{$wielkosc->id}}">{{$wielkosc->wielkosc}}, {{$wielkosc->cena}} zł</option>
                                            @endforeach
                                        </select>
                                        @error('wielkosc_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="paczkomat" class="col-md-4 col-form-label text-md-end">Paczkomat</label>

                                <div class="col-md-6">
                                    <select id="paczkomat_id" class="form-control @error('paczkomat_id') is-invalid @enderror" name="paczkomat_id">
                                        <option>Brak</option>
                                        @foreach($paczkomaty as $paczkomat)
                                            <option value="{{$paczkomat->id}}">{{$paczkomat->opis_paczkomat}}, {{$paczkomat->miasto_paczkomat}}, {{$paczkomat->ulica_paczkomat}}, {{$paczkomat->numer_ulicy_paczkomat}}</option>
                                        @endforeach
                                    </select>
                                    @error('paczkomat')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="banner-text">
                                <label class="col-md-3">Dane odbiorcy</label>

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">Imię</label>

                                    <div class="col-md-6">
                                        <input id="imie_odbiorca" type="text" class="form-control @error('imie_odbiorca') is-invalid @enderror" name="imie_odbiorca" value="{{ old('imie_odbiorca') }}" required autocomplete="imie_odbiorca" autofocus>
                                        @error('imie_odbiorca')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="surname" class="col-md-4 col-form-label text-md-end">Nazwisko</label>

                                    <div class="col-md-6">
                                        <input id="nazwisko_odbiorca" type="text" class="form-control @error('nazwisko_odbiorca') is-invalid @enderror" name="nazwisko_odbiorca" value="{{ old('nazwisko_odbiorca') }}" required autocomplete="nazwisko_odbiorca" autofocus>
                                        @error('nazwisko_odbiorca')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-end">Numer telefonu</label>

                                    <div class="col-md-6">
                                        <input id="telefon_odbiorca" type="text" class="form-control @error('telefon_odbiorca') is-invalid @enderror" name="telefon_odbiorca" value="{{ old('telefon_odbiorca') }}" required autocomplete="telefon_odbiorca" autofocus>
                                        @error('telefon_odbiorca')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">E-mail</label>

                                    <div class="col-md-6">
                                        <input id="email_odbiorca" type="text" class="form-control @error('email_odbiorca') is-invalid @enderror" name="email_odbiorca" value="{{ old('email_odbiorca') }}" required autocomplete="email_odbiorca" autofocus>
                                        @error('email_odbiorca')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="powiat" class="col-md-4 col-form-label text-md-end">Powiat</label>

                                    <div class="col-md-6">
                                        <select id="powiat_id" class="form-control @error('powiat_id') is-invalid @enderror" name="powiat_id" required autocomplete="powiat_id">
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
                                    <label for="miasto" class="col-md-4 col-form-label text-md-end">Miasto</label>

                                    <div class="col-md-6">
                                        <input id="miasto_odbiorca" type="text" class="form-control @error('miasto_odbiorca') is-invalid @enderror" name="miasto_odbiorca" value="{{ old('miasto_odbiorca') }}" required>
                                        @error('miasto_odbiorca')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="ulica" class="col-md-4 col-form-label text-md-end">Ulica</label>

                                    <div class="col-md-6">
                                        <input id="ulica_odbiorca" type="text" class="form-control @error('ulica_odbiorca') is-invalid @enderror" name="ulica_odbiorca" value="{{ old('ulica_odbiorca') }}" required>
                                        @error('ulica_odbiorca')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="numer_domu" class="col-md-4 col-form-label text-md-end">Numer domu</label>

                                    <div class="col-md-6">
                                        <input id="numer_domu_odbiorca" type="text" class="form-control @error('numer_domu_odbiorca') is-invalid @enderror" name="numer_domu_odbiorca" value="{{ old('numer_domu_odbiorca') }}" required>
                                        @error('numer_domu_odbiorca')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="numer_mieszkania" class="col-md-4 col-form-label text-md-end">Numer mieszkania</label>

                                    <div class="col-md-6">
                                        <input id="numer_mieszkania_odbiorca" type="text" class="form-control @error('numer_mieszkania_odbiorca') is-invalid @enderror" name="numer_mieszkania_odbiorca" value="{{ old('numer_mieszkania_odbiorca') }}" required>
                                        @error('numer_mieszkania_odbiorca')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="kod_pocztowy" class="col-md-4 col-form-label text-md-end">Kod pocztowy</label>

                                    <div class="col-md-6">
                                        <input id="kod_pocztowy_odbiorca" type="text" class="form-control @error('kod_pocztowy_odbiorca') is-invalid @enderror" name="kod_pocztowy_odbiorca" value="{{ old('kod_pocztowy_odbiorca') }}" required>
                                        @error('kod_pocztowy_odbiorca')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Zapisz wszystko
                                        </button>
                                    </div>
                                </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js-files')
    <script src="{{ asset('js/nrprzesylki.js') }}"></script>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Podgląd przesyłki</div>

                    <div class="card-body">
                        <div class="banner-text">
                            <label class="col-md-3">Dane nadawcy</label>
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Imię i nazwisko nadawcy</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $przesylka->user->name }} {{ $przesylka->user->surname }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nr_tel_nadawca" class="col-md-4 col-form-label text-md-end">Numer telefonu nadawcy</label>

                                <div class="col-md-6">
                                    <input id="nr_tel_nadawca" type="text" class="form-control" name="name" value="{{ $przesylka->user->phone_number }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email_nadawca" class="col-md-4 col-form-label text-md-end">E-mail nadawcy</label>

                                <div class="col-md-6">
                                    <input id="email_nadawca" type="text" class="form-control" name="name" value="{{ $przesylka->user->email }}" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="banner-text">
                            <label class="col-md-3">Dane przesyłki</label>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Rodzaj płatności </label>

                                <div class="col-md-6">
                                    <input id="rodzaj_platnosci" type="text" class="form-control" name="rodzaj_platnosci" value="{{ $przesylka->platnosc->platnosc }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Data dostarczenia</label>

                                <div class="col-md-6">
                                    <input id="data_dostarczenia" type="date" class="form-control" name="data_dostarczenia" value="{{ $przesylka->data_dostarczenia }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Rodzaj dostawy</label>

                                <div class="col-md-6">
                                    <input id="rodzaj_przesylki" type="text" class="form-control" name="rodzaj_dostawy" value="{{ $przesylka->dostawa->dostawa }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="cena" class="col-md-4 col-form-label text-md-end">Cena (w złotówkach)</label>

                                <div class="col-md-6">
                                    <input id="cena" type="number" step="0.01" min="0" class="form-control" name="cena" value="{{ $przesylka->wielkosc->cena }}" disabled>
                                </div>
                            </div>
                    </div>

                        <div class="banner-text">
                            <label class="col-md-3">Dane odbiorcy</label>

                            <div class="row mb-3">
                                <label for="imie_odbiorca" class="col-md-4 col-form-label text-md-end">Imię i nazwisko odbiorcy</label>

                                <div class="col-md-6">
                                    <input id="imie_odbiorca" type="text" class="form-control" name="name" value="{{ $przesylka->imie_odbiorca }} {{ $przesylka->nazwisko_odbiorca }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="telefon_odbiorca" class="col-md-4 col-form-label text-md-end">Numer telefonu odbiorcy</label>

                                <div class="col-md-6">
                                    <input id="telefon_odbiorca" type="text" class="form-control" name="name" value="{{ $przesylka->telefon_odbiorca }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email_odbiorca" class="col-md-4 col-form-label text-md-end">E-mail odbiorcy</label>

                                <div class="col-md-6">
                                    <input id="email_odbiorca" type="text" class="form-control" name="name" value="{{ $przesylka->email_odbiorca }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="powiat_id" class="col-md-4 col-form-label text-md-end">Powiat</label>

                                <div class="col-md-6">
                                    <input id="powiat_id" type="text" class="form-control" name="name" value="{{ $przesylka->powiat->powiat }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="miasto_odbiorca" class="col-md-4 col-form-label text-md-end">Miasto</label>

                                <div class="col-md-6">
                                    <input id="miasto_odbiorca" type="text" class="form-control" name="name" value="{{ $przesylka->miasto_odbiorca }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="ulica_odbiorca" class="col-md-4 col-form-label text-md-end">Ulica</label>

                                <div class="col-md-6">
                                    <input id="ulica_odbiorca" type="text" class="form-control" name="name" value="{{ $przesylka->ulica_odbiorca }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="numer_domu_odbiorca" class="col-md-4 col-form-label text-md-end">Numer domu</label>

                                <div class="col-md-6">
                                    <input id="numer_domu_odbiorca" type="text" class="form-control" name="name" value="{{ $przesylka->numer_domu_odbiorca }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="numer_mieszkania_odbiorca" class="col-md-4 col-form-label text-md-end">Numer mieszkania</label>

                                <div class="col-md-6">
                                    <input id="numer_mieszkania_odbiorca" type="text" class="form-control" name="name" value="{{ $przesylka->numer_mieszkania_odbiorca }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="kod_pocztowy_odbiorca" class="col-md-4 col-form-label text-md-end">Kod pocztowy</label>

                                <div class="col-md-6">
                                    <input id="kod_pocztowy_odbiorca" type="text" class="form-control" name="name" value="{{ $przesylka->kod_pocztowy_odbiorca }}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

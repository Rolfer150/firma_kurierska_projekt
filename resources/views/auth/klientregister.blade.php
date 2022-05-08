@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('KlientRegister') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('klientregister') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="imie_klienta" class="col-md-4 col-form-label text-md-end">{{ __('Imię') }}</label>

                            <div class="col-md-6">
                                <input id="imie_klienta" type="text" class="form-control @error('imie_klienta') is-invalid @enderror" name="imie_klienta" value="{{ old('imie_klienta') }}" required autocomplete="imie_klienta" autofocus>

                                @error('imie_klienta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nazwisko_klienta" class="col-md-4 col-form-label text-md-end">{{ __('Nazwisko') }}</label>

                            <div class="col-md-6">
                                <input id="nazwisko_klienta" type="text" class="form-control @error('nazwisko_klienta') is-invalid @enderror" name="nazwisko_klienta" value="{{ old('nazwisko_klienta') }}" required autocomplete="nazwisko_klienta" autofocus>

                                @error('nazwisko_klienta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nr_tel_klienta" class="col-md-4 col-form-label text-md-end">{{ __('Nr telefonu') }}</label>

                            <div class="col-md-6">
                                <input id="nr_tel_klienta" type="text" class="form-control @error('nr_tel_klienta') is-invalid @enderror" name="nr_tel_klienta" value="{{ old('nr_tel_klienta') }}" required autocomplete="nr_tel_klienta" autofocus>

                                @error('nr_tel_klienta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email_klienta" class="col-md-4 col-form-label text-md-end">{{ __('Adres Email') }}</label>

                            <div class="col-md-6">
                                <input id="email_klienta" type="email" class="form-control @error('email_klienta') is-invalid @enderror" name="email_klienta" value="{{ old('email_klienta') }}" required autocomplete="email_klienta">

                                @error('email_klienta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="haslo_klient" class="col-md-4 col-form-label text-md-end">{{ __('Hasło') }}</label>

                            <div class="col-md-6">
                                <input id="haslo_klient" type="password" class="form-control @error('haslo_klient') is-invalid @enderror" name="haslo_klient" required autocomplete="new-haslo_klient">

                                @error('haslo_klient')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="haslo_klient-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Potwierdź hasło') }}</label>

                            <div class="col-md-6">
                                <input id="haslo_klient-confirm" type="password" class="form-control" name="haslo_klient_confirmation" required autocomplete="new-haslo_klient">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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

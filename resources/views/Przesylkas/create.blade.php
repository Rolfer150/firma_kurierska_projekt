@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dodawanie przesyłek</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('Przesylkas.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Id przesyłki</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Rodzaj płatności</label>

                            <div class="col-md-6">
                                <input id="Rodzaj_platnosci" type="text" class="form-control @error('Rodzaj_platnosci') is-invalid @enderror" name="Rodzja_platnosci" value="{{ old('Rodzaj_platnosci') }}" required autocomplete="name" autofocus>

                                @error('Rodzaj_platnosci')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Data_dostarczenia" class="col-md-4 col-form-label text-md-end">Data dostarczenia</label>

                            <div class="col-md-6">
                                <input id="Data_dostarczenia" type="date" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('Data_dostarczenia') }}" required autocomplete="Rodzaj_przesylki" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Rodzaj_przesylki" class="col-md-4 col-form-label text-md-end">Rodzaj przesyłki</label>

                            <div class="col-md-6">
                                <input id="Rodzaj_przesylki" type="text" class="form-control @error('Rodzaj_przesylki') is-invalid @enderror" name="Rodzaj_przesylki" value="{{ old('Rodzaj_przesylki') }}" required autocomplete="Rodzaj_przesylki">

                                @error('Rodzaj_przesylki')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Cena (w złotówkach)</label>

                            <div class="col-md-6">
                                <input id="Cena" type="number" step="0.01" min="0" class="form-control" name="Cena" required autocomplete="Cena">
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
        </div>
    </div>
</div>
@endsection


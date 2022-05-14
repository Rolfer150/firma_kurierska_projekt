@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dodawanie adresu</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('Adres.create') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Miasto</label>

                                <div class="col-md-6">
                                    <input id="miasto" type="text" class="form-control @error('miasto') is-invalid @enderror" name="miasto" value="{{ old('miasto') }}" required autocomplete="miasto" autofocus>

                                    @error('miasto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Numer domu</label>

                                <div class="col-md-6">
                                    <input id="numer_domu" type="number" class="form-control @error('numer_domu') is-invalid @enderror" name="numer_domu" value="{{ old('numer_domu') }}" autofocus>

                                    @error('numer_domu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Numer mieszkania</label>

                                <div class="col-md-6">
                                    <input id="rodzaj_przesylki" type="number" class="form-control @error('rodzaj_przesylki') is-invalid @enderror" name="rodzaj_przesylki" value="{{ old('rodzaj_przesylki') }}" required autocomplete="rodzaj_przesylki">

                                    @error('rodzaj_przesylki')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="cena" class="col-md-4 col-form-label text-md-end">Ulica</label>

                                <div class="col-md-6">
                                    <input id="cena" type="text" step="0.01" min="0" class="form-control @error('cena') is-invalid @enderror" name="cena" required autocomplete="cena">

                                    @error('cena')
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
            </div>
        </div>
    </div>
@endsection

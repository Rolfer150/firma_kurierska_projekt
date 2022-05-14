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
                                <label for="name" class="col-md-4 col-form-label text-md-end">Rodzaj płatności</label>

                                <div class="col-md-6">
                                    <input id="rodzaj_platnosci" type="text" class="form-control @error('rodzaj_platnosci') is-invalid @enderror" name="rodzaj_platnosci" value="{{ old('rodzaj_platnosci') }}" required autocomplete="rodzaj_platnosci" autofocus>

                                    @error('rodzaj_platnosci')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Data dostarczenia</label>

                                <div class="col-md-6">
                                    <input id="data_dostarczenia" type="date" class="form-control @error('data_dostarczenia') is-invalid @enderror" name="data_dostarczenia" value="{{ old('data_dostarczenia') }}" required autocomplete="data_dostarczenia" autofocus>

                                    @error('data_dostarczenia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Rodzaj przesyłki</label>

                                <div class="col-md-6">
                                    <input id="rodzaj_przesylki" type="text" class="form-control @error('rodzaj_przesylki') is-invalid @enderror" name="rodzaj_przesylki" value="{{ old('rodzaj_przesylki') }}" required autocomplete="rodzaj_przesylki">

                                    @error('rodzaj_przesylki')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="cena" class="col-md-4 col-form-label text-md-end">Cena (w złotówkach)</label>

                                <div class="col-md-6">
                                    <input id="cena" type="number" step="0.01" min="0" class="form-control @error('cena') is-invalid @enderror" name="cena" required autocomplete="cena">

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

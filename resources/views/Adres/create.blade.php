@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dodawanie adresu</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('Adres.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="miasto" class="col-md-4 col-form-label text-md-end">Miasto</label>

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
                                    <input id="numer_mieszkania" type="number" class="form-control @error('numer_mieszkania') is-invalid @enderror" name="numer_mieszkania" value="{{ old('numer_mieszkania') }}">

                                    @error('numer_mieszkania')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="ulica" class="col-md-4 col-form-label text-md-end">Ulica</label>

                                <div class="col-md-6">
                                    <input id="ulica" type="text" step="0.01" min="0" class="form-control @error('ulica') is-invalid @enderror" name="ulica" value="{{ old('ulica') }}" required autocomplete="ulica">

                                    @error('ulica')
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

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
                                <label for="platnosc" class="col-md-4 col-form-label text-md-end">Rodzaj płatności</label>

                                <div class="col-md-6">
                                    <select id="platnosc_id" class="form-control @error('platnosc_id') is-invalid @enderror" name="platnosc_id" required>
                                        <option>Brak</option>
                                        @foreach($platnosci as $platnosc)
                                            <option value="{{$platnosc->id}}">{{$platnosc->platnosc}}</option>
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


                        </form>

                        <form method="POST" action="{{ route('Adres.store') }}">
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
                                <label for="numer_domu" class="col-md-4 col-form-label text-md-end">Numer domu</label>

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
                                <label for="numer_mieszkania" class="col-md-4 col-form-label text-md-end">Numer mieszkania</label>

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

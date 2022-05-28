@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dodawanie paczkomatu</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('paczkomat.store') }}">
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

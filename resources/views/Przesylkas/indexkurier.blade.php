@extends('layouts.navbar')

@section('zawartosc')
    <div class="container">
        <div class="row">
            <div class="col-6 mt-5">
                <h1>Lista przesyłek</h1>
            </div>

        </div>
        <div class="row">
            <table class="table table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Imie i nazwisko nadawcy</th>
                    <th scope="col">Imie i nazwisko odbiorcy</th>
                    <th scope="col">Adres odbiorcy</th>
                    <th scope="col">Rodzaj platnosci</th>
                    <th scope="col">Rodzaj dostawy</th>
                    <th scope="col">Wielkosc paczki</th>
                    <th scope="col">Cena (zł)</th>
                    <th scope="col">Data dostarczenia</th>
                    <th scope="col">Status przesyłki</th>
                    <th scope="col">Akcje</th>
                </tr>
                </thead>
                <tbody>
                @foreach($przesylkas as $przesylka)
                    <tr>
                        <td>{{$przesylka->user->name}} {{$przesylka->user->surname}}</td>
                        <td>{{$przesylka->imie_odbiorca}} {{$przesylka->nazwisko_odbiorca}}</td>
                        @if($przesylka->dostawa->dostawa == 'Kurier')
                            <td> powiat {{$przesylka->powiat->powiat}} {{ $przesylka->miasto_odbiorca }} {{ $przesylka->ulica_odbiorca }}
                                {{ $przesylka->numer_domu_odbiorca }} {{ $przesylka->numer_mieszkania_odbiorca }} {{ $przesylka->kod_pocztowy_odbiorca }}</td>
                        @endif
                        @if($przesylka->dostawa->dostawa == 'Paczkomat')
                            <td> powiat {{$przesylka->paczkomat->miasto_paczkomat}}, {{$przesylka->paczkomat->ulica_paczkomat}}
                                {{$przesylka->paczkomat->numer_ulicy_paczkomat}}, {{$przesylka->paczkomat->kod_pocztowy_paczkomat}}</td>
                        @endif
                        <td>{{$przesylka->platnosc->platnosc}}</td>
                        <td>{{$przesylka->dostawa->dostawa}}</td>
                        <td>{{$przesylka->wielkosc->wielkosc}}</td>
                        <td>{{$przesylka->wielkosc->cena}}</td>
                        <td>{{$przesylka->data_dostarczenia}}</td>
                        <td>{{$przesylka->status_przesylki}}</td>
                        <td>
                            <a href="{{ route('Przesylkas.showkurier', $przesylka->id) }}">
                                <button class="btn btn-primary btn-sm">P</button>
                            </a>
                            <a href="{{ route('Przesylkas.editkurier', $przesylka->id) }}">
                                <button class="btn btn-success btn-sm">E</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('javascript')
    const deleteUrl = "{{ url('przesylkas') }}/";
@endsection
@section('js-files')

@endsection

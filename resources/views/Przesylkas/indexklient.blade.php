@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Lista przesyłek</h1>
            </div>
            <div class="col-6">
                <a class="float-end" href="{{ route('Przesylkas.create') }}">
                    <button type="button" class="btn btn-primary">Dodaj</button>
                </a>
            </div>
        </div>
        <div class="row">
            <table class="table table-hover">
                <thead class="thead-dark">
                <tr>
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
                @foreach(Auth::user()->przesylkas as $przesylka)
                    <tr>
                        <td>{{$przesylka->user->name}}</td>
                        <td>Powiat {{$przesylka->powiat->powiat}} {{ $przesylka->miasto_odbiorca }} {{ $przesylka->ulica_odbiorca }}
                            {{ $przesylka->numer_domu_odbiorca }} {{ $przesylka->numer_mieszkania_odbiorca }} {{ $przesylka->kod_pocztowy_odbiorca }}</td>
                        <td>{{$przesylka->platnosc->platnosc}}</td>
                        <td>{{$przesylka->dostawa->dostawa}}</td>
                        <td>{{$przesylka->wielkosc->wielkosc}}</td>
                        <td>{{$przesylka->wielkosc->cena}}</td>
                        <td>{{$przesylka->data_dostarczenia}}</td>
                        <td>{{$przesylka->status_przesylki}}</td>
                        <td>
                            <a href="{{ route('Przesylkas.showklient', $przesylka->id) }}">
                                <button class="btn btn-primary btn-sm">P</button>
                            </a>
                            <a href="{{ route('Przesylkas.editklient', $przesylka->id) }}">
                                <button class="btn btn-success btn-sm">E</button>
                            </a>
                            <button class="btn btn-danger btn-sm delete" data-id="{{ $przesylka->id }}">X</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $przesylkas->links() }}
        </div>
    </div>
@endsection
@section('javascript')
    const deleteUrl = "{{ url('przesylkas') }}/";
@endsection
@section('js-files')
    <script src="{{ asset('js/delete1.js') }}"></script>
@endsection

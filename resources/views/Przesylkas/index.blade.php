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
                    <th scope="col">#</th>
                    <th scope="col">Imie i nazwisko nadawcy</th>
                    <th scope="col">Rodzaj platnosci</th>
                    <th scope="col">Rodzaj dostawy</th>
                    <th scope="col">Wielkosc paczki</th>
                    <th scope="col">Cena (zł)</th>


                    <th scope="col">Adres</th>
                    <th scope="col">Akcje</th>
                </tr>
                </thead>
                <tbody>
                @foreach($przesylkas as $przesylka)
                    <tr>
                        <th scope="row">{{$przesylka->id}}</th>
                        <td>{{$przesylka->user->name}}</td>
                        <td>{{$przesylka->platnosc->platnosc}}</td>
                        <td>{{$przesylka->dostawa->dostawa}}</td>
                        <td>{{$przesylka->wielkosc->wielkosc}}</td>
                        <td>{{$przesylka->wielkosc->cena}}</td>
                        <td>{{$przesylka->adres_id}}</td>
                        <td>
                            <a href="{{ route('Przesylkas.show', $przesylka->id) }}">
                                <button class="btn btn-primary btn-sm">P</button>
                            </a>
                            <a href="{{ route('Przesylkas.edit', $przesylka->id) }}">
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

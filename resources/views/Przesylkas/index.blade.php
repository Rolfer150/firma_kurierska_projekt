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
                    <th scope="col">Rodzaj platnosci</th>
                    <th scope="col">Cena</th>
                    <th scope="col">Rodzaj przesylki</th>
                    <th scope="col">Data dostarczenia</th>
                    <th scope="col">Akcje</th>
                </tr>
                </thead>
                <tbody>
                @foreach($przesylkas as $przesylka)
                    <tr>
                        <th scope="row">{{$przesylka->id}}</th>
                        <td>{{$przesylka->rodzaj_platnosci}}</td>
                        <td>{{$przesylka->cena}}</td>
                        <td>{{$przesylka->rodzaj_przesylki}}</td>
                        <td>{{$przesylka->data_dostarczenia}}</td>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
@section('javascript')
    var $1 = $(function() {
    $('.delete').click(function () {
    $.ajax({
    method:"DELETE",
    url: "http://localhost:8000/przesylkas/" + $(this).data("id"),
    data: { id: $(this).data("id") }
    })
    .done(function(response) {
    window.location.reload();
    })
    .fail(function(response) {
    alert("ERROR");
    });
    });
    });
    </script>

@endsection

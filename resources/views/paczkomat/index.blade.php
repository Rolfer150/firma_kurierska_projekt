@extends('layouts.navbar')

@section('zawartosc')
    <div class="container">
        <div class="row">
            <div class="col-6 mt-5">
                <h1>Lista paczkomatów</h1>
            </div>
            <div class="col-6">
                <a class="float-end" href="{{ route('paczkomat.create') }}">
                    <button type="button" class="btn btn-secondary mt-5">Dodaj</button>
                </a>
            </div>
        </div>
        <div class="row">
            <table class="table table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Powiat</th>
                    <th scope="col">Szerokość geograficzna</th>
                    <th scope="col">Długość geograficzna</th>
                    <th scope="col">Opis</th>
                    <th scope="col">Miasto</th>
                    <th scope="col">Ulica</th>
                    <th scope="col">Numer ulicy</th>
                    <th scope="col">Kod pocztowy</th>
                    <th scope="col">Akcje</th>
                </tr>
                </thead>
                <tbody>
                @foreach($paczkomaty as $paczkomat)
                    <tr>
                        <th scope="row">{{$paczkomat->id}}</th>
                        <td>{{$paczkomat->powiat->powiat}}</td>
                        <td>{{$paczkomat->lat}}</td>
                        <td>{{$paczkomat->lng}}</td>
                        <td>{{$paczkomat->opis_paczkomat}}</td>
                        <td>{{$paczkomat->miasto_paczkomat}}</td>
                        <td>{{$paczkomat->ulica_paczkomat}}</td>
                        <td>{{$paczkomat->numer_ulicy_paczkomat	}}</td>
                        <td>{{$paczkomat->kod_pocztowy_paczkomat}}</td>
                        <td>
                            <a href="{{ route('paczkomat.show', $paczkomat->id) }}">
                                <button class="btn btn-primary btn-sm">P</button>
                            </a>
                            <a href="{{ route('paczkomat.edit', $paczkomat->id) }}">
                                <button class="btn btn-success btn-sm">E</button>
                            </a>
                            <button class="btn btn-danger btn-sm delete" data-id="{{ $paczkomat->id }}">X</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $paczkomaty->links() }}
        </div>
    </div>
@endsection
@section('javascript')
    const deleteUrl = "{{ url('paczkomats') }}/";
@endsection
@section('js-files')
    <script src="{{ asset('js/delete_paczkomat.js') }}"></script>
@endsection

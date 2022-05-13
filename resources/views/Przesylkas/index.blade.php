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
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id przesylki</th>
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
      <td>{{$przesylka->Rodzaj_platnosci}}</td>
      <td>{{$przesylka->Cena}}</td>
      <td>{{$przesylka->Rodzaj_przesylki}}</td>
      <td>{{$przesylka->Data_dostarczenia}}</td>
      <tr>
            <button class="btn btn-danger btn-sm delete" data-id="{{ $przesylka->id }}">
                X
            </button>
        </tr>
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
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection

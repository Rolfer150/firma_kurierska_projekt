@extends('layouts.app')

@section('content')
<div class="container">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Imiê</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">Numer telefonu</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->surname}}</td>
      <td>{{$user->phone_number}}</td>
      <td>{{$user->email}}</td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
@endsection

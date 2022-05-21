@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Imie</th>
                <th scope="col">Nazwisko</th>
                <th scope="col">Numer telefonu</th>
                <th scope="col">E-mail</th>
                <th scope="col">Rola</th>
                <th scope="col">Usuń konto</th>
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
                    @if($user->role == 'admin')
                        <td>Administrator</td>
                    @endif
                    @if($user->role == 'deliveryman')
                        <td>Kurier</td>
                    @endif
                    @if($user->role == 'user')
                        <td>Użytkownik</td>
                    @endif
                    <td>

                        <button class="btn btn-danger btn-sm delete" data-id="{{ $user->id }}">
                            X
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
@section('javascript')
<<<<<<< HEAD
    const deleteUrl = "{{ url('users') }}/";
@endsection
@section('js-files')
    <script src="{{ asset('js/delete.js') }}"></script>
=======
    var $1 = $(function() {
    $('.delete').click(function () {
    $.ajax({
    method:"DELETE",
    url: "http://localhost:8000/users/" + $(this).data("id"),
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


>>>>>>> 98b0693a76237d7b00657f2b53caffe44ce6a687
@endsection

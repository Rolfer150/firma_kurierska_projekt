@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edycja daty dostarczenia</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('Przesylkas.update', $przesylka->id) }}">
                            @csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">Data dostarczenia</label>

                                    <div class="col-md-6">
                                        <input id="data_dostarczenia" type="date" class="form-control @error('data_dostarczenia') is-invalid @enderror" name="data_dostarczenia" value="{{ $przesylka->data_dostarczenia }}" required autocomplete="data_dostarczenia" autofocus>

                                        @error('data_dostarczenia')
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

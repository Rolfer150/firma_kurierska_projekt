@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edycja statusu</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('Przesylkas.update', $przesylka->id) }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Status przesyłki</label>

                                <div class="col-md-6">
                                    <select id="status_id" class="form-control @error('status_id') is-invalid @enderror" name="status_id" required>
                                        <option>Brak</option>
                                        @foreach($statusy_przesylki as $status_przesylki)
                                            <option value="{{$status_przesylki->id}}">{{$status_przesylki->status_realizacji}}</option>
                                        @endforeach
                                    </select>

                                    @error('status_id')
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

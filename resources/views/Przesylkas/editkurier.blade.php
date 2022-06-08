@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edycja statusu</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('Przesylkas.updatekurier', $przesylka->id) }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Status przesyłki</label>

                                <div class="col-md-6">
                                    <select id="status_przesylki" class="form-control @error('status_przesylki') is-invalid @enderror" name="status_przesylki" required>
                                        <option>Brak</option>
                                        @foreach(\App\Enums\Status::STATUSTYPES as $key => $value)
                                            <option value="{{$value}}">{{\App\Enums\Status::STATUSTYPES[$key]}}</option>
                                        @endforeach
                                    </select>

                                    @error('status_przesylki')
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

@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/home/login.css') }}" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section class="login-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 login-sec">
                <h2 class="text-center">{{ __('Logowanie') }}</h2>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="form-group">
                        <label for="email" class="text-uppercase">{{ __('Adres Email') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-uppercase">{{ __('Hasło') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-check">
                        <button type="submit" class="btn btn-login float-right">Zatwierdź</button>
                        @if (Route::has('password.request'))
                            <a class="btn" href="{{ route('password.request') }}">
                                {{ __('Zapomniałeś hasła?') }}
                            </a>
                        @endif
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            <small>Zapamiętaj mnie</small>
                        </label>
                    </div>

                </form>
            </div>
            <div class="col-md-8 banner-sec">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="https://allekurier.pl/static/img/usluga-orlen-paczka.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>Firma kurierska</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
@endsection

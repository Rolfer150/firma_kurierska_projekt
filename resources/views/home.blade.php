<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Firma kurierska - Strona główna</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/home/login.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
<div class="login-block" style="height: 721px">
    <div class="container1">
                    <div class="main-page">
                        @can('isDeliveryman')
                        <button type="button" class="btn btn-success"><a class="navbar-brand" href="{{ url('kuriers') }}">Kliknij aby przejść do strony głównej</a></button>
                        @endcan

                        @can('isUser')
                        <button type="button" class="btn btn-success"><a class="navbar-brand" href="{{ url('klients') }}">Kliknij aby przejść do strony głównej</a></button>
                        @endcan

                        @can('isAdmin')
                        <button type="button" class="btn btn-success"><a class="navbar-brand" href="{{ url('admin.home') }}">Kliknij aby przejść do strony głównej</a></button>
                        @endcan
                    </div>
            </div>
    </div>
</section>
</body>
</html>

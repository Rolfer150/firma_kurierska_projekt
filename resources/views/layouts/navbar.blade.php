<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Firma kurierska - Strona główna</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/home/style.css')}}" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 bg-secondary d-none d-lg-block">
            <a href="" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <h1 class="m-0 display-7 text-primary">Firma kurierska</h1>
            </a>
        </div>

        <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-primary">Firma kurierska</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="/" class="nav-item nav-link active">Strona główna</a>
                    <a href="/about" class="nav-item nav-link">O nas</a>
                    <a href="/contact" class="nav-item nav-link">Kontakt</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Zaloguj się</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{ route('login') }}" class="dropdown-item">Logowanie</a>
                            <a href="{{ route('register') }}" class="dropdown-item">Rejestracja</a>
                        </div>
                    </div>
                </div>
                <a href="/register" class="btn btn-primary mr-3 d-none d-lg-block">Sprawdź</a>
            </div>
        </nav>
    </div>
</div>
<main class="container-fluid">
    @yield('zawartosc')
</main>
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
    @yield('javascript')
</script>
@yield('js-files')
</body>
</html>

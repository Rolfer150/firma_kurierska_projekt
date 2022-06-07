<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Firma kurierska - Strona główna dla klienta</title>
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
                @guest
                <div class="navbar-nav mr-auto py-0">
                    @if (Route::has('login') && Route::has('register'))
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
                        @endif
                    @else
                            @can('isAdmin')
                                <div class="navbar-nav mr-auto py-0">
                                <a href="{{ route('adminmain') }}" class="nav-item nav-link">Strona główna - administrator</a>
                                <a href="{{ route('Przesylkas.index') }}" class="nav-item nav-link">Kontroluj przesyłki</a>
                                <a href="{{ route('paczkomat.index') }}" class="nav-item nav-link">Dodaj paczkomat</a>
                                <a href="https://konto.onet.pl/pl/signin?state=https%3A%2F%2Fpoczta.onet.pl%2F&client_id=poczta.onet.pl.front.onetapi.pl" class="nav-item nav-link">Powiadomienia</a>
                                </div>
                            @endcan
                            @can('isUser')
                            <div class="navbar-nav mr-auto py-0">
                            <a href="{{ route('klient.hello') }}" class="nav-item nav-link">Strona główna - klient</a>
                            <a href="{{ route('Przesylkas.indexklient') }}" class="nav-item nav-link">Nadaj przesyłkę</a>
                            <a href="/contact" class="nav-item nav-link">Powiadomienia</a>
                            </div>
                            @endcan
                        @can('isDeliveryman')
                            <div class="navbar-nav mr-auto py-0">
                            <a href="{{ route('deliveryman.hello') }}" class="nav-item nav-link">Strona główna - kurier</a>
                            <a href="{{ route('Przesylkas.indexkurier') }}" class="nav-item nav-link">Przesyłki do dostarczenia</a>
                            <a href="/contact" class="nav-item nav-link">Powiadomienia</a>
                            </div>
                        @endcan
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="#" class="dropdown-item">Edycja profilu</a>
                            </div>
                        </div>
                </div>

                    <a class="btn btn-primary mr-3 d-none d-lg-block" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Wyloguj się') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </div>
        </nav>
    </div>
</div>

    @yield('zawartosc')

</div>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>

<!-- Contact Javascript File -->
<script src="{{asset('mail/jqBootstrapValidation.min.js')}}"></script>
<script src="{{asset('mail/contact.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('js/home/main.js')}}"></script>
    @yield('javascript')
</script>
@yield('js-files')
</body>
</html>

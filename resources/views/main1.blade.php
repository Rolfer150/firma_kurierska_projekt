@extends('layouts.app')

@section('zawartosc')
<!DOCTYPE html>
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
<!-- Header Start -->
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
</div>
<!-- Header End -->


<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
            <li data-target="#header-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid" style="width: 100%;" src="{{ asset('img/carousel-4.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-primary text-uppercase mb-md-3">Firma kurierska</h5>
                        <h1 class="display-3 text-white mb-md-4">Najlepsi w dostarczaniu Twoich paczek</h1>
                        <a href="/register" class="btn btn-primary">Sprawdź</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid" style="width: 100%;" src="{{asset('img/carousel-5.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-primary text-uppercase mb-md-3">Firma kurierska</h5>
                        <h1 class="display-3 text-white mb-md-4">Pełen profesjonalizm naszych kurierów</h1>
                        <a href="/register" class="btn btn-primary">Sprawdź</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid" style="width: 100%;" src="{{asset('img/carousel-6.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-primary text-uppercase mb-md-3">Firma kurierska</h5>
                        <h1 class="display-3 text-white mb-md-4">Szybko oraz bezpieczenie do celu</h1>
                        <a href="/register" class="btn btn-primary">Sprawdź</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Contact Info Start -->
<div class="container-fluid pb-5 contact-info">
    <div class="row">
        <div class="col-lg-4 p-0">
            <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                <i class="fa fa-3x fa-map-marker-alt text-secondary mr-4"></i>
                <div class="">
                    <h5 class="mb-2">Nasza firma</h5>
                    <p class="m-0">123 Zamenhofa, Nowy Sącz, Polska</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 p-0">
            <div class="contact-info-item d-flex align-items-center justify-content-center bg-secondary text-white py-4 py-lg-0">
                <i class="fa fa-3x fa-envelope-open text-primary mr-4"></i>
                <div class="">
                    <h5 class="mb-2">Nasz adres mailowy</h5>
                    <p class="m-0">firma_kurierska@projekt.com</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 p-0">
            <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                <i class="fa fa-3x fa-phone-alt text-secondary mr-4"></i>
                <div class="">
                    <h5 class="mb-2">Kontakt pod numerem telefonu</h5>
                    <p class="m-0">+123 456 789</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Info End -->

<!-- Footer Start -->
<div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href="/main" class="navbar-brand">
                <h1 class="m-0 mt-n3 display-7 text-primary">Firma kurierska</h1>
            </a>
            <p>Oferujemy najlepsze usługi kurierskie w całym województwie</p>
            <h5 class="font-weight-semi-bold text-white mb-2">Godziny otwarcia:</h5>
            <p class="mb-1">Poniedziałek – Sobota: 8 – 16</p>
            <p class="mb-0">Niedziela: Zamknięte</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Kontakt</h4>
            <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>123 Zamenhofa, Nowy Sącz, Polska</p>
            <p><i class="fa fa-phone-alt text-primary mr-2"></i>+123 456 789</p>
            <p><i class="fa fa-envelope text-primary mr-2"></i>firma_kurierska@projekt.com</p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Skróty</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="/"><i class="fa fa-angle-right mr-2"></i>Strona główna</a>
                <a class="text-white mb-2" href="/about"><i class="fa fa-angle-right mr-2"></i>O nas</a>
                <a class="text-white" href="/contact"><i class="fa fa-angle-right mr-2"></i>Kontakt</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <img class="img-fluid" style="width: 80%;" src="{{asset('img/box.png')}}">
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">Copyright</a>.2022 <a href="https://htmlcodex.com"></a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Prywatność</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Warunki</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Pomoc</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


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
</body>

</html>
@endsection

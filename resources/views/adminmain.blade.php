@extends('layouts.navbar')

@section('zawartosc')



    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" style="width: 100%;" src="{{ asset('img/carousel-4.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-md-3">Firma kurierska - administrator</h5>
                            <h1 class="display-3 text-white mb-md-4">Kontrola kluczem do sukcesu firmy</h1>
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
                        <h5 class="mb-2">Biuro</h5>
                        <p class="m-0">Pokój nr.12, Zamenhofa 123, Nowy Sącz, Polska</p>
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
                        <h5 class="mb-2">Kontakt do kurierów</h5>
                        <p class="m-0">+133 466 719</p>
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
                <h5 class="font-weight-semi-bold text-white mb-2">Godziny pracy kurierów:</h5>
                <p class="mb-1">Poniedziałek – Sobota: 8 – 16</p>
                <p class="mb-0">Niedziela: Zamknięte</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Kontakt do siedziby firmy</h4>
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
                    <a class="text-white mb-2" href="/admin"><i class="fa fa-angle-right mr-2"></i>Strona główna - administrator</a>
                    <a class="text-white mb-2" href="/#"><i class="fa fa-angle-right mr-2"></i>Lista pracowników</a>
                    <a class="text-white mb-2" href="/paczkomats/create"><i class="fa fa-angle-right mr-2"></i>Dodaj paczkomat</a>
                    <a class="text-white mb-2" href="https://konto.onet.pl/pl/signin?state=https%3A%2F%2Fpoczta.onet.pl%2F&client_id=poczta.onet.pl.front.onetapi.pl"><i class="fa fa-angle-right mr-2"></i>Powiadomienia</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <img class="img-fluid" style="width: 80%;" src="{{asset('img/box.png')}}" alt="Image">
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
@endsection
